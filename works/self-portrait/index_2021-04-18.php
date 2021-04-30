<!DOCTYPE html>
<html lang="ja">
<head>
	<!--include meta-->
	<?php include("../../inc/meta.php"); ?><!--/include meta -->
	<meta content="<?php require_once dirname(__FILE__).'/../../inc/short-concept.php'; echo $selfportrait_jp;?>" lang="ja" name="description">
	<meta content="自画像,鉛筆画,セルフポートレート" lang="ja" name="keywords">
	<title>自画像(2000-2020)｜美術家/新宅睦仁</title>
	<link href="/css/works.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("../../inc/header.php"); ?>
	<!--コンテンツここから-->
	<div id="contents">
		<!-- filmset_start　-->
		<h1 class="line">自画像(2000-2020)</h1>


		<!-- 

プログラムの要件
フォルダを「年」、「月」まで分けて、31日まで回す
それをを、何年から何年まで、

2020年フォルダの
11月フォルダの
11日など
ファイル名の、拡張子を除外したものを、各画像の下に吐き出す。
三段階のforかwhileループで取得する。

		　-->

    <div id="pinterest">
      <div id="columns">
<?php
$target_dir = dirname(__FILE__).'/../../images/works/self-portrait/';
$result = array();
$command = "find " . $target_dir . " -name '*.jpg' | wc -l";
exec($command, $result);
$result = $result[0] - 1;
for ($i=0; $i<=$result; $i++) { ?>
<div class="pin"><img alt="新宅睦仁が20年以上に渡って描き続けてきた自画像" data-src="/images/works/add/self-portrait/img_<?php echo $i ?>.jpg" src="/images/common/white.gif" class="lazyload">
<time datetime="2014-04-04" >2014/04/04</time><!--記号を変換できるとベスト-->
</div>
<?php } ?>
			</div>
		</div><!--no-pinterest end-->
		<section id="works-nav">
			<?php include("../../inc/works-nav.php"); ?>
		</section><!--foot_nav end-->
	</div><!--コンテンツここまで-->
	<?php include("../../inc/footer.php"); ?>
</body>
</html>