<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "pc-gamming";

$con = @mysql_connect($host,$user,$pwd) or die("Could not connect");
mysql_select_db($db,$con) or die("No database");

?>