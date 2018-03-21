#!/usr/bin/env php
<?php

set_time_limit(0);

$pidfile = 'var/webserver.pid';
$pid = intval(file_get_contents($pidfile));

if (empty($pid)) {
    echo PHP_EOL.'Server not running'.PHP_EOL.PHP_EOL;

    return;
}

echo PHP_EOL.'Killing PID: '.$pid.PHP_EOL.PHP_EOL;
if (stripos(php_uname('s'), 'win') > -1) {
    exec("taskkill /F /PID $pid");
} else {
    exec("kill -9 $pid");
}

file_put_contents($pidfile, '');
