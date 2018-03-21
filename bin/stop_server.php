#!/usr/bin/env php
<?php

set_time_limit(0);

$kill = function ($pid) {
    return stripos(php_uname('s'), 'win') > -1
                        ? exec("taskkill /F /PID $pid") : exec("kill -9 $pid");
};

$pidfile = 'var/webserver.pid';

$pid = intval(file_get_contents($pidfile));
echo $kill($pid);

file_put_contents($pidfile, '');
