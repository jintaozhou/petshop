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
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title=""/></span>Register
            </div>
            <div class="feat_prod_box_details">
                <p class="details">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud.
                </p>
                <div class="contact_form">
                    <div class="form_subtitle">创建新的账户</div>
                    <form name="register" action="#" method="post">
                        <div class="form_row">
                            <label class="contact"><strong>Username:</strong></label>
                            <input type="text" class="contact_input" name="uname"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Password:</strong></label>
                            <input type="text" class="contact_input" name="psw"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Email:</strong></label>
                            <input type="text" class="contact_input" name="email"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Phone:</strong></label>
                            <input type="text" class="contact_input" name="tel"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Company:</strong></label>
                            <input type="text" class="contact_input" name="company"/>
                        </div>
                        <div class="form_row">
                            <label class="contact"><strong>Adrres:</strong></label>
                            <input type="text" class="contact_input" name="addres"/>
                        </div>
                        <?php
                        if (isset($_POST["uname"])) {
                            $uname = $_POST["uname"];
                            $psw = $_POST["psw"];
                            $company = $_POST["company"];
                            $email = $_POST["email"];
                            $tel = $_POST["tel"];
                            $addres = $_POST["addres"];
                            $sql = "INSERT INTO users(uname,psw,company,email,tel,addres) VALUES ('$uname','$psw','$company','$email','$tel','$addres')";
                            db_add($sql);
                        }
                        ?>
                        <div class="form_row">
                            <div class="terms">
                                <input type="checkbox" name="terms"/>
                                I agree to the <a href="#">terms &amp; conditions</a></div>
                        </div>
                        <div class="form_row">
                            <input type="submit" class="register" value="注册"/>
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