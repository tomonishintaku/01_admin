<?php
// Picking up the page title 

function curl_get_contents( $url ){
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_HEADER, false );
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
  curl_setopt( $ch, CURLOPT_FAILONERROR, true );
  $result = curl_exec( $ch );
  curl_close( $ch );
  return $result;
}

// URL を指定する
$page_url = "https://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

// 指定された URL から HTML 文字列を取得
$html = curl_get_contents( $page_url );

// 内部エンコーディングに指定している文字コードに変換
$html = mb_convert_encoding($html, mb_internal_encoding(), "auto" );

// 正規表現を使って title タグを抜き出す
if ( preg_match( "/<title>(.*?)<\/title>/i", $html, $matches) ) {
    $page_title = $matches[1];
} else {
    $page_title = 'Contemporary Artist Tomoni Shintaku';
}

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1BM6T539L9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1BM6T539L9');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59FKPF7');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8"><meta name="viewport" content="width=device-width"><meta name="author" content="Tomoni Shintaku"/><meta name="copyright" content="Tomoni Shintaku"/><meta property="og:title" content='<?php echo $page_title; ?>'/><meta property="og:type" content="website"/><meta property="og:image" content="https://tomonishintaku.com/images/common/og-image.png"/><meta property="og:url" content="https://tomonishintaku.com<?php echo $_SERVER['PHP_SELF'] ?>"/><meta property="og:description" content="This website introduces Contemporary Artist Tomoni Shintaku’s artworks, which consist of painting and installation. It will also announce his Solo Show and Group Exhibition."/><meta property="og:site_name" content="Contemporary Artist Tomoni Shintaku"/><meta name="twitter:card" content="summary"><meta name="twitter:site" content="@tomoni_en"><meta name="twitter:title" content='<?php echo $page_title; ?>'><meta name="twitter:description" content="This website introduces Contemporary Artist Tomoni Shintaku’s artworks, which consist of painting and installation. It will also announce his  Solo Show and Group Exhibition."><meta name="twitter:image" content="https://tomonishintaku.com/images/common/og-image.png"><meta property="og:locale" content="en_US" /><meta property="fb:app_id" content="210438150129981" /><link rel="shortcut icon" href="/images/common/favicon.ico"><link rel="icon" href="/images/common/favicon.ico"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><link rel="alternate" hreflang="en-us" href="https://tomonishintaku.com<?php echo $_SERVER['PHP_SELF'] ?>" /><link rel="alternate" hreflang="ja" href="https://tomonishintaku.com<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>" />

<?php  
require_once('/home/xs20220528/tomonishintaku.com/public_html/inc/common/functions.php');  
?>
<?php 

$style = '<link href="/css/style.css" rel="stylesheet" type="text/css">';
$style_blogEN = '<link href="/css/style_blogEN.css" rel="stylesheet" type="text/css">';

MultiBranchURL('/blog/', '/works/', '/exhibition/', $style_blogEN, null, null, $style);

/*This function from "/inc/common/functions.php"
MultiBranchURL($char1, $char2, $char3, $char_true1, $char_true2, $char_true3, $char_false)*/

 ?>
                
<style>*:lang(ja) {display: none!important;}</style>
