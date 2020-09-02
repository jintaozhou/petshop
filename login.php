<?php
include_once "funtions.php";
include_once "conn.php";
$user = $_POST["uname"];
$pwd = $_POST["pwd"];
$admins = db_select("users");
foreach ($admins as $v) {
    if ($v["uname"] == $user && $v["psw"] == $pwd) {
        echo "<script>";
        echo "alert('登陆成功!');";
        echo "window.location.href='myaccount.php';";
        echo "</script>";
    }
}
echo "<script>";
echo "alert('登陆失败!请重新输入');";
echo "window.location.href='myaccount.php';";
echo "</script>";


