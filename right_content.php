<div class="right_content">
    <!--    <div class="languages_box">-->
    <!--        <span class="red">Languages:</span>-->
    <!--        <a href="#" class="selected"><img src="images/gb.gif" alt="" title="" border="0"/></a>-->
    <!--        <a href="#"><img src="images/fr.gif" alt="" title="" border="0"/></a>-->
    <!--        <a href="#"><img src="images/de.gif" alt="" title="" border="0"/></a>-->
    <!--    </div>-->
    <!--    <div class="currency">-->
    <!--        <span class="red">Currency: </span>-->
    <!--        <a href="#">GBP</a>-->
    <!--        <a href="#">EUR</a>-->
    <!--        <a href="#" class="selected">USD</a>-->
    <!--    </div>-->
    <div class="cart">
        <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title=""/></span>My cart
        </div>
        <div class="home_cart_content">
            <?= $num ?>items | <span class="red">TOTAL: <?= $count ?>￥</span>
        </div>
        <a href="cart.php" class="view_cart">查看购物车</a>
    </div>
    <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title=""/></span>商店简介
    </div>
    <div class="about">
        <p>
            <img src="images/about.gif" alt="" title="" class="right"/>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
        </p>
    </div>
    <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title=""/></span>促销商品
        </div>
        <?php
        $sql = "SELECT id,pname,pimgs,psalenum FROM products ORDER BY psalenum Limit 3  ";
        $infors = db_selectw($sql);
        foreach ($infors as $v) :
            ?>
            <div class="new_prod_box">
                <a href="details.php"><?= $v["pname"] ?></a>
                <div class="new_prod_bg">
                    <span class="new_icon"><img src="images/promo_icon.gif" alt="" title=""/></span>
                    <a href="details.php?id=<?= $v['id'] ?>"><img src="images/<?= $v['pimgs'] ?>" alt="" title=""
                                                                  class="thumb"
                                                                  width="130px" height="118px"
                                                                  border="0"/></a>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title=""/></span>商品分类
        </div>
        <ul class="list">
            <!--            分类列表-->
            <?php
            $infors = db_select("catogry");
            foreach ($infors as $v) :
                ?>
                <li><a href="category.php?cid=<?= $v['id'] ?>"><?= $v["cname"] ?></a></li>
            <?php
            endforeach;
            ?>
        </ul>
        <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title=""/></span>友情链接
        </div>
        <ul class="list">
            <li><a href="#">网站1</a></li>
            <li><a href="#">网站2</a></li>
            <li><a href="#">网站3</a></li>
            <li><a href="#">网站4</a></li>
            <li><a href="#">网站5</a></li>
        </ul>
    </div>
</div>