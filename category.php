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
    if (isset($_GET["cid"])) {
        $cid = $_GET["cid"];
        $sql = "SELECT * FROM catogry WHERE id=$cid";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $cname = $row["cname"];
        $where = " WHERE cid=$cid";
        $acid = "cid=$cid&";
    } else {
        $cname = "";
        $where = " ";
        $acid = "";
    }
    ?>
    <!--    end of header-->
    <div class="center_content">
        <div class="left_content">
            <div class="crumb_nav">
                <a href="index.php">首页</a> &gt;&gt; 全部分类&gt;&gt;<?= $cname ?>
            </div>
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>分类列表
            </div>
            <div class="new_products">
                <?php
                $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $n = 6;   //一页个数
                $m = ($page - 1) * $n;
                $limit = " limit $m,$n";
                $sql_select_page = "select * from products" . $where;
                $result_select_page = mysqli_query($link, $sql_select_page);
                $total = mysqli_num_rows($result_select_page);  //总记录数
                $totalpage = ceil($total / $n);
                $sql = "SELECT id,pname,pimgs FROM products" . $where . $limit;
                $infors = db_selectw($sql);
                foreach ($infors as $v) :
                    ?>
                    <div class="new_prod_box">
                        <a href="details.php"><?= $v["pname"] ?></a>
                        <div class="new_prod_bg">
                            <a href="details.php?id=<?= $v['id'] ?>"><img src="images/<?= $v['pimgs'] ?>" alt=""
                                                                          title="" class="thumb"
                                                                          width="87px" height="93px"
                                                                          border="0"/></a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <div class="pagination">
                    <a href="category.php?<?= $acid ?>page=<?= $page == 1 ? $page = 1 : $page - 1 ?>"><<</a>
                    <?php
                    for ($index = 1; $index <= $totalpage; $index++):
                        ?>
                        <a href="category.php?<?= $acid ?>page=<?= $index ?>"><?= $index ?></a>
                    <?php
                    endfor;
                    ?>
                    <a href="category.php?<?= $acid ?>page=<?= $page == $totalpage ? $page = $totalpage : $page + 1 ?>">>></a>
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
</html>