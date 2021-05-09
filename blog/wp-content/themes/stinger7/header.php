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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-59FKPF7');</script>
    <!-- End Google Tag Manager -->
    <meta name="author" content="新宅睦仁" />
    <meta name="copyright" content="Shintaku Tomoni" />
    <link rel="shortcut icon" href="/images/common/favicon.ico" type="image/vnd.microsoft.icon">
    <link href="/css/style_blogJA.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
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
    <?php include_once( "st-font.php" ) //googlefont ?>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <style>*:lang(en) {display: none !important;}#head #logotype .voice {display: none;}</style>
</head>

<body <?php body_class('JAblog-wrapper'); ?>>

    <?php
		  $header = file_get_contents('https://tomonishintaku.com/inc/header.php');
		  echo $header;
	?>
    <div id="contents" class="<?php st_wrap_class(); ?>">
        <header>
            <div class="clearfix" id="headbox">
                <div id="header-r" class="smanone">
                    <?php if ( isset($GLOBALS['stdata43']) && $GLOBALS['stdata43'] === 'yes' ) {
					get_template_part( 'st-footer-link' ); //フッターリンク 
				} ?>
                    <?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
                </div><!-- /#header-r -->
            </div><!-- /#clearfix -->
        </header>