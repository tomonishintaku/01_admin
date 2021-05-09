<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34577324-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-34577324-1');
    </script>
    <meta name="description" content="<?php the_title();?>｜独自の視座によるエッセイを中心に、社会コラムや批評、ときどき現代アート/現代美術についてのブログ。">
    <meta name="keywords" content="日記,エッセイ,コラム,美術,アート">
    <meta name="author" content="新宅睦仁" />
    <meta name="copyright" content="Shintaku Tomoni" />
    <meta property="og:title" content="<?php the_title();?>｜現代美術家 新宅睦仁のブログ" />
    <meta property="og:type" content="blog" />
    <meta property="og:image" content="https://tomonishintaku.com/images/common/og-image-blog.png" />
    <meta property="og:url" content="https://tomonishintaku.com" />
    <meta property="og:description"
        content="<?php the_title();?>｜現代美術家 新宅睦仁のブログ。エッセイを中心に、社会コラムや批評、ときどき現代アート/現代美術について。" />
    <meta property="og:site_name" content="<?php the_title();?>｜現代美術家 新宅睦仁のブログ" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="210438150129981" />
    <script src="/js/css_browser_selector.js"></script>
    <link rel="shortcut icon" href="/images/common/favicon.ico" type="image/vnd.microsoft.icon">
    <link href="/css/style_blogJA.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <?php if ( is_home() && !is_paged() ): ?>
    <meta name="robots" content="index,follow">
    <?php elseif ( is_search() or is_404() ): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif ( !is_category() && is_archive() ): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif ( is_paged() ): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif ( trim($GLOBALS["stdata9"]) !== '' &&  ($GLOBALS["stdata9"]) == $post->ID ): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif ( is_category() && trim($GLOBALS["stdata15"]) !== ''): ?>
    <meta name="robots" content="noindex,follow">
    <?php endif; ?>
    <link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed"
        href="<?php bloginfo( 'rss2_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <?php include_once( "st-font.php" ) //googlefont ?>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <style>
    *:lang(en) {
        display: none !important;
    }
    </style>
</head>

<body <?php body_class('JAblog-wrapper'); ?>>
    <!--ヘッダーここから-->
    <?/*php if ( is_home() ) { ?>
    <h1 class="descr"><?php bloginfo( 'description' ); ?></h1>
    <?php } else { ?>
    <p class="descr"><?php bloginfo( 'description' ); ?></p>
    <?php } */?>
    <?php
					$header = file_get_contents('https://tomonishintaku.com/inc/header.php');
					echo $header;
					?>
    <!--ヘッダーここまで-->
    <div id="contents" class="<?php st_wrap_class(); ?>">
        <header>
            <div class="clearfix" id="headbox">
                <div id="header-l">
                    <!-- ロゴ又はブログ名 -->
                    <!--p class="sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"-->
                    <!--?php if ( get_option( 'st_logo_image' ) ): //ロゴ画像がある時 ?>
							<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" -->
                    <!--?php else: //ロゴ画像が無い時 ?-->
                    <!--?php echo esc_attr( get_bloginfo( 'name' ) ); ?-->
                    <!--?php endif; ?-->
                    <!--/a></p-->
                    <!-- キャプション -->
                </div><!-- /#header-l -->
                <div id="header-r" class="smanone">
                    <?php if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) {
					get_template_part( 'st-footer-link' ); //フッターリンク 
				} ?>
                    <?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
                </div><!-- /#header-r -->
            </div><!-- /#clearfix -->
        </header>