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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>My account
            </div>
            <div class="feat_prod_box_details">
                <p class="details">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud.
                </p>
                <div class="contact_form">
                    <div class="form_subtitle">登陆您的账户</div>
                    <form name="register" action="login.php" method="post">
                        <div class="form_row">
                            <label class="contact"><strong>Username:</strong></label>
                            <input type="text" class="contact_input" name="uname"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Password:</strong></label>
                            <input type="text" class="contact_input" name="pwd"/>
                        </div>
                        <div class="form_row">
                            <div class="terms">
                                <input type="checkbox" name="terms"/>
                                Remember me
                            </div>
                        </div>
                        <div class="form_row">
                            <input type="submit" class="register" value="登陆"/>
                        </div>
                    </form>
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