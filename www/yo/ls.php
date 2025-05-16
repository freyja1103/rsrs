<?php
$cd = 'cd /home/';
$output = shell_exec($cd);
$ls_cmd = 'ls -la';
$ls_output = shell_exec($ls_cmd);
echo "$ls_output";
