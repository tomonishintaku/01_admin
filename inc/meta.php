<?php
// Picking up the page title 
// URL を指定する
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// 指定された URL から HTML 文字列を取得
$html = file_get_contents($url);

// 内部エンコーディングに指定している文字コードに変換
$html = mb_convert_encoding($html, mb_internal_encoding(), "auto" );

// 正規表現を使って title タグを抜き出す
if ( preg_match( "/<title>(.*?)<\/title>/i", $html, $matches) ) {
    $page_title = $matches[1];
} else {
    $page_title = '現代美術家｜新宅睦仁';
}

?>

<meta charset="UTF-8"><meta name="viewport" content="width=device-width"><meta name="author" content="新宅睦仁" /><meta name="copyright" content="Shintaku Tomoni" /><meta property="og:title" content="<?php echo $page_title; ?>" /><meta property="og:type" content="website" /><meta property="og:image" content="https://tomonishintaku.com/images/common/og-image.png" /><meta property="og:url" content="https://tomonishintaku.com<?php echo $_SERVER['PHP_SELF'] ?>" /><meta property="og:description" content="食をテーマとする現代美術家の新宅睦仁の絵画、立体、インスタレ－ション作品、コンセプト、個展・グループ展情報の紹介" /><meta property="og:site_name" content="現代美術家の新宅睦仁のWebサイト" /><meta name="twitter:card" content="summary"><meta name="twitter:site" content="@tomonishintaku"><meta name="twitter:title" content="<?php echo $page_title; ?>"><meta name="twitter:description" content="食をテーマとする現代美術家の新宅睦仁の絵画やインスタレ－ション作品、個展・グループ展情報の紹介"><meta name="twitter:image" content="https://tomonishintaku.com/images/common/og-image.png"><meta property="og:locale" content="ja_JP" /><meta property="fb:app_id" content="210438150129981" /><link rel="shortcut icon" href="/images/common/favicon.ico"><link rel="icon" href="/images/common/favicon.ico"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><link rel="alternate" hreflang="ja" href="https://tomonishintaku.com<?php echo $_SERVER['PHP_SELF'] ?>" /><link rel="alternate" hreflang="en-us" href="https://tomonishintaku.com/en<?php echo $_SERVER['PHP_SELF'] ?>" /><?php require_once dirname(__FILE__).'/common/functions.php';?><?php $style = '<link href="/css/style.css" rel="stylesheet" type="text/css">';$style_blogJA = '<link href="/css/style_blogJA.css" rel="stylesheet" type="text/css">';MultiBranchURL('/blog/', '/works/', '/exhibition/', $style_blogJA, null, null, $style);/*This function from "/inc/common/functions.php"MultiBranchURL($char1, $char2, $char3, $char_true1, $char_true2, $char_true3, $char_false)*/ ?>    <style>*:lang(en) {    display: none !important;}</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1BM6T539L9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1BM6T539L9');
</script>

<!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-34577324-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag() {    dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-34577324-1');</script><!-- Google Tag Manager --><script>(function(w, d, s, l, i) {    w[l] = w[l] || [];    w[l].push({        'gtm.start': new Date().getTime(),        event: 'gtm.js'    });    var f = d.getElementsByTagName(s)[0],        j = d.createElement(s),        dl = l != 'dataLayer' ? '&l=' + l : '';    j.async = true;    j.src =        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;    f.parentNode.insertBefore(j, f);})(window, document, 'script', 'dataLayer', 'GTM-59FKPF7');</script><!-- End Google Tag Manager -->