<?php
$lang = array(
	'en' => array(
		'help' => 'Usage: %CMD% <user> [<on|off>]. Set or show a user\'s botflag.',
		'err_owner' => 'You cannot enable the botflag for %s.',
		'bot_on' => 'This user is flagged as a bot.',
		'bot_off' => 'This user is not flagged as a bot.',
	),
	'de' => array(
		'help' => 'Nutze: %CMD% <user> [<on|off>]. Setze oder zeige das Botflag für einen User.',
		'err_owner' => 'Du kannst %s nicht als bot markieren.',
		'bot_on' => 'Diser Nutzer ist als bot markiert.',
		'bot_off' => 'Diser Nutzer ist nicht als bot markiert.',
	),
);
$plugin = Dog::getPlugin();
$argv = $plugin->argv();
$argc = count($argv);
if ($argc < 1 || $argc > 2)
{
	return $plugin->showHelp();
}

if (false === ($user = Dog::getOrLoadUserByArg($argv[0])))
{
	return Dog::rply('err_user');
}

if ($argc === 1)
{
	if ($user->isOptionEnabled(Dog_User::BOT))
	{
		$plugin->rply('bot_on');
	}
	else
	{
		$plugin->rply('bot_off');
	}
}
else
{
	$argv[1] = strtolower($argv[1]);
	if ($argv[1] === 'on')
	{
		$isx = Dog_PrivServer::hasPermChar($user->getServer(), $user, 'x'); // he Owner
		$isy = Dog_PrivServer::hasPermChar($user->getServer(), $user, 'y'); // he Hoster
		$isuy = Dog_PrivServer::hasPermChar($user->getServer(), Dog::getUser(), 'y'); // Caller Hoster
		if ($isy || ($isx && (!$isuy))) // He hoster or (he owner and you not hoster) 
		{
			return $plugin->rply('err_owner', $user->getName());
		}
		$user->setOption(Dog_User::BOT, true);
		$plugin->rply('bot_on');
	}
	elseif ($argv[1] === 'off')
	{
		$user->setOption(Dog_User::BOT, false);
		$plugin->rply('bot_off');
	}
}
