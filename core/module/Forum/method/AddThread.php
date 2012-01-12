<?php

final class Forum_AddThread extends GWF_Method
{
	/**
	 * @var GWF_ForumBoard
	 */
	private $board = false;
	
	
	public function getHTAccess()
	{
		return 'RewriteRule ^forum/add/thread/([0-9]+)/[^/]+$ index.php?mo=Forum&me=AddThread&bid=$1'.PHP_EOL;
	}
	
	public function execute()
	{
		if (false !== ($error = $this->sanitize($this->_module))) {
			return $error;
		}
		
		if (false !== (Common::getPost('preview'))) {
			return $this->onPreview($this->_module);
		}
		
		if (false !== (Common::getPost('add_thread'))) {
			return $this->onAddThread($this->_module);
		}
		
		return $this->templateAddThread($this->_module);
	}
	
	private function sanitize()
	{
		if (false !== ($error = $this->_module->isNewThreadAllowed())) {
			return $error;
		}
		
		$this->board = $this->_module->getCurrentBoard();
		
		return false;
	}
	
	private function getForm()
	{
		$buttons = array(
			'add_thread' => $this->_module->lang('btn_add_thread'),
			'preview' => $this->_module->lang('btn_preview'),
		);
		$b = $this->board;
		$data = array(
			'title' => array(GWF_Form::STRING, '', $this->_module->lang('th_title')),
			'message' => array(GWF_Form::MESSAGE, '', $this->_module->lang('th_message')),
			'smileys' => array(GWF_Form::CHECKBOX, false, $this->_module->lang('th_smileys')),
//			'guest_view' => array(GWF_Form::CHECKBOX, $b->isGuestView(), $this->_module->lang('th_guest_view')),
			'bbcode' => array(GWF_Form::CHECKBOX, false, $this->_module->lang('th_bbcode')),
			'submit' => array(GWF_Form::SUBMITS, $buttons, ''),
		);
		return new GWF_Form($this, $data);
	}
	
	private function templateAddThread(Module_Forum $module, $nav=true)
	{
		$form = $this->getForm($this->_module);
		$tVars = array(
			'nav' => $nav,
			'form' => $form->templateY($this->_module->lang('ft_add_thread')),
		);
		return $this->_module->templatePHP('add_thread.php', $tVars);
	}
	
	##################
	### Validators ###
	##################
	public function validate_title(Module_Forum $module, $arg) { return $this->_module->validate_title($arg); }
	public function validate_message(Module_Forum $module, $arg) { return $this->_module->validate_message($arg); }
	
	###############
	### Preview ###
	###############
	private function onPreview()
	{
		$user = GWF_Session::getUser();
		
		$form = $this->getForm($this->_module);
		
		$errors = $form->validate($this->_module);
		
		$title = $form->getVar('title');
		$message = $form->getVar('message');
		$options = 0;
		$options |= Common::getPost('bbcode') === false ? 0 : GWF_ForumPost::DISABLE_BB;
		$options |= Common::getPost('smileys') === false ? 0 : GWF_ForumPost::DISABLE_SMILE;
		
		$tVars = array(
			'thread' => GWF_ForumThread::fakeThread($user, $title),
			'posts' => array(GWF_ForumPost::fakePost($user, $title, $message, $options, 0, 0, GWF_Time::getDate(GWF_Date::LEN_SECOND), true)),
			'pagemenu' => '', 
			'actions' => false,
			'title' => true,
			'nav' => true,
			'term' => '',
		);
		
		return $errors.$this->_module->templatePHP('show_thread.php', $tVars).$this->templateAddThread($this->_module, false);
	}
	
	private function onAddThread()
	{
		$form = $this->getForm($this->_module);
		
		if (false !== ($error = $form->validate($this->_module))) {
			return $error.$this->templateAddThread($this->_module);
		}
		
		$user = GWF_Session::getUser();
		$is_mod = $user === false && $this->_module->isGuestPostModerated();
		
		$title = $form->getVar('title');
		$message = $form->getVar('message');
		$bid = $this->board->getID();
		$gid = $this->board->getGroupID();
		$options = 0;
		$options |= $is_mod === false ? 0 : GWF_ForumThread::IN_MODERATION;
		$options |= $this->board->isGuestView() ? GWF_ForumThread::GUEST_VIEW : 0;
//		$options |= Common::getPost('guest_view') === false ? 0 : GWF_ForumThread::GUEST_VIEW;
		
		$thread = GWF_ForumThread::fakeThread($user, $title, $bid, $gid, 1, $options);
		if (false === ($thread->insert())) {
			return GWF_HTML::err('ERR_DATABASE', array(__FILE__, __LINE__));
		}

		$tid = $thread->getID();
		$gid = $thread->getGroupID();
		$options = 0;
		$options |= Common::getPost('bbcode') === false ? 0 : GWF_ForumPost::DISABLE_BB;
		$options |= Common::getPost('smileys') === false ? 0 : GWF_ForumPost::DISABLE_SMILE;
		$options |= $is_mod === false ? 0 : GWF_ForumPost::IN_MODERATION;
		$options |= $this->board->isGuestView() ? GWF_ForumPost::GUEST_VIEW : 0;
		
		$post = GWF_ForumPost::fakePost($user, $title, $message, $options, $tid, $gid);
		if (false === ($post->insert())) {
			return GWF_HTML::err('ERR_DATABASE', array(__FILE__, __LINE__));
		}
		
		if (!$is_mod)
		{
			$thread->onApprove();
//			$this->_module->cachePostcoun();
			return $this->_module->message('msg_posted', array($thread->getLastPageHREF()));
		}
		else
		{
			GWF_ForumSubscription::sendModerateThread($this->_module, $thread, $message);
			return $this->_module->message('msg_posted_mod', array($this->board->getShowBoardHREF()));
		}
	}
}

?>