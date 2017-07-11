<?php
    
  echo "<h2> <strong>Users from the Market Place</strong></h2>";
  echo "<br/>";
  echo "<h2> <strong>List of Users from Cold Stone Coffee </strong></h2>";
  $ch = curl_init();
  $urlrenu = "http://renup.org/displayform.php";
  curl_setopt($ch, CURLOPT_URL, $urlrenu);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTIONTIMEOUT, 5);
  $curlResult = curl_exec($ch);

  echo $curlResult;

  echo "<h2> <strong>List of Users from KadArt.com </strong></h2>";

  $chs = curl_init();
  $urlchai = "http://kadart.kademane.com/register/usersdisplay.php";
  curl_setopt($chs, CURLOPT_URL, $urlchai);
  curl_setopt($chs, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($chs, CURLOPT_CONNECTIONTIMEOUT, 5);
  $curlResults = curl_exec($chs);

  echo $curlResults;
  
  echo "<h2> <strong>List of Users from SmithaVenkatesh.com </strong></h2>";

  $chr = curl_init();
  $urlsmitha = "http://www.smithavenkatesh.com/users_company/";
  curl_setopt($chr, CURLOPT_URL, $urlsmitha);
  curl_setopt($chr, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($chr, CURLOPT_CONNECTIONTIMEOUT, 5);
  $curlResultr = curl_exec($chr);

  echo $curlResultr;

  curl_close();

 ?>