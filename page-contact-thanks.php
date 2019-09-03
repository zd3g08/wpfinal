<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">
<?php wp_head(); ?>
</head>

<body>
<p id="page-top"><a href="#wrap"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i><br>PAGE TOP</a></p>
    <div class="dot_border"></div>
    <div class="dot_border2"></div>
    <header class="container">
        <div class="naname">
            <a href="<?php echo home_url(); ?>"><img class="title" src="<?php echo get_template_directory_uri(); ?>/images/sample-logo.png" alt="タイトルロゴ"></a>
        </div>
    </header>
    <main>
        <section class="midashi">
            <h3 id="contact">Contact</h3>
            <div class="dot_red_border"></div>
            <article>
                <h4>お問い合わせフォームの投稿を受け付けました。</h4>
                <div class="content_center">
<?php
    // スラッグが ''の内容の固定ページの内容を出力します
    $page = get_page_by_path( 'contact-thanks' );
    if( isset( $page ) ) {
        echo apply_filters( 'the_content', $page->post_content );
    }
    ?>                </div>
            </article>
        </section>
        <section class="yohaku"></section>
<?php get_footer(); ?>