<?php

/**
 * Translate datetime strings (such as month or weekday names) and set locale information for a specific country or region
 * Before uncommenting it, make sure that your server supports this locale (for example, run `locale -a | grep ru`)
 */
//setlocale(LC_ALL, 'ru_RU.utf8');

/**
 * Overwrite settings from ./conf/local.php and ./conf/dokuwiki.php
 */
$conf['title'] = 'Докувики';
$conf['tagline'] = 'Лучше, когда это просто';
$conf['dformat'] = '%d.%m.%Y в %H:%M';
$conf['plugin']['authorlist']['intro'] = '<b>Соавторы:</b>';
