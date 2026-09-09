<?php
$output = shell_exec('cd /www/wwwroot/layananbcluwuk.my.id && git pull origin main 2>&1');
echo "<pre>$output</pre>";
?>