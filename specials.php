<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>特价商品
            </div>
            <?php
            $page = isset($_GET["page"]) ? $_GET["page"] : 1;
            $n = 4;   //一页个数
            $m = ($page - 1) * $n;
            $limit = " limit $m,$n";
            $sql_select_page = "select * from products";
            $result_select_page = mysqli_query($link, $sql_select_page);
            $total = mysqli_num_rows($result_select_page);  //总记录数
            $totalpage = ceil($total / $n);
            $sql = "SELECT id,pname,pimgs,pabstract,pprice FROM products ORDER BY pprice" . $limit;
            $infors = db_selectw($sql);
            foreach ($infors as $v) :
                ?>
                <div class="feat_prod_box">
                    <div class="prod_img"><a href="details.php?id=<?= $v['id'] ?>"><img src="images/<?= $v['pimgs'] ?>" alt="" title=""
                                                                     border="0" width="125px" height="118px"/></a>
                    </div>
                    <div class="prod_det_box">
                        <span class="special_icon"><img src="images/special_icon.gif" alt="" title=""/></span>
                        <div class="box_top"></div>
                        <div class="box_center">
                            <div class="prod_title"><?= $v["pname"] ?></div>
                            <p class="details"><?= $v["pabstract"] ?></p>
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
            <div class="pagination">
                <a href="specials.php?page=<?= $page == 1 ? $page = 1 : $page - 1 ?>"><<</a>
                <?php
                for ($index = 1; $index <= $totalpage; $index++):
                    ?>
                    <a href="specials.php?page=<?= $index ?>"><?= $index ?></a>
                <?php
                endfor;
                ?>
                <a href="specials.php?page=<?= $page == $totalpage ? $page = $totalpage : $page + 1 ?>">>></a>
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
</html>