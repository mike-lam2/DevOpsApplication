<?php
echo "received a push<p>"; 
try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  echo "payload cannot be decoded<p>";
  exit(0);
}
echo "payload decoded<p>";
//log the request
file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);
file_put_contents('/var/www/html/DevOpsApplication/github.txt', print_r($payload, TRUE), FILE_APPEND);


if ($payload->ref === 'refs/heads/master')
{
  // path to your site deployment script 
  exec('/var/www/html/DevOpsApplication/build.sh');
}
echo "push processed sucessful<p>";