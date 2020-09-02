<?php
include_once "funtions.php";
$uname = $_POST["uname"];
$psw = $_POST["psw"];
$company = $_POST["company"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$addres=$_POST["addres"];
$sql="INSERT INTO users(uname,psw,company,email,tel,addres) VALUES ('$uname','$psw','$company','$email','$tel','$addres')";
db_add($sql);
//header("location:index.php");