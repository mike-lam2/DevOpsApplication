<?php 
$sh='/var/www/html/DevOpsApplication/build.sh';
echo "executing ".$sh;
exec($sh." 2>&1 >>result.txt");
 