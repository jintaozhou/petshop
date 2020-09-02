<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Pet Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="wrap">
    <?php
    include_once "header.php";
    ?>
    <!--    end of header-->
    <div class="center_content">
        <div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>My cart
            </div>
            <div class="feat_prod_box_details">
                <table class="cart_table">
                    <tr class="cart_title">
                        <td>图片</td>
                        <td>名称</td>
                        <td>单价</td>
                        <td>数量</td>
                        <td>价格</td>
                    </tr>
                    <?php
                    session_start();
                    $arr = array();
                    if (!empty($_SESSION["gwc"])) {
                        $arr = $_SESSION["gwc"];
                    }
                    $count=0;
                    $num=0;
                    foreach ($arr as $v) {
                        $sql = "SELECT * FROM products WHERE id=$v[0]";
                        $att = db_selectw($sql);
                        $num=$num+$v[1];
                        foreach ($att as $n) {
                            $count=($v[1]*$n["pprice"])+$count;
                            ?>
                            <tr>
                                <td><a href="details.php"><img src="images/<?= $n['pimgs'] ?>" alt="" title=""
                                                               border="0"
                                                               width="26px" height="25px"
                                                               class="cart_thumb"/></a></td>
                                <td><?= $n["pname"] ?></td>
                                <td><?= $n["pprice"] ?>￥</td>
                                <td><?= $v[1]?></td>
                                <td><?= $v[1]*$n["pprice"]?>￥</td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <tr>
                        <td colspan="4" class="cart_total"><span class="red">运费:</span></td>
                        <td> 10￥</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="cart_total"><span class="red">总价:</span></td>
                        <td><?php $count=$count+10; echo $count?></td>
                    </tr>
                </table>
                <a href="category.php" class="continue">&lt; 继续挑选</a>
                <a href="#" class="checkout" onclick="alert('购买成功！')">结算 &gt;</a>
            </div>
            <div class="clear"></div>
        </div><!--end of left content-->
        <?php
        include_once "right_content.php"
        ?><!--end of right content-->
        <div class="clear"></div>
    </div><!--end of center content-->
    <?php
    include_once "footer.php";
    ?>
</div>
</body>
</html>