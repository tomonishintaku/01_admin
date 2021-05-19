<!DOCTYPE html>
<html lang="ja">
<head>
	<!--include meta-->
	<?php include("../../inc/meta.php"); ?><!--/include meta -->
	<meta content="<?php require_once dirname(__FILE__).'/../../inc/short-concept.php'; echo $selfportrait_jp;?>" lang="ja" name="description">
	<meta content="自画像,鉛筆画,セルフポートレート" lang="ja" name="keywords">
	<title>自画像(2000-<?php echo date("Y"); ?>)｜現代美術家/新宅睦仁</title>
	<link href="/css/works.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("../../inc/header.php"); ?>
	<!--コンテンツここから-->
	<div id="contents">
		<!-- filmset_start　-->
		<h1 class="line">自画像(2000-<?php echo date("Y"); ?>)</h1>

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
$imageFile = $year.'-'.$month.'-'.$day;

$result = array();
$command = "find " . $target_dir . " -name '*.jpg' | wc -l";
exec($command, $result);
$result = $result[0] - 1;

for ($i = 1; $i <= $result; $i++) {

//for ($year = 2005; $year <= 2006; $year++) { 
//for ($month = 1; $month <= 12; $month++) { 
//for ($day = 1; $day <= 31; $day++) {  

?>

<?php
$images = glob('../../images/works/self-portrait/*jpg');

foreach($images as $v) {
  echo '<img src="' , $v , '" alt="" loading="lazy">';
  echo $v;
}?>


<div class="pin">
	<figure>
		<img alt="現代美術家の新宅睦仁(シンタクトモニ)の<?php echo $year.'年'.$month.'月'.$day.'日' ?>の自画像/鉛筆ドローイング" data-src="/images/works/add/self-portrait/<?php echo $imageFile ?>.jpg" src="/images/common/white.gif" class="lazyload">
		<figcaption><time datetime="<?php echo $year.'/'.$month.'/'.$day ?>" itemprop="datepublished"><?php echo $year.'/'.$month.'/'.$day ?></time>
		</figcaption>
	</figure>
</div>

<?php 
}//imageFile Loop
//}//day Loop
//}//month Loop
//}//year Loop
 ?>
			</div>
		</div><!--no-pinterest end-->
		<section id="works-nav">
			<?php include("../../inc/works-nav.php"); ?>
		</section><!--foot_nav end-->
	</div><!--コンテンツここまで-->
	<?php include("../../inc/footer.php"); ?>
</body>
</html>