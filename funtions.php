<?php
//增加一条信息
function db_add($sql)
{
    $link = $GLOBALS["link"];
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "<script>";
        echo "alert('注册成功');";
        echo "window.location.href='index.php';";
        echo "</script>";
    } else {
        echo "add fail" . mysqli_error($link);
    }
}
//删除一条信息
function db_delete($table, $id)
{
    $link = $GLOBALS["link"];
    $sql = "DELETE FROM $table WHERE id=$id";
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "<script>";
        echo "alert('删除成功');";
        echo "</script>";
    } else {
        echo "delete fail" . mysqli_error($link);
    }
}
//修改一条信息
function db_update($sql)
{
    $link = $GLOBALS["link"];
    $result = mysqli_query($link, $sql);
    if ($result) {
        echo "<script>";
        echo "alert('修改成功');";
        echo "</script>";
    } else {
        echo "update fail" . mysqli_error($link);
    }
}
//查询全部信息
function db_select($table)
{
    $link = $GLOBALS["link"];
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($link, $sql);
    if ($result) {
        $nums = mysqli_num_rows($result);
        $infors = array();
        if ($nums > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $infors[] = $rows;
            }
        }
        return $infors;
    } else {
        echo "select fail" . mysqli_error($link);
    }
}
//查询全部信息
function db_selectw($sql)
{
    $link = $GLOBALS["link"];
    $result = mysqli_query($link, $sql);
    if ($result) {
        $nums = mysqli_num_rows($result);
        $infors = array();
        if ($nums > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $infors[] = $rows;
            }
        }
        return $infors;
    } else {
        echo "select fail" . mysqli_error($link);
    }
}
