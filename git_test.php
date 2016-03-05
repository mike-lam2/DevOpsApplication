<?php 
$sh='/var/www/html/DevOpsApplication/build.sh';
echo "executing ".$sh;
echo exec($sh." 2>&1");
 