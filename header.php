<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">
<?php wp_head(); ?>
</head>

<body>


<p id="page-top"><a href="#wrap"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i><br>PAGE TOP</a></p>
    <div class="dot_border"></div>
    <div class="dot_border2"></div>
    <div class="tagline"  data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">自分の人生の、<br>主人公に&nbsp;&nbsp;&nbsp;&nbsp;<br>なろう。</div>
    <header class="container">
        <div class="naname" data-aos="fade-right"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">
            <a href="<?php echo home_url(); ?>"><img class="title" src="<?php echo get_template_directory_uri(); ?>/images/sample-logo.png" alt="タイトルロゴ"></a>
        </div>
 <img src="<?php echo get_template_directory_uri(); ?>/images/top-image.jpg" alt="トップイメージ">
<!--
<div class="bubble-efect">
  <div class="container">
  <div class="bubble-wrap">
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>
</div>
 </div>

 -->



 <nav class="sumaho_menu">
<div class="muck-up">
  <div class="top">
  </div>
  <div class="clearfix"></div>
  <div class="filter-btn">
    <a id="one" href="#aboutus"><i class="fa fa-user-circle-o  fa-1x" aria-hidden="true"></i><br></a>
    <a id="twe" href="#greeting"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"></i></a>
    <a id="three" href="#contact"><i class="fa fa-envelope-o fa-1x" aria-hidden="true"></i></a>
    <span class="toggle-btn ion-android-funnel"><i class="fa fa-bars fa-1x" aria-hidden="true"></i></span>
  </div>
</div>
</nav>
        <div class="none">
            <div class="nav_menu1">
                <a href="#aboutus">
                    <div class="menu"><span><i class="fa fa-user-circle-o  fa-2x" aria-hidden="true"></i><br>About Us</span></div>
                </a>
            </div>
            <div class="nav_menu2">
                <a href="#greeting">
                    <div class="menu"><span><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i><br>Greeting</span></div>
                </a>
            </div>
            <div class="nav_menu3">
                <a href="#contact">
                    <div class="menu"><span><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i><br>Contact</span></div>
                </a>
            </div>
    </header>
    <main>
        <section class="naname-border">
            <svg class="svg_top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" />
            </svg>
            <svg class="svg_bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="100,0 0,100 0,0" />
            </svg>
        </section>