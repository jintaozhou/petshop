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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>推荐商品
            </div>
            <?php
            $sql = "SELECT id,pname,pimgs,pabstract,phits FROM products ORDER BY phits DESC Limit 2  ";
            $infors = db_selectw($sql);
            foreach ($infors as $v) :
                ?>
                <div class="feat_prod_box">
                    <div class="prod_img"><a href="details.php?id=<?= $v['id'] ?>"><img src="images/<?= $v['pimgs'] ?>"
                                                                                        alt="" title=""
                                                                                        width="125px" height="118px"
                                                                                        border="0"/></a></div>
                    <div class="prod_det_box">
                        <div class="box_top"></div>
                        <div class="box_center">
                            <div class="prod_title"><?= $v["pname"] ?></div>
                            <p class="details"><?= $v['pabstract'] ?></p>
                            <a href="details.php?id=<?= $v['id'] ?>" class="more">- 商品详情 -</a>
                            <div class="clear"></div>
                        </div>
                        <div class="box_bottom"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php
            endforeach;
            ?>
            <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title=""/></span>最新商品
            </div>
            <div class="new_products">
                <?php
                $sql = "SELECT id,pname,pimgs,pdate FROM products ORDER BY phits DESC Limit 3  ";
                $infors = db_selectw($sql);
                foreach ($infors as $v) :
                    ?>
                    <div class="new_prod_box">
                        <a href="details.php"><?= $v["pname"] ?></a>
                        <div class="new_prod_bg">
                            <span class="new_icon"><img src="images/new_icon.gif" alt="" title=""/></span>
                            <a href="details.php?id=<?= $v['id'] ?>"><img src="images/<?= $v['pimgs'] ?>" alt=""
                                                                          title="" class="thumb" width="87px"
                                                                          height="93px"
                                                                          border="0"/></a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="clear"></div>
        </div><!--end of left content-->
        <?php
        include_once "right_content.php"
        ?><!--end of right content-->
        <div class="clear"></div>
    </div><!--end of center content-->
    <!--??-->
    <?php
    include_once "footer.php";
    ?>
</div>
</body>
</html>