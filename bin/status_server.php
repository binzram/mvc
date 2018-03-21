#!/usr/bin/env php
<?php

set_time_limit(0);

$pidfile = 'var/webserver.pid';

$pid = intval(file_get_contents($pidfile));

if (!empty($pid)) {
    echo 'running';
} else {
    echo 'not running';
}
