<?php
$test = 'aaa';
$output = shell_exec('ls /etc/nginx/sites-available/');
echo "$output";