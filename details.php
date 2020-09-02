<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Pet Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen"/>
    <script src="js/prototype.js" type="text/javascript"></script>
    <script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
    <script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <script>
        function delConfirm() {
            if (confirm('确定要加入购物车吗？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<div id="wrap">
    <?php
    include_once "header.php";
    ?>
    <!--    end of header-->
    <div class="center_content">
        <div class="left_content">
            <div class="crumb_nav">
                <a href="index.php">home</a> &gt;&gt; product name
            </div>
            <?php
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            } else {
                $id = 1;
            }
            $sql = "SELECT id,pname,pimgs,pabstract,pintroduce,pprice,pcolor,cid FROM products where id=$id";
            $infors = db_selectw($sql);
            foreach ($infors as $v) {
                ?>
                <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt=""
                                                                 title=""/></span><?= $v["pname"] ?>
                </div>
                <div class="feat_prod_box_details">
                    <div class="prod_img"><a href="details.php"><img src="images/<?= $v['pimgs'] ?>" alt="" title=""
                                                                     width="125px" height="118px" alt="" title=""
                                                                     border="0"/></a>
                        <br/><br/>
                        <a href="images/big_pic.jpg" rel="lightbox"><img src="images/zoom.gif" alt="" title=""
                                                                         border="0"/></a>
                    </div>
                    <div class="prod_det_box">
                        <div class="box_top"></div>
                        <div class="box_center">
                            <div class="prod_title">简介</div>
                            <p class="details"><?= $v["pabstract"] ?>
                            </p>
                            <div class="price"><strong>PRICE:</strong> <span class="red"><?= $v["pprice"] ?> ￥</span>
                            </div>
                            <div class="price"><strong>COLORS:</strong>
                                <span class="colors"><img src="images/color1.gif" alt="" title="" border="0"/></span>
                                <span class="colors"><img src="images/color2.gif" alt="" title="" border="0"/></span>
                                <span class="colors"><img src="images/color3.gif" alt="" title="" border="0"/></span>
                            </div>
                            <a href="buy.php?id=<?= $v['id'] ?>" class="more" onclick="return delConfirm()"><img src="images/order_now.gif" alt=""
                                                                                    title=""
                                                                                    border="0"/></a>
                            <div class="clear"></div>
                        </div>
                        <div class="box_bottom"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php
            }
            ?>
            <div id="demo" class="demolayout">
                <ul id="demo-nav" class="demolayout">
                    <li><a class="active" href="#tab1">详细介绍</a></li>
                    <li><a class="" href="#tab2">同类推荐</a></li>
                </ul>
                <div class="tabs-container">
                    <div style="display: block;" class="tab" id="tab1">
                        <p class="more_details"><?= $v["pintroduce"] ?>
                        </p>
                    </div>
                    <div style="display: none;" class="tab" id="tab2">
                        <?php
                        $cid = $v["cid"];
                        $sql2 = "SELECT id,pname,pimgs FROM products where cid=$cid";
                        $infors = db_selectw($sql2);
                        foreach ($infors as $v) {
                            ?>
                            <div class="new_prod_box">
                                <a href="details.php"><?= $v["pname"] ?></a>
                                <div class="new_prod_bg">
                                    <a href="details.php"><img src="images/<?= $v['pimgs'] ?>" alt="" title=""
                                                               class="thumb" width="87px" height="93px"
                                                               border="0"/></a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div><!--end of left content-->
        <?php
        include_once "right_content.php"
        ?><!--end of right content-->
        <div class="clear"></div>
    </div><!--end of center content-->
    <!--页脚-->
    <?php
    include_once "footer.php";
    ?>
</div>
</body>
<script type="text/javascript">
    var tabber1 = new Yetii({
        id: 'demo'
    });
</script>
</html>