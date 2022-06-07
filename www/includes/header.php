<!DOCTYPE html><!--[if IE 9]><html class="ie ie9" lang="en-US"> <![endif]--><html lang="en-US">
<!-- Mirrored from jellywp.com/html/sprasa-preview/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Oct 2021 07:25:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="" /><meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Title-->
  <title>Blog - read all you want</title>
  <!-- Favicon-->
  <link rel="icon" href="img/favicon.png" type="image/x-icon" />
  <!-- Stylesheets--><link rel="stylesheet" href="css/style.css" type="text/css" media="all" /><!-- end head -->
</head>
<body class="woocommerce-account woocommerce-page woocommerce-js mobile_nav_class jl-has-sidebar">
  <!-- <div class="options_layout_wrapper jl_clear_at jl_radius jl_none_box_styles jl_border_radiuss jl_en_day_night"> -->
    <!-- <div class="options_layout_container full_layout_enable_front"> -->
      <header class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cus_top_share">
        <div class="header_top_bar_wrapper">
          <div class="container">
            <div class="row">
            <div class="col-md-12">

              <div class="jl_top_cus_social">
                <div class="menu_mobile_share_wrapper">
                  <span class="jl_hfollow">Home</span>

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Main menu -->
    <div class="jl_blank_nav">
    </div>
    <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick">
      <div class="container">
        <div class="row">
          <div class="main_menu col-md-12">

      <div class="menu-primary-container navigation_wrapper jl_cus_share_mnu">
        <ul id="mainmenu" class="jl_main_menu">
          <li class="menu-item current-menu-item current_page_item">
            <a href="index.php">Home<span class="border-menu">
            </span>
          </a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Blog Categories<span class="border-menu"></span>
          </a>
          <ul class="sub-menu"><li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Active' ");
            $m->execute();
            $r=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$r['category_name']?>">Active<span class="border-menu"></span>
            </a>
          </li>
          <li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Business' ");
            $m->execute();
            $a=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$a['category_name']?>">Business<span class="border-menu"></span>
            </a>
          </li>
          <li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Health' ");
            $m->execute();
            $b=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$b['category_name']?>">Health<span class="border-menu"></span></a>
          </li>
          <li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Inspiration' ");
            $m->execute();
            $c=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$c['category_name']?>">Inspiration<span class="border-menu"></span></a>
          </li>
          <li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Science' ");
            $m->execute();
            $d=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$d['category_name']?>">Science<span class="border-menu"></span></a>
          </li>
          <li class="menu-item">
            <?php
            $m=$conn->prepare("SELECT * FROM category WHERE category_name='Sports' ");
            $m->execute();
            $e=$m->fetch(PDO::FETCH_BOTH)
            ?>
            <a href="blog_category.php?id=<?=$e['category_name']?>">Sports<span class="border-menu"></span></a>
          </li>
        </ul>
      </li>
</ul>
</div>

</div>
</div>
</div>
</div>
</header>
