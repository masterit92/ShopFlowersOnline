<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Flower Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php
        include_once 'templates/render.php';
        $render= new render();
        $arrFileCSS= array('style.css','style_menuLogin.css');
        $render->renderCSS('default',$arrFileCSS);
        $arrFileJS= array('jquery-1.10.2.js','jquery.validate.min.js','messages_vi.js','js_index.js');
        $render->renderJS('default',$arrFileJS);
    ?>
    <link href="<?php echo URL_BASE ?>/favicon.ico" rel="shortcut icon" />
</head>
<body>
<div id="wrap">
    <div class="header">
        <div class="logo"><a href="<?php echo URL_BASE?>"><img src="<?php echo URL_BASE?>/templates/default/images/logo.gif" alt="" border="0"/></a></div>
        <div id="menu">
            <?php include_once 'menu.php' ?>
        </div>
        <div class="menuLogin">
            <?php include_once 'menuLogin.php'?>
        </div>
    </div>
    <!--end of header-->
    <div class="center_content">
        <div class="left_content">
            <form method="get" action="">
                <input type="text" name="txtName"/>
                <input type="text" name="txt"/>
                <input type="text" name="aa"/>
                <input type="submit"/>
            </form>
            <?php include_once TEMPLATE; ?>
        </div>
        <!--end of left content-->
        <div class="right_content">
            <div class="cart">
                <div class="title"><span class="title_icon"><img src="<?php echo URL_BASE?>/templates/default/images/cart.gif" alt=""/></span>My
                    cart
                </div>
                <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span></div>
                <a href="#" class="view_cart">view cart</a>
            </div>
            <div class="right_content_half">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo  URL_BASE?>/templates/default/images/bullet3.gif" alt=""/></span>
                    Search
                </div>
                <div class="clear"></div>
                <div class="right_content_half_content">
                    Search
                </div>
            </div>
            <div class="right_content_half">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo URL_BASE?>/templates/default/images/bullet4.gif" alt=""/></span>
                    Best Sellers
                </div>
                <div class="clear"></div>
                <div class="right_content_half_content">
                    Best Sellers
                    <?php echo $this->test?>
                </div>
            </div>
            <div class="right_content_half">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo URL_BASE?>/templates/default/images/bullet5.gif" alt=""/></span>
                    Promotions
                </div>
                <div class="clear"></div>
                <div class="right_content_half_box">
                    Promotions
                </div>
            </div>
            <div class="right_content_half">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo URL_BASE?>/templates/default/images/bullet6.gif" alt=""/></span>
                    Category
                </div>
                <div class="clear"></div>
                <div class="right_content_half_box">
                    Category
                </div>
            </div>
            <div class="right_content_half right_content_right">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo  URL_BASE?>/templates/default/images/bullet7.png" alt=""/></span>
                    Flower
                </div>
                <div class="clear"></div>
                <div class="right_content_half_box">
                    Flower
                </div>
            </div>
            <div class="clear"></div>
            <div>
                <div class="title">
                    <span class="title_icon"><img src="<?php echo  URL_BASE?>/templates/default/images/news.png" alt=""/></span>
                    News
                </div>
                <div class="clear"></div>
                <div class="right_content_half_box">
                    Hot new
                </div>
            </div>
            <div class="">
                <div class="title">
                    <span class="title_icon"><img src="<?php echo  URL_BASE?>/templates/default/images/Online support.png" alt=""/></span>
                    Online support
                </div>
                <div class="clear"></div>
                <div class="right_content_half_box">
                    Online support
                </div>
            </div>
            <!--end of Search-->
            <!--end of cart-->
        </div>
        <!--end of right content-->
        <div class="clear"></div>
        <div class=""></div>
    </div>
    <!--end of center content-->
    <div class="footer">
        <div class="left_footer"><img src="<?php echo URL_BASE?>/templates/default/images/footer_logo.gif" alt=""/></div>
    <div class="right_footer">
        <a href="<?php echo URL_BASE?>/index">home</a>
        <a href="<?php echo URL_BASE?>/about">about us</a>
        <a href="#">services</a>
        <a href="#">contact us</a>
    </div>
        <div class="clear"></div>
        <div class="copy_right">&#169;Copyright, Development by trainee SmartOSC&#174; </div>
</div>
<!--end of footer-->
</div>
<!--end of warp-->
</body>
</html>