<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('discription')?>">
  <title><?php bloginfo('name') ?></title>

  <!-- reset css -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- swiper css -->
  <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <!-- slick css -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <?php wp_head(); ?>


</script>
</head>
<body <?php body_class(); ?>>

   <!-- 画面遷移 -->
   <div id="js-splash">
    <div id="js-splash_logo">
      <img src="<?php echo get_template_directory_uri();?>/images/LogoBlack.jpg" alt="kiiwebdesignのロゴ">
    </div>
   </div>
   <div class="js-splash_bg"></div>

  <!-- ハンバーガーメニュー -->
  <div class="js-open_btn">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <?php get_template_part('includes/header'); ?>

    <!-- main -->
  <div id="container">

    <div id="wrapper">

    <!-- header -->
    <header id="header">
      <h1 class="header-title font-h1 js-randomBox">
        <a href="index.html" class="js-box2">
          <img src="<?php echo get_template_directory_uri();?>/images/LogoWhite.jpg" alt="kiiwebdesignのロゴ">
        </a>
      </h1>
    </header>

    <!-- scroll down -->
    <a href="#footer" class="scrollbtn">
      <span>Scroll</span>
    </a>

