<?php

/**
 * Translate datetime strings (such as month or weekday names) and set locale information for a specific country or region
 * Before uncommenting it, make sure that your server supports this locale (for example, run `locale -a | grep ro`)
 */
//setlocale(LC_ALL, 'ro_RO.utf8');

/**
 * Overwrite settings from ./conf/local.php and ./conf/dokuwiki.php
 */
$conf['title'] = 'DokuWiki';
$conf['tagline'] = 'E mai bine când e simplu';
$conf['dformat'] = '%d.%m.%Y la %H:%M';
$conf['plugin']['authorlist']['intro'] = '<b>Contribuitori:</b>';
