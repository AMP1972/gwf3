<?php
####conf retryout,u,l,i,7
$lang = array(
	'en' => array(
		'help' => 'Usage: %CMD% <password>. Logs you in. ',
		'already' => 'You are already logged in, maybe by NickServ?',
		'not_reg' => 'You are not registered. Try %T%register <password> in private first.',
		'paswrng' => 'Your password is wrong. This incident is beeing reported.',
		'wait' => 'Please wait %s and try again.',
		'logedin' => 'Welcome back! You are now logged in.',
		'conf_retryout' => 'Specifies the timeout between two consecutive login attempts.',
	),
	'de' => array(
		'help' => 'Nutze: %CMD% <passwort>. Authentifiziert Dich mit %BOT%.',
		'already' => 'Du bist bereits eingeloggt, eventuell durch NickServ?',
		'not_reg' => 'Du hast Dich noch nicht registriert. Nutze %T%register <passwort> im query mit %BOT%.',
		'paswrng' => 'Falsches Passwort. Davon wird der Weihnachtsmann erfahren!',
		'wait' => 'Bitte warte %s und versuche es noch einmal.',
		'logedin' => 'Willkommen zurück! Du bist nun authentifiziert.',
		'conf_retryout' => 'Die Zeit zwischen zwei Login versuchen.',
	),
);
$plugin = Dog::getPlugin();
$user = Dog::getUser();
$argv = $plugin->argv();
$wait = $plugin->getConf('retryout');
$uid = $user->getID();
$t = microtime(true);

# Attmepts
global $DOG_RLOGIN_ATTEMPTS;
if (!isset($DOG_RLOGIN_ATTEMPTS)) $DOG_RLOGIN_ATTEMPTS = array();
# TODO: Cleanup attempts.

if (count($argv) !== 1)
{
	$plugin->showHelp();
}
elseif ($user->isLoggedIn())
{
	$plugin->rply('already');
}
elseif (!$user->isRegistered())
{
	$plugin->rply('not_reg');
}
elseif (isset($DOG_RLOGIN_ATTEMPTS[$uid]) && ($DOG_RLOGIN_ATTEMPTS[$uid] > ($t-$wait)))
{
	$duration = round($wait - ($t - $DOG_RLOGIN_ATTEMPTS[$uid]) + 0.5);
	$plugin->rply('wait', array(GWF_Time::humanDuration($duration)));
}
elseif (!GWF_Password::checkPasswordS($argv[0], $user->getPass()))
{
	$DOG_RLOGIN_ATTEMPTS[$uid] = $t;
	$plugin->rply('paswrng');
}
else
{
	$user->setLoggedIn();
	$plugin->rply('logedin');
}
