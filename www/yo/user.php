<?php
$output = shell_exec('cut -d: -f1 /etc/passwd');
echo "$output";
