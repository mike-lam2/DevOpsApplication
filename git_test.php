<?php 
$sh='/var/www/html/DevOpsApplication/build.sh';
echo "executing ".$sh."\n";
echo exec($sh." 2>&1");
 