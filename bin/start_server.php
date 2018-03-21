#!/usr/bin/env php
<?php

set_time_limit(0);

$cmd = 'php -S localhost:8088 -t public/';
$outputfile = 'var/server.log';
$pidfile = 'var/webserver.pid';

exec(sprintf('%s > %s 2>&1 & echo $! > %s', $cmd, $outputfile, $pidfile));
