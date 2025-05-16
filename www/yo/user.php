<?php
$output = shell_exec('getent passwd | cut -d: -f1');
echo "$output";
