<?php

$lang = array(

	# Titles
	'form_title' => 'Konto Einstellungen',
	'chmail_title' => 'Geben sie ihre neue EMail Addresse an',

	# Headers
	'th_username' => 'Ihr Benutzername',
	'th_email' => 'Kontakt EMail',
	'th_demo' => 'Demographische Optionen - Diese können sie nur einmal alle %1% ändern.',
	'th_countryid' => 'Land',	
	'th_langid' => 'Muttersprache',	
	'th_langid2' => '1. Fremdsprache',
	'th_birthdate' => 'Ihr Geburtsdatum',
	'th_gender' => 'Ihr Geschlecht',
	'th_flags' => 'Optionen - Änderungen sind jederzeit möglich',
	'th_adult' => 'Möchten sie Inhalt für Erwachsene?',
	'th_online' => 'Ihren Online Status verstecken?',
	'th_show_email' => 'EMail addresse öffentlich sichtbar?',
	'th_avatar' => 'Ihr Benutzerbild',
	'th_approvemail' => '<b>Ihre EMail ist<br/>nicht bestätigt</b>',
	'th_email_new' => 'Ihre neue EMail Addresse',
	'th_email_re' => 'EMail Addresse wiederholen',

	# Buttons
	'btn_submit' => 'Änderungen übernehmen',
	'btn_approvemail' => 'EMail bestätigen',
	'btn_changemail' => 'Neue EMail festlegen',
	'btn_drop_avatar' => 'Benutzerbild löschen',

	# Errors
	'err_token' => 'Ungültiges Token.',
	'err_email_retype' => 'Sie müssen Ihre EMail korrekt wiederholen.',
	'err_delete_avatar' => 'Ein Fehler ist beim Löschen Ihres Avatars aufgetreten.',
	'err_no_mail_to_approve' => 'Sie haben keine EMail zum bestätigen angegeben.',
	'err_already_approved' => 'Ihre EMail Addresse ist bereits bestätigt.',
	'err_no_image' => 'Ihre hochgeladene Datei ist kein Bild, oder zu klein.',
	'err_demo_wait' => 'Sie haben Ihre demographischen Einstellungen erst kürzlich geändert. Bitte warten sie %1%.',
	'err_birthdate' => 'Ihr Geburts-Datum ist ungültig.',

	# Messages
	'msg_mail_changed' => 'Ihre EMail Addresse wurde geändert und lautet nun <b>%1%</b>.',
	'msg_deleted_avatar' => 'Ihr Benutzerbild wurde gelöscht.',
	'msg_avatar_saved' => 'Ihr neues Benutzerbild wurde gespeichert.',
	'msg_demo_changed' => 'Ihre demographischen Einstellungen wurden erfolgreich geändert.',
	'msg_mail_sent' => 'Wir haben Ihnen eine EMail gesendet um die Änderungen vorzunehmen. Bitte folgen sie den Anweisungen dort.',
	'msg_show_email_on' => 'Ihre EMail ist nun öffentlich sichtbar.',
	'msg_show_email_off' => 'Ihre EMail ist nun versteckt.',
	'msg_adult_on' => 'Sie können nun Inhalt für Erwachsene sehen.',
	'msg_adult_off' => 'Inhalt für Erwachsene wurde deaktiviert.',
	'msg_online_on' => 'Ihr Online-Status ist nun unsichtbar.',
	'msg_online_off' => 'Ihr Online-Status ist nun sichtbar.',

	# Admin Config
	'cfg_avatar_max_x' => 'Avatar Max. Breite',
	'cfg_avatar_max_y' => 'Avatar Max. Höhe',
	'cfg_avatar_min_x' => 'Avatar Min. Breite',
	'cfg_avatar_min_y' => 'Avatar Min. Höhe',
	'cfg_adult_age' => 'Mindest-Alter für Erwachsenen-Inhalt',
	'cfg_demo_changetime' => 'Demographische Änderung Interval',
	'cfg_mail_sender' => 'Absender für Konto Änderungen',
	'cfg_show_adult' => 'Webseite hat Inhalt f. Erwachsene?',
	'cfg_show_gender' => 'Geschlechts-Auswahl anzeigen?',
	'cfg_use_email' => 'Bestätigte EMail für änderungen erforderlich?',
	'cfg_show_avatar' => 'Benutzerbilder erlauben?',

############################
# --- EMAIL BELOW HERE --- #
	# CHANGE MAIL A
	'chmaila_subj' => GWF_SITENAME.': EMail ändern',
	'chmaila_body' => 
		'Liebe/Lieber %1%,'.PHP_EOL.
		PHP_EOL.
		'Sie haben angefragt ihre EMail auf '.GWF_SITENAME.' zu ändern.'.PHP_EOL.
		'Um die Änderung abzuschliessen, folgen sie bitten dem Link unterhalb dieses Textes.'.PHP_EOL.
		'Falls sie die Änderung nicht selbst beantragt haben sollten, können sie diese Mail ignorieren, oder uns darüber informieren.'.PHP_EOL.
		PHP_EOL.
		'%2%'.PHP_EOL.
		PHP_EOL.
		'Freundliche Grüße'.PHP_EOL.
		'Das '.GWF_SITENAME.' Team',
				
	# CHANGE MAIL B
	'chmailb_subj' => GWF_SITENAME.': EMail bestätigen',
	'chmailb_body' => 
		'Liebe/Lieber %1%,'.PHP_EOL.
		PHP_EOL.
		'Um diese EMail als ihre Kontakt-Addresse zu verwenden, müssen sie dies noch bestätigen indem sie den folgenden Link aufrufen:'.PHP_EOL.
		'%2%'.PHP_EOL.
		PHP_EOL.
		'Freundliche Grüße'.PHP_EOL.
		'Das '.GWF_SITENAME.' Team',
		
	# CHANGE DEMO
	'chdemo_subj' => GWF_SITENAME.': Demographische Einstellungen',
	'chdemo_body' =>
		'Liebe/Lieber %1%,'.PHP_EOL.
		PHP_EOL.
		'Sie haben angefragt ihre demographischen Einstellungen festzulegen oder zu ändern.'.PHP_EOL.
		'Dies können sie nur einmal alle %2% ausführen, also stellen sie bitte sicher, daß Ihre Angaben korrekt sind bevor sie fortfahren.'.PHP_EOL.
		PHP_EOL.
		'Geschlecht: %3%'.PHP_EOL.
		'Land: %4%'.PHP_EOL.
		'Muttersprache: %5%'.PHP_EOL.
		'Fremdsprache: %6%'.PHP_EOL.
		'Geburtstag: %7%'.PHP_EOL.
		PHP_EOL.
		'Wenn sie diese Einstellungen übernehmen möchten, rufen Sie bitte den folgenden Link auf:'.PHP_EOL.
		'%8%'.
		PHP_EOL.
		'Freundliche Grüße'.PHP_EOL.
		'Das '.GWF_SITENAME.' Team',

	# New Flags 
	'th_allow_email' => 'Anderen Erlauben ihnen eine EMail zu senden',
	'msg_allow_email_on' => 'Ihnen kann nun über diese Webseite eine EMail gesendet werden, ohne ihre Addresse zu offenbaren.',
	'msg_allow_email_off' => 'EMail kontakt wurde für Ihr Konto deaktiviert.',
		
	'th_show_bday' => 'Ihren Geburtstag anzeigen?',
	'msg_show_bday_on' => 'Ihr Geburtstag wird nun Mitgliedern bekannt gegeben, welche dies möchten.',
	'msg_show_bday_off' => 'Ihr Geburtstag ist nun versteckt.',
		
	'th_show_obday' => 'Andere Geburtstage anzeigen',
	'msg_show_obday_on' => 'Sie werden von nun an über Geburtstage informiert.',
	'msg_show_obday_off' => 'Sie werden nun nicht mehr über Geburtstage informiert.',

	# v2.02 Account Deletion
	'pt_accrm' => 'Konto Löschen',
	'mt_accrm' => 'Ihr Konto auf '.GWF_SITENAME.' löschen.',
	'pi_accrm' =>
		'Sie möchten ihr Konto auf '.GWF_SITENAME.' löschen.<br/>'.
		'Das ist schade. Ihr Konto wird nicht vollständig gelöscht, aber alle Verweise werden entfernt und Ihr Konto ist danach unbrauchbar.<br/>'.
		'Alle Verknüpfungen und Verweise zu Ihrem Konto werden als Gast angezeigt, dies kann nicht rückgängig gemacht werden.<br/>'.
		'Bevor sie Ihr Konto entgültig löschen, können Sie uns eine Nachricht hinterlassen, falls sie mit uns unzufrieden waren.<br/>',
	'th_accrm_note' => 'Notiz',
	'btn_accrm' => 'Konto Löschen',
	'msg_accrm' => 'Ihr Konto wurde als gelöscht markiert. Alle Verweise wurden gelöscht.<br/>Sie wurden aus dem System ausgeloggt.',
	'ms_accrm' => GWF_SITENAME.': %1% Konto gelöscht',
	'mb_accrm' =>
		'Liebes Team'.PHP_EOL.
		''.PHP_EOL.
		'Der Benutzer %1% hat soeben sein Konto gelöscht und diese Nachricht hinterlassen (kann leer sein):'.PHP_EOL.PHP_EOL.
		'%2%',
		

	# v2.03 Email Options
	'th_email_fmt' => 'Bevorzugtes EMail Format',
	'email_fmt_text' => 'Text',
	'email_fmt_html' => 'HTML',
	'err_email_fmt' => 'Bitte w�hlen Sie ein g�ltiges EMail Format.',
	'msg_email_fmt_0' => 'Sie werden EMails jetzt im HTML Format erhalten.',
	'msg_email_fmt_4096' => 'Sie werden EMails jetzt im Text Format erhalten.',
	'ft_gpg' => 'PGP/GPG Verschl�sselung einrichten',
	'th_gpg_key' => 'Laden Sie ihren �ffentlichen Schl�ssel hoch',
	'th_gpg_key2' => 'Oder f�gen Sie ihn hier ein',
	'tt_gpg_key' => 'Wenn Sie einen PGP Schl�ssel einstellen werden alle zu Ihnen gesendete EMails mit Ihrem �ffentlichen Schl�ssel verschl�sselt',
	'tt_gpg_key2' => 'F�gen Sie hier ihren �ffentlichen Schl�ssel ein oder Laden Sie ihn als Datei hoch.',
	'btn_setup_gpg' => 'Schl�ssel hochladeen',
	'btn_remove_gpg' => 'Schl�ssel entfernen',
	'err_gpg_setup' => 'F�gen Sie hier ihren �ffentlichen Schl�ssel ein oder Laden Sie ihn als Datei hoch.',
	'err_gpg_key' => 'Ihr �ffentlicher Schl�ssel scheint ung�ltig zu sein.',
	'err_gpg_token' => 'Ihre GPG Signatur passt nicht zu unseren Daten.',
	'err_no_gpg_key' => 'Der Benutzer %1% hat noch keinen �ffentlichen Schl�ssel angegeben.',
	'err_no_mail' => 'Sie haben keine best�tigte EMail Addresse.',
	'err_gpg_del' => 'Sie haben keinen best�tigten GPG Schl�ssel zum L�schen.',
	'err_gpg_fine' => 'Sie haben schon einen GPG Schl�ssel. Bitte l�schen Sie diesen zuerst.',
	'msg_gpg_del' => 'Ihr GPG Schl�ssel wurde erfolgreich gel�scht.',
	'msg_setup_gpg' => 'Ihr GPG Schl�ssel wurde gespeichert und wird ab jetzt verwendet.',
	'mails_gpg' => GWF_SITENAME.': GPG Verschl�sselung einrichten',
	'mailb_gpg' =>
		'Sehr geehrte(r) %1%,'.PHP_EOL.
		PHP_EOL.
		'Sie wollen die GPG Verschl�sselung f�r EMails dieser Seite aktivieren.'.PHP_EOL.
		'Klicken Sie zur Aktivierung auf den folgenden Link:'.PHP_EOL.
		PHP_EOL.
		'%2%'.PHP_EOL.
		PHP_EOL.
		'Mit freundlichen Gr��en'.PHP_EOL.
		'Das '.GWF_SITENAME.' Team',

	# v2.04 Change Password
	'th_change_pw' => '<a href="%1%">Passwort �ndern</a>',
	'err_gpg_raw' => GWF_SITENAME.' unterst�tzt nur ASCII formatierte GPG Schl�ssel.',
	# v2.05 (fixes)
	'btn_delete' => 'Account l�schen',
	'err_email_invalid' => 'Ihre EMail scheint ung�ltig zu sein.',

	# v3.00 (fixes3)
	'err_email_taken' => 'Diese EMail Addresse wird bereits von einem anderen Benutzer genutzt.',
);
?>
