<?php
$c = "#";
$b = chr(2);
/**
 * Please respect weird punctuations when doing human readable translations
 * Examples: .leading dot. missing dots,  leading spaces Etc. 
 */
$lang = array(
############
### Bits ###
############
# Tiny bits
'name' => 'Nombre',
'none' => 'Nada',
'over' => 'Sobre',
'items' => 'Objetos',
'mount' => 'Montura',
'bank_items' => 'Tus objetos del banco',
'unknown' => 'Desconocido',
'unknown_contr' => 'Contratistas desconocidos',
'modifiers' => " {$b}Modificadores{$b}: %s.", # statlist
'm' => 'm', # metres
'g' => '%dg', # gram
'kg' => '%.02fkg', # kilogram
'busy' => '%s ocupado.', # duration
'eta' => 'ETA: %s.', # duration
'hits1' => ', golpea al %s con %s daño', # player, damage
'hits2' => ', golpea al %s con %s(%s/%s)HP queda', # player, damage, hp left, max hp
'kills' => ', mata %s con %s', # player, damage
'loot_nyxp' => '. Tú ganas %s y %.02f XP',
'page' => 'página %d/%d: %s.',
'from_brewing' => 'elaborando pociones mágicas',
'members' => '%d miembros',

# Options
'opt_help' => 'Ayuda',
'opt_lock' => 'Equipo bloqueado',
'opt_bot' => 'Jugador marcado como Bot',
'opt_norl' => 'Líder permanente',
'enabled' => 'activado',
'disabled' => 'desactivado',

# PrintF-Formats
'fmt_list' => ', %s', # item
'fmt_gain' => '%s%.02f(%.02f/%.02f)%s', # sign, gain, now, max, unit
'fmt_asl' => "{$b}Edad{$b}:%d, %dcm %s", # age, height, weight
'fmt_requires' => " {$b}Requiere{$b}: %s.", # statted list
'fmt_stats' => ", {$b}%s{$b}:%s%s", # stat-long, base, (now), stat, now
'fmt_cityquests' => ', %s(%.01f%%)', # cityname, percent
'fmt_sumlist' => ", {$b}%s{$b}-%s(%s)", # enum, playername, summand
'fmt_quests' => ", %1\$s%2\$d%1\$s-%3\$s", # boldy, id, name
'fmt_rawitems' => ", {$b}%s{$b}-%s", # id, itemname
'fmt_items' => ", {$b}%s{$b}-%s%s", # id, itemname, (amt), amt
'fmt_effect' => ", {$b}%s{$b}:%s(%s)", # stat, gain, duration
'fmt_equip' => ", {$b}%s{$b}:%s", # long type, item, short type
'fmt_hp_mp' => ", {$b}%1\$s{$b}-%2\$s%5\$s(%3\$s/%4\$s)%5\$s", # $member->getEnum(), $member->getName(), $hpmp, $hpmmpm, $b2, $b1
'fmt_spells' => ", {$b}%s{$b}-%s:%s%s", # id, spellname, base, (adjusted), adjusted
'fmt_lvlup' => ', %4$s%1$s%4$s:%2$s(%4$s%3$s%5$s%4$s)', # field, tobase, karma, bold, K, couldbit
'fmt_giveitems' => ", {$b}%sx%s{$b}", # amt, itemname
'fmt_bazar_shop' => ", %dx{$b}%s{$b}(%s)", # itemcount, itemname, price
'fmt_bazar_shops' => ", {$b}%s{$b}(%d)", # player, itemcount
'fmt_bazar_search' => ", \"{$b}%s %s{$b}\"(%dx%s)", # player, itemname, amount, price

# Party actions in "You are %s", "Your party is %s", (UGLY)
'empty_party' => 'un grupo vacío',
// 'last_action' => ' Ultima acción: %s %s. %s.', # last action, last target, last durcation
'pa_delete' => "{$b}siendo borrado{$b}.",
'pa_talk' => "{$b}hablando{$b} a %s. %s queda. Ultima acción: %s", # enemy party, duration, last action
'pa_fight' => "{$b}luchando{$b} contra %s. Ultima acción: %s", # enemy party last action.
'pa_inside' => "{$b}dentro de{$b} %s.", # location
'pa_outside1' => "{$b}fuera{$b} of %s.", # location
'pa_outside2' => "en algún lugar dentro de %s.", # location
'pa_sleep' => "{$b}durmiendo{$b} dentro de %s.", # location
'pa_travel' => "{$b}viajando{$b} a %s. %s queda.", # location, duration
'pa_explore' => "{$b}explorando{$b} %s. %s queda.", # location, duration
'pa_goto' => "{$b}yendo{$b} a %s. %s queda.", # location, duration
'pa_hunt' => "{$b}cazando{$b} %s. %s queda.", # location, duration
'pa_hijack' => "{$b}secuestrando{$b} %s en %s. %s queda.", # playername, location, duration

# Quest states
'qu_open' => 'Abierto',
'qu_deny' => 'Prohibido',
'qu_done' => 'Hecho',
'qu_fail' => 'Fallado',
'qu_abort' => 'Abortado',
'qu_All' => 'Todo',
'qu_Browse' => 'Navegar',

# Sums
'sum_age' => 'edades',
'sum_bmi' => 'masa corporal',
'sum_height' => 'alturas',

# Stubs
'stub_found' => 'Has encontrado el %s. Sin embargo no hay descripción.', # location
'stub_enter' => 'Entras ha %s. Sin embargo no hay texto.', # location
'stub_shop_slogan' => 'Bienvenido a la tienda de %s\.', # player
'stub_found_bazar' => 'Has encontrado el bazar, un lugar dondes puedes ofrecer tus productos y comprarlos.',
'stub_enter_bazar' => 'Entras al bazar. Tu ves %d tiendas con un total de %d objetos.', # shopcount, itemcount
'stub_found_clanhq' => 'Has encontrado el cuartel general del clan.',
'stub_enter_clanhq' => 'Entras al cuartel general del clan.',
'stub_found_elevator' =>  'Entras al %s. Un letrero dice: "MAX %s KG".',
'stub_enter_elevator' =>  'Entras al %s. Un letrero dice: "MAX %s KG".',

# Clan history
'ch_0' => '%s creado el clan %s.', # player, clanname
'ch_1' => '%s pidió unirse al clan como miembro #%s.', # player, membernum
'ch_2' => '%s se ha unido a su clan como miembro #%s.', # player, membernum
'ch_3' => '%s ha dejado su clan y ahora tiene %s miembros.', # player, amt
'ch_4' => "{$b}%s{$b}: \"%s\"", # player, message
'ch_5' => '%s ha dejado %s dentro del banco del clan.', # player, nuyen
'ch_6' => '%s ha cogido %s del banco del clan.', # player, nuyen
'ch_7' => '%s ha puesto %s %s dentro del banco del clan.', # player, amt, item 
'ch_8' => '%s ha sacado %s %s fuera del banco del clan.', # player, amt, item
'ch_9' => '%s ha comprado más capacidad para miembros y ahora el clan puede tener hasta %s.', # player, memberslots
'ch_10' => '%s hacomprado más capacidad para nuyen y ahora el clan puede tener hasta %s.', # player, maxnuyen
'ch_11' => '%s ha comprado más capacidad de almacenamiento y ahora el clan puede tener hasta %s.', # player, maxstorage

# Bounty
'meet_bounty' => " Hay una {$b}recompensa{$b} en %s.", # sumlist
'no_bounty' => 'Este jugador no tiene recompensa.',
'total_bounty' => "Hay un total {$b}recompensa de %s{$b} por %s: %s.", # total, player, details
'no_bounties' => 'No hay recompensa en este momento.',
'bounty_page' => 'Página de recompensas %s/%s: %s.',

# Bad karma
'info_bk' => ', %s tiene %d mal_karma', # player, badkarma

# Ingame help
'hlp_in_outside' => 'Cuando encuentras sitios, estas fuera de ellos. Usa #goto o #enter para entrar en ellos. Puedes #(exp)lorarlos otra vez para buscar mas lugares.',
'hlp_clan_enter' => "Unete al clan con {$c}abandonar, {$c}solicitar y {$c}aceptar. Crear un clan con {$c}crear. Compra mas espacio y lema con {$c}gestionar. Ajusta opciones con {$c}cambiar. Accede al banco del clan con {$c}dejar, {$c}coger y {$c}ver, dinero del clan con {$c}pushy y {$c}popy.",
'hlp_bank' => "En un banco puedes usar {$c}pushi y {$c}popi con objetos del banco, y {$c}pushy y {$c}popy para cuardar nuyen. Usa {$c}viewi para listar o buscar tus objetos en el banco. Cada transacción tiene un coste de %s.",
'hlp_bazar' => "En el bazar puedes vender tus objetos. Tu puedes usar #push, #pop, #view, #search, #buy, #bestbuy, #buyslot, #slogan y #price aquí.",
'hlp_elevator' => 'En los ascensolres puedes usar #up, #down y #floor.',
'hlp_exit' => 'Puedes volver a este lugar para #leave (dejar) el edificio.',
'hlp_hotel' => 'Puedes pagar %s y #sleep aquí y recuerar el HP/MP de tu grupo.',
'hlp_hack' => ' Puedes usar unCyberdeck aquí para hackear ordenadores.',
'hlp_search' => ' Puedes usar #search aquí para buscar objetos en la habitación.',
'hlp_second_hand' => 'Puedes vender tus objetos con modificadores a precios mas altos aquí. Los objetos que se vendan aquí, se quedarán en al tienda.',
'hlp_store' => 'En este almacen puedes usar %s.',
'hlp_cyberdeck' => 'Este objeto solo funciona dentro de lugares con ordenadores.',
'hlp_cyberdeck_targets' => 'Tú no ves ningun ordenador con un interfaz Headcomputer aquí.',
'hlp_start' => "{$b}Razas conocidas{$b}: %s. {$b}Géneros conocidos{$b}: %s.",

# Start storyline
'start_1' => "Te despiertas en una habitación luminosa... Parece que es media tarde... parece como si estuviera en una habitación de un hotel.",
'start_2' => "Que ha pasado... No recuerdas nada.... Gosh, incluso has olvidado tu nombre.",
'start_3' => "Compruebas tu {$b}{$c}inventario{$b} y encuentras un boli de 'Renraku Inc.'. Dejas tu habitación y caminas hacia el mostrador. Usa {$b}{$c}talk{$b} para hablar con el recepcionista.",
'start_4' => "Usa {$b}{$c}c{$b} para ver todos los comandos disposibles. Comprobar {$b}{$c}help{$b} para navegar por los archivos de ayuda de Shadowlamb. Usa {$c}help <cmd> para ver la ayuda de un comando.",

# Knowledge
'ks_words' => 'Palabra',
'ks_spells' => 'Hechizo',
'ks_places' => 'Lugar',
'kp_words' => 'Palabras',
'kp_spells' => 'Hechizos',
'kp_places' => 'Lugares',

# Party loot
'pl_unknown' => 'Desconocido',
'pl_cycle' => 'Ciclo',
'pl_random' => 'Aleatorio',
'pl_killer' => 'Asesino',

# Clan toggles
'ct_moderation' => 'Moderación',

##########################
#   0000-4999   = Errors #
##########################
'0000' => 'No has comenzado #start el juego todavía. Teclea #start raza genero para comenzar a jugar.',
'0001' => 'Necesitas logearte para jugar.',
		
'1002' => 'Necesitas al menos un nivel de %d para hablar.', # level
'1003' => 'Por favor espera %s antes de hablar otra vez.', # duration
'1004' => 'No tienes %s pruebas.', # section
// '1005' => 'You don\'t know any word.',
'1006' => 'No cumples con los requisitos: %s.', # statted-list
'1007' => 'No hay objetos encontrados con los terminos de búsqueda.',
'1008' => 'No hay objetos aquí.',
'1009' => 'No hay tal página!',
'1010' => 'No existen pruebas aquí.',
'1011' => 'No has fijado tu asl con {$b}#aslset{$b} todavía. Necesitas hacer esto para comenzar a moverte en el juego.',
'1012' => 'El objetivo es desconocido.',
'1013' => 'No puedes usar este objeto.',
'1014' => 'No puedes equiparte con este objeto.',
'1015' => 'Tu grupo (nivel %d) no puede atacar a un grupo con un nivel de %d porque la diferencia de nivel es mas grande de %d.',
'1016' => 'Tu ya has fijado to asl a: %s.', # aslstring
'1017' => 'Este jugador es desconocido o no esta en memoria.',
'1018' => 'Este nombre de jugador es ambiguo. Intenta la {server} version.',
'1019' => 'No estas en un clan, amigo.',
'1020' => 'No sé que objeto es "%s".', # itemname
'1021' => 'No tienes nada comparable a "%s" equipado.', # itemname
'1022' => 'No estás en un almacen.',
'1023' => 'No tienes ese conocimiento.',
'1024' => 'Solo puedes ganar nivel en atributos, habilidades, conocimientos y hechizos. Además no puedes ganar nivel de esencia.',
'1025' => 'Necesitas aprender %s primero.', # field
'1026' => 'Ya has alcanzado el maximo nivel de %d para %s.',
'1027' => 'Necesitas %d karma para incrementar tu nivel base para %s de %d a %d, pero tú solo tienes %d karma.',
'1028' => '%s no está aquí o el nombre es ambiguo.',
'1029' => 'No tienes ese objeto.',
'1030' => 'No puedes intercambiar las mismas cosas.',
'1031' => 'No estás fuera de un lugar.',
'1032' => 'No eres el lider del grupo.',
'1033' => 'Tu grupo se está moviendo. Intenta este comando cuando este parado.',
'1034' => 'No puedes cambiar a modo corredor cuando has pasado al nivel 2.',
'1035' => 'En mazmorras no tienes montura.',
'1036' => 'Este comando no funciona en combate.',
'1037' => 'No puedes guardar objetos en esa montura.',
'1038' => 'Por favor especifica una cantidad positiva de objetos.',
'1039' => 'No puedes poner monturas en tu %s.', # mount name
'1040' => 'No tienes mucho %s.', # itemname
'1041' => 'Tu %s(%s/%s) no tiene habitación para %d de tu %s (%s).', # mountname, stored, storage, amt, itemname, weight
'1042' => 'No tienes ese objeto en tu montura.',
'1043' => 'No tienes mucho %s en tu %s.', # itemname, mountname
'1044' => 'Por favor espera %s antes de hablar otra vez.',  # duration
'1045' => 'Multiples jugadores te han susurrado , asi que lo dejé con este mensaje.',
'1046' => 'Nadie te ha susurrado en los últimos %s.', # duration
'1047' => 'Neceistas aprender alquimia primero.',
'1048' => 'No tienes ese hechizo.',
'1049' => 'No tienes el %s hechizo de ese alevado nivel.', # spellname
'1050' => 'No tienes un %s.',
'1051' => 'La elaboración de la poción ha fallado y la botella y la mandrágora se han perdido.',
'1052' => 'El hechizo "%s" solo funciona en combate.', # spellname
'1053' => 'No puedes lanzar un hezhizo con un nivel menor de 0.',
'1054' => 'No puedes lanzar %s nivel %s porque tu nivel de hechizo es de solo %s.', # spellname, levelneed, levelhave 
'1055' => 'Necesitas %s MP para lanzar %s nivel %s, pero solo tienes %s.', # needmp, spellname, level, #havemp
'1056' => 'Has fallado al lanzar %s. %s MP desperdiciado.%s',
'1057' => 'El %s desde %s falló.', # spellname, player
'1058' => 'No deberías tirar ese objeto.',
'1059' => 'No puedes cambiar tu equipo en combate cuando está bloqueado.',
'1060' => 'No puedes atacar a este grupo otra vez. Por favor espera %s.', # duration
'1061' => 'Gracioso. No deberías dejar caer ese objeto. Problemas?',
'1062' => 'Por favor especifica una cantidad positiva de nuyen.',
'1063' => 'Esto costaría %s pero solo tienes %s.', # nuyen
'1064' => 'Este jugador no está en tú grupo.',
'1065' => 'Sólo puedes controlar remotamente NPC',
'1066' => 'Sólo los siguientes comandos remotos están permitidos: %s.', # rawlist
'1067' => 'No tienes un %s equipado.', # type
'1068' => 'Ya estás explorando %s. ETA: %s.',
'1069' => 'Este lugar es desconocido o ambiguo.',
'1070' => 'Este lugar no existe en %s.',
'1071' => 'Ya estás en %s.',
'1072' => 'Por favor especifica un lugar para teletransporte.',
'1073' => 'Esta ciudad es desconocida.',
'1074' => 'No puedes lanzar teletransporte dentro de este lugar.',
'1075' => 'No puedes teletransportar a %s porque %s do(es) no tiene el nivel mínimo de %s.',
'1076' => 'Necesitas al menos %s de nivel %s para teletransportar %s miembros del grupo.',
'1077' => 'Necesitas %s MP para elaborar esta poción, pero sólo tienes %s.',
'1078' => 'No puedes lanzar este hechizo dentro de una mazmorra.',
'1079' => 'No puedes teletransportarte dentro de mazmorras.',
'1080' => 'No puedes moverte porque %s esta muerto.',
'1081' => 'No puedes moverte porque %s esta sobrecargado.',
'1082' => 'No puedes moverte porque %s no tiene #aslset.',
'1083' => 'No puedes cazar a los miembros de tu grupo.',
'1084' => 'No puedes cazart %s porque estás en %s y %s está en %s.',
'1085' => 'No puedes unirte a grupos NPC.',
'1086' => 'No puedes unirte a tu propio grupo.',
'1087' => 'El grupo no quiere que entres.',
'1088' => 'El grupo ha alcanzado el maximo de miembros de %d.',
'1089' => 'Este jugador no está en tu grupo.',
'1090' => 'No puedes echarte a ti mismo.',
'1091' => '%s ya es el líder del grupo.',
'1092' => 'No puedes dar el liderazgo a NPCs.',
'1093' => 'No estás en un grupo.',
'1094' => 'No deberías usar este comando para cambiar la posición del líder. Por favor usa el comando #(le)ader.',
'1095' => 'Ya eres el líder de tu grupo.',
'1096' => 'Tu líder no permite tomar posesión de liderazgo.',
'1097' => 'Por favor espera %s y prueba otra vez.',
'1098' => 'Actualmente no hay enemigos disponibles.',
'1099' => 'No puedes hacer esto cuando estás en un grupo.',
'1100' => 'No puedes permitirte el lujo de usar el banco. Cuesta %s y sólo tienes %s de sobra.',
'1101' => 'No tienes ese objeto en tu banco.',
'1102' => 'No tienes tantos %s en tu banco.', # itemname
'1103' => 'No puedes poner %s porque solo llevas %s.', # nuyen, nuyen
'1104' => 'No puedes coger %s, porque solo tienes %s en tu cuenta del banco.', # nuyen, nuyen
'1105' => 'No hay tiendas aquí.',
'1106' => '%s no tiene una tienda.', # player
'1107' => 'La tienda de %s esta vacía.', # player
'1108' => 'Esta tienda no ofrece ese objeto.',
'1109' => 'El precio mínimo para ese objeto es %s.',
'1110' => 'Tu precio excede del precio máximo.',
'1111' => 'Todos tus lugares en el bazar están usados. Intenta #pop o #buyslot.',
'1112' => 'No tienes ese objeto en tu bazar.',
'1113' => 'No tienes tantos %s en tu bazar.',
'1114' => 'El costo de sacar %d objetos fuera del bazar es %s, pero sólo tienes %s.',
'1115' => 'No puedes comprar objetos de tu propia tienda.',
'1116' => 'Has intentado comprar %d %s, pero la tienda solo ofrece %d.',
'1117' => 'Tu entrada excede la longitud máxima de  %d caracteres.',
'1118' => 'No puedes entrar a este lugar.',
'1119' => 'No puedes destruir un clan cuando no está vacío y limpio.',
'1120' => 'Ya estás en el clan "%s".',
'1121' => 'Este clan o jugador es desconocido.',
'1122' => 'Este clan ha alcanzado el límite de miembros de %d.',
'1123' => 'Ya estabas solicitando entrar al clan, las peticiones antiguas han sido borradas.',
'1124' => 'No tienes los permisos correctos.',
'1125' => '%s no solicitó unirse al clan.',
'1126' => 'Tu clan ha alcanzado el límite de %s miembros. Puedes comprar mas lugares con la función #manage.',
'1127' => 'No tienes el nivel mínimo de %s para crear un clan.',
'1128' => 'El nombre de tu clan es demasiado largo o demasiado corto.',
'1129' => 'Ya hay un clan con ese nombre.',
'1130' => 'Tu slogan excede la longitud máxima de %d caracteres.',
'1131' => 'Quires coger %s(+%s)=%s fuera del banco del clan, pero solo contiene %s.',
'1132' => 'Intentas poner otro %s dentro del banco del clan, pero ya tienen %s/%s.',
'1133' => 'No tienes ese objeto en tu banco del clan.',
'1134' => 'No tienes tantos %s en tu banco del clan.',
'1135' => 'De algún modo el ascensor esta bloqueado en esta planta para tí.',
'1136' => 'Pulsas el botón pero continuas en la misma planta.',
'1137' => 'No necesitas descansar.',
'1138' => 'El Doctor dice: "No necesitas mi ayuda, amigo.',
'1139' => 'El Doctor agita mi cabeza: "No, amigo mío. Curarte costará %s pero sólo tienes %s."',
'1140' => 'No hay tal objeto aquí.',
'1141' => 'Ya tienes %s implantado.',
'1142' => 'No puedes implantarte %s. Entra en conflicto con %s.',
'1143' => 'No tienes suficiente esencia(%s) para implantar %s, la cual necesita %s esencia.',
'1144' => 'El Doctor agita mi cabeza: "Amigo mío, quitarte esto de tu cuerpo te costará %s, pero sólo tienes %s."',
'1145' => 'Tu personaje no puede aprender %s.',
'1146' => 'Ya has aprendido %s.',
'1147' => 'Necesitas %s para aprender este hechizo.',
'1148' => 'No puedes buscar otra vez.',
'1149' => 'Los miembros de tu grupo han intentando romper la cerradura, pero han fallado.',
'1150' => 'La compra de objetos por ID esta deshabilitada aquí, por posibles condiciones de carrera (race conditions exploit).',
'1151' => 'No quiero tu %s.',
'1152' => 'No hay trenes previstos para hoy.',
'1153' => 'Este destino es desconocido. Comprueba posibles destinos con #travel.',
'1154' => 'No puedes permitirte el lujo de %d billetes para %s.',
'1155' => 'Este equipo no tiene un uso especial. Puedes equiparlo con #equip.',

'1156' => 'Tu arma ya esta cargada.',
'1157' => 'Este objeto solo funciona en combate.',
'1158' => 'Sólo se puedes construir el equipo.',
'1159' => 'Sólo se pueden romper objetos con modificadores.',
'1160' => 'El segundo objetos no es una runa.',
'1161' => 'La runa tiene modifcadores mezclados de montura y equipamiento. Tienes que partirla primero.',
'1162' => 'Esta runa solo puede ser usada con monturas.',
'1163' => 'Esta runa solo puede ser usada con equipamiento.',
'1164' => 'Por favor "#mount clean" antes de cambiarlo.',
'1165' => 'El texto del objeto se volverá demasiado largo con otro modificador.',
'1166' => 'Solo puedes partir runas.',
'1167' => 'Esta runa tiene un unico modificador.',
'1168' => 'La runa se ha roto completamente mientras se partía. No tienes que pagar.',
'1169' => 'No puedes recargar un arma de melee? Oo',
'1170' => 'Tu grupo no se está moviendo.',
'1171' => 'Tu personaje ya ha sido creado. Puedes teclear #reset para empezar otra vez.',
'1172' => 'Tu raza es desconocida ó es una raza NPC. Razas válidas: %s.',
'1173' => 'Tu género es desconocido. Géneros válidos: %s.',
'1174' => "El comando no esta disponible en tu actual acción o lugar. Intenta {$c}c [<l|long>] para ver todos los comandos disponibles.",

########################
# 10000-14999 = Spells #
########################
# Generic
'10000' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10001' => '%s hace un hechizo de nivel %s %s sobre %s.',
'10002' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10003' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Berzerk
'10010' => '%s usa un hechizo de nivel %s %s poción sobre %s, +%s min_dmg / +%s max_dmg para %s.',
'10011' => '%s hace un hechizo de nivel %s %s sobre %s, +%s min_dmg / +%s max_dmg para %s.',
'10012' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10013' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Blow
'10020' => '%s usa un hechizo de nivel %s %s poción sobre %s que quedó impresionado %s y ahora esta en posición %s.',
'10021' => '%s hace un hechizo de nivel %s %s sobre %s que quedó impresionado %s y ahora esta en posición %s.',
'10022' => '%s usa un hechizo de nivel %s %s poción sobre %s que quedó impresionado %s y ahora esta en posición %s.',
'10023' => '%s hace un hechizo de nivel %s %s sobre %s que quedó impresionado %s y ahora esta en posición %s.',
# Chameleon
'10030' => '%s usa un hechizo de nivel %s %s poción sobre %s, +%s carisma para %s.',
'10031' => '%s hace un hechizo de nivel %s %s sobre %s, +%s carisma para %s.',
'10032' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10033' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Firebolt
'10040' => '%s usa un hechizo de nivel %s %s poción sobre %s y causa %s daño.',
'10041' => '%s hace un hechizo de nivel %s %s sobre %s y causa %s daño.',
'10042' => '%s usa un hechizo de nivel %s %s poción sobre %s y causa %s daño, %s/%s HP queda.',
'10043' => '%s hace un hechizo de nivel %s %s sobre %s y causa %s daño, %s/%s HP queda.',
# Freeze
'10050' => '%s usa un hechizo de nivel %s %s poción sobre %s. %s segundos y queda congelado con un poder de %01f.',
'10051' => '%s hace un hechizo de nivel %s %s sobre %s. %s segundos y queda congelado con un poder de %01f.',
'10052' => '%s usa un hechizo de nivel %s %s pocion sobre %s. %s segundos y queda congelado con un poder de %01f.',
'10053' => '%s hace un hechizo de nivel %s %s sobre %s. %s segundos y queda congelado con un poder de %01f.',
# Goliath
'10060' => '%s usa un hechizo de nivel %s %s poción sobre %s, +%s fuerza para %s.',
'10061' => '%s hace un hechizo de nivel %s %s sobre %s, +%s fuerza para %s.',
'10062' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10063' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Hawkeye
'10070' => '%s usa un hechizo de nivel %s %s poción sobre %s, +%s armas de fuego para %s.',
'10071' => '%s hace un hechizo de nivel %s %s sobre %s, +%s armas de fuego para %s.',
'10072' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10073' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Hummingbird
'10080' => '%s usa un hechizo de nivel %s %s poción sobre %s, +%s rápidez para %s.',
'10081' => '%s hace un hechizo de nivel %s %s sobre %s, +%s rápidez para %s.',
'10082' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10083' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Magicarp
'10090' => '%s usa un hechizo de nivel %s %s poción sobre %s y pierden %s MP.',
'10091' => '%s hace un hechizo de nivel %s %s sobre %s, +%s y pierden %s MP.',
'10092' => '%s usa un hechizo de nivel %s %s pocion sobre %s y pierden %s MP.',
'10093' => '%s hace un hechizo de nivel %s %s sobre %s y pierden %s MP.',
# Turtle
'10100' => '%s usa un hechizo de nivel %s %s pocion sobre %s, +%s marm/farm for %s.',
'10101' => '%s hace un hechizo de nivel %s %s sobre %s, +%s marm/farm for %s.',
'10102' => '%s usa un hechizo de nivel %s %s pocion sobre %s.',
'10103' => '%s hace un hechizo de nivel %s %s sobre %s.',
# Heal
'10110' => '%s usa un hechizo de nivel %s %s poción sobre %s, %s.',
'10111' => '%s hace un hechizo de nivel %s %s sobre %s, %s.',
'10112' => '%s usa un hechizo de nivel %s %s poción sobre %s.',
'10113' => '%s hace un hechizo de nivel %s %s sobre %s.',

############################
#   5000-9999   = Messages #
############################
'5000' => '%s acaba de salir de us servidor de IRC.', # username 
'5001' => 'Te despiertas y tomas un delicioso desayuno.',
'5002' => 'Estás listo para ir.',
'5003' => 'El grupo ha avanzado a nivel %s.', # level
'5004' => 'Tus atributos: %s.', # statlist
'5005' => 'Inventario',
'5006' => 'Tus habilidades: %s.', # statlist
'5007' => 'Lugares conocidos en %s: %s.', # cityname, places
'5008' => 'Tu grupo tiene %s: %s.', # nuyen sum, party sum list
'5009' => 'Estadísticas de pruebas por ciudad: %s.', # questlist
'5010' => 'Estadísticas de prueba: %d abierto, %d acabado, %d rechazado, %d fallido, %d desconocido de un total de %d.',
'5011' => '%d: %s - %s (%s)', # questid, questname, describtion, status
'5012' => 'Tu asl: %s. Usa #asl [<edad|indice masa corporal|altura>] para sumas del grupo.',
'5013' => 'Tu grupo %s(%s): %s.', # field, total, sumlist
# Gender Race L(LL), HP/HPP MP/MPP, ATK, DEF, DMG-DDMG, MARM/FARM, XP, Karma, NY, WEIGHT/WWEIGHT
# Status with magic
'5014' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}MP{$b}:%s/%s, {$b}Atk{$b}:%s, {$b}Def{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Peso{$b}:%s/%s.",
# Status without magic
'5015' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}Atk{$b}:%s, {$b}Def{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Peso{$b}:%s/%s.",
# Party status
'5016' => 'Tu estás %s', # action
'5017' => 'Estás liderando %d miembros (%s) y estás en %s', # membercount, memberlist, action
'5018' => 'Tu grupo (%s) está %s', # memberlist, action
'5019' => 'Mensaje antiguo: %s', # message
'5020' => 'Sales de %s.', # location
'5021' => 'Tu oyes el sonido de la alarma!',
'5022' => 'Tu intento de hacking ha fallado.',
'5023' => 'Tu petición de unión ha sido enviada a los líderes del clan.',
'5024' => 'Tu objetivo para secuestro (%s) se ha ido.', # target
'5025' => '%s ha dejado %s.', # target, location
'5026' => '%s está en tu grupo ahora.', # target
'5027' => 'Tu has explorado %s otra vez, pero parece que conoces cualquier esquina de él.', # cityname
'5028' => 'Tu has explorado %s otra fez, pero no has podido encontrar nada nuevo.', # cityname
'5029' => '%s', # location found text
'5030' => '%s', # inngame help message
'5031' => 'Has perdido tu objetivo y continuas en las calles de %s.', # cityname
'5032' => 'Has encontrado %s en %s con un grupo de %s miembros.', # target, location, membercount
'5033' => 'Has encontrado %s en las calles de %s.', # target, cityname
'5034' => "Has conseguido una {$b}recompensa{$b}: %s.", # nuyen
'5035' => '%s ha sido anotado en tu cuenta bancaria por vender %s %s a %s.', # nuyen, amt, item, player
'5036' => 'Tu personaje ha sido penalizado con %.02f mal_karma.', # bad karma
'5037' => 'Comandos ocultos: %s.', # cmdlist
'5038' => 'El jugador %s no pertenece a ningún clan todavía.', # player
'5039' => '%s está en el "%s" clan con %s/%s miembros, %s/%s riqueza y %s/%s en el banco. Su lema es: %s',
'5040' => '%d Página de los miembros del clan %d/%d: %s.', # membercount, page, npages, sumlist
'5041' => 'Página de Historia del Clan %d/%d: %s.', # page, npages, weird msglist
'5042' => 'Cmds: %s.',
'5043' => '%s', # Compare table messages, 3 rows
'5044' => '%s', # Unknown table messages, multiple rows
'5045' => 'Tu cyberware: %s.', # itemlist
'5046' => 'Seguramente olvidaste el %s "%s".', # section, knowledge
'5047' => 'Tus efectos: %s.', # effectlist
'5048' => 'Tu equipo: %s.', # equipstring
'5049' => '%s', # examine string
'5050' => 'Tu HP del grupo: %s.', # HP/MP string
'5051' => 'Tu MP del grupo: %s.', # HP/MP string
'5052' => 'Tu grupo tiene %s karma: %s.', # total, sumlist
'5053' => 'Tu conocimiento: %s.', # statlist
'5054' => 'Hechizos conocidos: %s.', # spellfmtlist
'5055' => 'Palabras conocidas: %s.', # #rawitemlist
'5056' => 'Tu grupo tiene un nivel de %s(%s/%s): %s.', # total level, xp , need xp, sumlist
'5057' => 'Habilidades para mejorar: %s.', # lvlupstring
'5058' => 'Atributos para mejorar: %s.', # lvlupstring
'5059' => 'Conocimiento para mejorar: %s.', # lvlupstring
'5060' => 'Hechizos para mejorar: %s.', # lvlupstring
'5061' => 'Has usado %d karma y has subido tu %s de %d a %d.', # karma, field, from, to
'5062' => "{$b}%s{$b} muestra: %s.", # player, examinestring
'5063' => 'Objetos %s y %s han sido intercambiados.', # itemname, itemname
'5064' => 'Tu grupo lleva %s: %s.', # total weight, sumlist
'5065' => 'Tu grupo no acepta nuevos miembros.',
'5066' => 'Tu grupo no acepta nuevos miembros otra vez.',
'5067' => '%s ha sido baneado del grupo.',
'5068' => '%s puede ahroa entar en tu grupo otra vez.',
'5069' => 'Prueba(s) %s, página %d/%d: %s.',
'5070' => '%s ha sido %s.', # option, en/disabled
'5071' => '%s ha sido %s por tu personaje.', # option, en/disabled
'5072' => 'Tu mensaje Shadowlamb estaba puesto como %s.', # notice|privmsg
'5073' => 'Tu mensaje Shadowlamb ha sido puesto como %s.', # notice|privmsg
'5074' => 'Esto es una prueba.',
'5075' => 'Ya estás jugando en modo corredor. Bien!',
'5076' => 'Teclea "%s" para confirmar.',
'5077' => 'Ahora estas jugando en modo corredor. Esto significa estados ilímitados pero muerte instantanea. Buena suerte!',
'5078' => 'Estás avisado #enable norl ahora, para prevenir que tu personaje sea secuestrado #rl comando!',
'5079' => 'Tu página de montura %s/%s: %s.', # page, pages, itemlist
'5080' => 'Tu guardas %d de tus %s en tu %s.', # amt, itemname, mountname
'5081' => 'Tu recoges %d %s de tu %s y lo pones en tu inventario (ID: %d).', # amt, itemname, mountname, invid
'5082' => 'Has vaciado tu montura.',
'5083' => 'Monturas del grupo(%s/%s): %s.', # storage, max storage, sumlist
'5084' => "{$b}%s{$b} pm: \"%s\"", # player, message
'5085' => "{$b}%s{$b} dice: \"%s\"", # player, message
'5086' => "{$b}%s{$b} susurra: \"%s\"", # player, message
'5087' => '%s', # bounties
'5088' => '%s', # own bounty
'5089' => '%s', # other bounty
'5090' => '%s se mueve %.01f metros %s y está ahora en posición %.01f metros%s', # player, fw/bw, metres, busy (OWN)
'5091' => '%s se mueve %.01f metros %s y está ahora en posición %.01f metros%s', # player, fw/bw, metres, busy (ENEMY)
'5092' => 'El grupo enemigo dijo "bye".',
'5093' => 'Continuas %s', # action
'5094' => '%s lo agradece y deja el grupo.', # player
'5095' => 'Tu encuentras a %s.',
'5096' => 'Tu conoces a %s.%s%s',
'5097' => '%s se mueve %.01f metros hacia %s y ahora está en posición %.01f metros. %ds ocupado.',
'5098' => '%s se mueve %.01f metros hacia %s y ahora está en posición %.01f metros.',
'5105' => 'Tu ganas %s y %s XP.', # nuyen, XP
'5110' => 'Estas a punto de dejar caer %d %s. Reteclea para confirmar.', # amt itemname
'5111' => 'Te has deshecho de %d %s.',
'5112' => '%s ha intentado huir del combate. %s ocupado.', #player, duration
'5113' => '%s ha huido del enemigo.', # player
'5114' => '%s ha huido del combate.', # player
'5115' => 'Tu das %d %s a %s.%s', # amt, item, player, busytime
'5116' => '%s ha recibido %s de %s.', # player, itemlist, source
'5117' => '%s dice %s sobre %s.', # player, player, knowledge
'5118' => 'Has recibido %s de %s.', # itemname, player
'5119' => 'Tu das %s a %s.', # itemname, player
'5120' => 'No ves otros jugadores.',
'5121' => 'Ves a estos jugadores: %s.', # sumlist?
'5122' => 'Tu distancia de combate ha sido ajustada a %.01f metros.', # distance
'5123' => 'Distancias: %s.', # sumlist
'5124' => 'Distancias: %s.', # sumlist
'5125' => 'Tu recibes un premio de %s por matar al enemigo.', # nuyen
'5126' => 'Tu comienzas a explorar %s. ETA: %s.', # cityname, duration
'5127' => 'Estas yendo a %s. ETA: %s.', # location, duration
'5128' => 'No ves monturas de jugadores para robar.',
'5129' => '%s', # Mount page
'5130' => 'Monturas para secuestrar: %s.', # sumlist
'5133' => '%s usado %s MP para lanzar %s y tu grupo esta ahora fuera de %s.', # player, mp, teleportspellname, location 
'5134' => 'Comienzas a cazar %s. ETA: %s.', # player, duration
'5135' => '%s ha dejado el grupo.', # player
'5136' => '%s se ha unido al grupo.', # player
'5137' => '%s ha sido expulsado del grupos.', # player
'5138' => '%s es el nuevo líder del grupo.', # player
'5139' => "Tu grupo ha ajustad su modo de premio a: {$b}%s{$b}.", # lootmode
'5140' => '%s y %s han intercambiado sus posiciones en el grupo.', # player, player
'5141' => 'Tu eres guiado al interior del Arena y ves a tu enemigo: %s.', # snippet
'5142' => '%s', # generic bank viewi.
'5143' => 'Tu pagas %s nuyen.', # nuyen
'5144' => 'Tu pones %d de tu %s en tu cuenta bancaria. Ahora llevas %s/%s.', # amount, item, weight, maxweight
'5145' => 'Tu retiras %d %s de tu cuenta bancaria y lo pones en tu inventario. Ahora llevas %s/%s.', # amount, item, weight, maxweight
'5146' => 'Tu llevas %s. En tu banco hay %s. Cada transacción cuesta %s.', # nuyen, nuyen. cost
'5147' => 'Tu pones %s en tu cuenta bancaria (ahora %s) y mantienes %s en tu inventario.', # nuyen, nuyen, nuyen
'5148' => 'Tu coges %s de tu cuenta bancaria (%s queda) y ahora llevas %s.', # nuyen, nuyen, nuyen
'5149' => 'Página, Tiendas, %d/%d: %s.',
'5150' => 'La tienda de %s: "%s"', # player, bazar slogan
'5151' => '%d objetos: %s.', # # itemcount, bazaritemlist
'5152' => "%s vende uno de %d %s por {$b}%s{$b}. Teclea {$b}#buy %1\$s %3\$s{$b} para comprar.", # player, itemcount, itemname, nuyen, examinestring
'5153' => 'Ahora ofreces %d %s por %s cada uno en tu bazar.', # amount, itemname, price
'5154' => 'Pagas la tasa de %s y retiras %d %s de tu bazar y lo pones en tu inventario.', # price, amount, itemname
'5155' => 'Tu intento de comprar %d %s de %s por %s. Reteclea para confirmar.', # amount, itemname, player, price
'5156' => '%s comprado %d %s del bazar de %s.', # player, amount, itemname, player
'5157' => 'Actualmente tienes %d de %d posiciones de bazar usados. Otra posición costaría %s. Teclea "#buyslot yesplease" para confirmar.',
'5158' => 'Pagas la tasa de %s y ahora tienes %s posiciones de bazar.', # nuyen, slotcount
'5159' => 'Tu slogan ha sido cambiado a: "%s".', # slogan
'5160' => 'Página, Bazar coincidencias %d/%d: %s.', # page, npages, bazaar searchlist
'5161' => 'Tu quieres comprar %d %s, pero solo puedes encontrar %d.', # amount, itemname, amount
'5162' => 'Tu quieres pagar %s por %d %s, pero el mejor precio es %s.', # price, amount, itemname, price
'5163' => 'Estas a punto de comprar %d %s por %s en total. Reteclea el comando para confirmar.', # amount, itemname, price
'5164' => 'Has comprado %d %s por un precio total de %s.',
'5165' => 'Tu has dejado el clan "%s".',
'5166' => '%s ha aceptado tu solicitud de ingreso al clan %s.',
'5167' => 'Página de solicitudes de ingreso al Clan %d/%d: %s.',
'5168' => 'Felicidades. Has formado un nuevo clan llamado "%s".',
'5169' => 'Tu pagas la tase de %s y pones un nuevo slogan para tu clan.',
'5170' => 'Tu clan actualmente puede contar %s. Otro %s te costaría %s. Por favor teclea "%s" para confirmar.',
'5171' => 'Tu clan ha alcanzado el máximo de %s/%s.',
'5172' => 'Tu pagas %s y tu clan ahora puede contener %s/%s.',
'5173' => 'Tu pagas la tasa de %s y pones %s en el banco del clan, que ahora contiene %s/%s.',
'5174' => 'Tu pagas la tasa de %s y retiras %s fuera del banco del clan, que ahora contiene %s/%s.',
'5175' => 'Tu opción del Clan ha sido %s.',
'5176' => 'Página del Banco del Clan %d/%d: %s.',
'5177' => 'Tu grupo pulsa el botón "%s" y el ascensonr comienza a moverse.',
'5178' => 'Tu estás en %s planta %s. Plantas accesibles: %s.',
'5179' => 'El doctor coge tu %s y te cura.',
'5180' => 'Tu pagas %s y tienes %s implantado.',
'5181' => 'Tu pagas %s y tienes tu %s retirado.',
'5182' => "El grupo se va a dormir. Tu vas a tu {$b}propia{$b} habitación.",
'5183' => 'Cursos disponibles: %s.',
'5184' => 'Pagas %s y aprendes %s.',
'5185' => 'Tu buscas en el %s...',
'5186' => 'Tu buscas en el %s pero no encuentras nada.',
'5187' => '%s rompe la cerradura!',
'5188' => '%s', # Store item list fmt_sumlist
'5189' => '%s', # Store item examine string
'5190' => 'Tu pagas %s y compras %s. Inventario ID: %d.',
'5191' => 'Tu vendes %d de tu %s por %s. Ahora llevas %s/%s.',
'5192' => 'Tu intento de robar %s...',
'5193' => 'Has tenido suerte y has robado %s.',
'5194' => 'No encuentras el momento adecuado para robar algo.',
'5195' => 'Estás sin suerte ... el dueño de la tienda ha llamado en silencio a los policías y tu estás ahora dentro de la Prisión de Delaware.',
'5196' => 'Estás sin suerte ... el dueño de la tienda ha llamado en silencio a los policías ...',
'5197' => 'El dueño de la tienda esta vigilando ... mejor que esperes un poco.',
'5198' => 'El vendedor sonrie y pone el objeto en el escaparate.',
'5199' => 'Trenes: %s.', # target fmt_sumlist
'5200' => '%s paga el precio de %s y coge el siguiente tren a %s. ETA: %s.',
'5201' => '%s ha consumido un objeto: %s. %s segundos ocupado.',
'5202' => 'Objetivos posibles: %s.', # Computer target list fmt_rawitems.
'5203' => 'Tu pones tu %s en el inventario, %s segundos ocupado.',
'5204' => 'Tu usas %s desde ahora, %d segundos ocupado.',
'5205' => 'Estás sin munición!',
'5206' => '%s carga %d bala(s) en su %s. %s segundos ocupado.', # player, amount, itemname, busytime
'5207' => 'Cargas %d bala(s) en tu %s.', # amount, itemname
'5208' => 'Pagas %s y el herrero limpia el %s de todas sus runas. Tu recibes un: %s.', # price, itemname, itemname
'5209' => 'Pagas %s y rompes el %s en %s.', # price, itemname, rawlist
'5210' => 'Pagas %s pero la rotura de %s en runas ha fallado.', # price, itemname
'5211' => 'El herrero examina tus objetos ... "Te costará %s actualizar %s con %s. La probabilidad de fallo es de %.02f%% y la de rotura es de %.02f%%. Por favor reteclea para confirmar.',
'5212' => 'El herrero coge tus objetos y se pone a trabajar...',
'5213' => 'La actualización ha fallado horriblemente y el objeto y la runa se han perdido. El herrero lo siente mucho y no es necesario que pagues nada.',
'5214' => 'La actualización ha fallado y la runa se ha perdido. Solo debes pagar %s por el trabajo.',
'5215' => 'Actualización conseguida. Pagas %s y el herrero te enseña un bonito %s.',
'5216' => 'Costará %s partir el %s. Reteclea para confirmar.',
'5217' => 'Pagas %s y parte tu %s en %s.',
'5218' => 'Tu comienzas a romper la cerradura %s\'s %s. Tiempo penalizado: %s.',
'5219' => '%s esta intentando \X02romper la CERRADURA\X02 en tu %s!',
'5220' => 'Has fallado en romper la cerradura en %s\'s %s.',
'5221' => 'Has conseguido romper la cerradura de tu objetivo.',
'5222' => '"Hey, qué estás haciendo!!!" ... Ves a un policía acercandose!',
'5223' => 'Has conseguido romper la cerradura en %s\'s %s pero parece vacío.',
'5224' => 'Has conseguido romper la cerradura en %s\'s',
'5225' => '%s conseguido romper la cerradura en tu %s!',
'5226' => 'En el último segundo ves fuerzas militares aproximandose y decides interrumpir tus actividades.',
'5227' => '%s roba %dx%s de tu %s.',
'5228' => '%s usado %s en %s. %s%s', # player, itemname, player, busy, appendmsg # (friend)
'5229' => '%s usado %s en %s.%s', # player, itemname, player, appendmsg # (foe)
'5230' => '%s ataca %s con %s pero falla. %s segundos ocupado.',
'5231' => '%s ataca %s con %s pero no causa daños. %s segundos ocupado.',
'5232' => '%1$s ataca a %2$s con %3$s y causa %6$s%4$s daño%6$s. %5$s segundos ocupado.',
'5233' => '%1$s ataca a %2$s con %3$s y causa %8$s%4$s daño%8$s, %5$s/%6$sHP queda. %7$s segundos ocupado.',
'5234' => '%1$s ataca a %2$s con %3$s y le mata con %8$s%4$s daño%8$s, %5$s segundos ocupado. Tu premio %6$s y %7$sXP.',
'5235' => '%1$s ataca a %2$s con %3$s y le mata con %6$s%4$s daño%6$s, %5$s segundos ocupado.',
'5236' => 'Tienes una nueva prueba: %s.',
'5237' => 'Tu rechazaste la prueba "%s", para siempre.',
'5238' => 'Has completado una prueba: %s.',
'5239' => 'Tu das %d %s(s) a %s.',
'5240' => 'Recibes %s.', # quest reward string
'5241' => 'En Shadowlamb v3 hay: %s diferentes NPC en %s Areas con %s Lugares. %s Objetos, %s Hechizos y %s Pruebas. Teclea #stats para ver cuantos están jugando.',

'5242' => 'El grupo ha parado. Ahora qué?!',
'5243' => 'Es el año 2064 + %s.',
'5244' => 'Actualmente hay %s Humanos, %s NPC y %s grupos en memoria.',
'5245' => 'Tu personaje ha sido borrado. Puedes hacer "#start" otra vez.',
'5246' => 'Esto borrará completamente tu personaje. Teclea "#reset i_am_sure" para confirmar.',
'5247' => 'Jugadores activos, página %d de %d: %s.',
'5248' => 'Grupos activos, página %s de %s: %s.',
'5249' => 'Mensaje del día: %s',
'5250' => 'Tu sabes un nuevo %s: %s.', # knowledge, what, field
'5251' => "Ahora tienes {$b}%d(+%d) karma{$b}. Con karma puedes #lvlup.",
'5252' => 'Tu reapareces en %s.',
'5253' => 'Pierdes %s XP!',
'5254' => 'Pierdes %s!', # nuyen
'5255' => 'Pierdes %d de tu %s.',
'5256' => 'Tu jugabas #running_mode y has sido asesiando por un NPC o otro #rm jugador. Estas muerto. Usa #reset para comenzar otra vez.',
'5257' => '%s', # Arrive city message.
'5258' => '%s', # clan message

);
?>
