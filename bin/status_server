#!/usr/bin/env php
<?php

set_time_limit(0);

$pidfile = 'var/webserver.pid';

$pid = intval(file_get_contents($pidfile));

if (!empty($pid)) {
    echo PHP_EOL.'Server running'.PHP_EOL.PHP_EOL;
} else {
    echo PHP_EOL.'Server not running'.PHP_EOL.PHP_EOL;
}
