<?php
$lang = array(
	'title' => 'PHP-0817',
	'info' =>
		'J'ai �crit un autre syst�me d'int�gration pour mes pages web dynamiques, mais il semble �tre vuln�rable � la faille LFI.<br/>'.
		'Voici le code:<br/>'.
		'%1$s<br/>'.
		'Votre mission est d'inclure <a href="%2$s">solution.php</a>.<br/>'.
		'Voici le script en action: <a href="%3$s">News</a>, <a href="%4$s">Forum</a>, <a href="%5$s">Guestbook</a>.<br/>'.
		'<br/>'.
		'Bonne chance!<br/>',

	'msg_solved' => 'Bien jou�, trop facile... Savez-vous pourquoi c'est possible ?',
	'err_security' => 'Parce que le code est sacr�ment vuln�rable, les points et les slash ne sont pas autoris�s dans votre entr�e.',
);
?>