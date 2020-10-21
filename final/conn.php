<?php
$server = "127.0.0.1";
$user = "root";
$password = "";
$dbname  = "formantic";
$conn = mysql_connect($server,$user,$password);
if(!$conn)
    die("Can't connect Mysql ");
mysql_select_db($dbname,$conn)
or die ("Can't use database");
mysql_query("SET CHARACTER SET UTF8");

