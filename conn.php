<?php
$db_host = "localhost";
$db_name = "root";
$db_pwd = "123456";
$db = "petshop";
global $link;
$link= mysqli_connect($db_host, $db_name, $db_pwd, $db) or die("fail");
mysqli_set_charset($link, "utf8");