<?php
  if( $_GET["ip"])
  {
     $today = date("Y-m-d H:i:s");
     $ip = $_GET['ip'];
     if (filter_var($ip, FILTER_VALIDATE_IP)) {
       $txt = sprintf("%s - %s", $today, $ip);
       $myfile = fopen("ip.txt", "w") or die("Unable to open file!");
       fwrite($myfile, $txt);
     }
  }
  $myfile = fopen("ip.txt", "r") or die("Unable to open file!");
  echo fgets($myfile);
  fclose($myfile);
?>

