<?php
//$connect=mysql_connect('iamvivek.ipagemysql.com','renu',"Renu@1234") or die(mysql_error());
//mysql_select_db("users", $connect) or die(mysql_error());
$connect=mysql_connect('localhost','root',"") or die(mysql_error());
mysql_select_db("login", $connect) or die(mysql_error());
?>