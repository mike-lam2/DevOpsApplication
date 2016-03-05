<?php 
$sh='/var/www/html/DevOpsApplication/build.sh';
echo "executing ".$sh;
exec($sh.">>result.txt");
 