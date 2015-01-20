<?php
  $file = 'ip.txt';
  if( isset($_GET['ip']) )
  {
     $today = date("Y-m-d H:i:s");
     $ip = $_GET['ip'];
     if (filter_var($ip, FILTER_VALIDATE_IP)) {
       $line = sprintf("%s - %s", $today, $ip);
       $content = file_get_contents($file);
       $content = $line;
       file_put_contents($file, $content);
     }
  }
  if ( !isset($content) ) {
    $content = file_get_contents($file);
  }
  echo $content;
?>

