<!DOCTYPE html>
<html lang="ja">
<head>
	<!--include meta-->
	<?php include("../../inc/meta.php"); ?><!--/include meta -->
	<meta content="<?php require_once dirname(__FILE__).'/../../inc/short-concept.php'; echo $selfportrait_jp;?>" lang="ja" name="description">
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

<style>
.wrap__inner{
	display: flex;
	flex-wrap: wrap;
}
.wrap__inner__col{
width: 25%;
}
.wrap__inner__col img{
	width: 100%;
	}
	
	</style>


      <article class="wrap">
		  <section class="wrap__inner">	
		  <?php
		  $target_dir = dirname(__FILE__).'/../../images/works/self-portrait/';
		  
		  $result = array();
		  $command = "find " . $target_dir . " -name '*.jpg' | wc -l";
		  exec($command, $result);
		  $result = $result[0] - 1;
		  //for ($i=0; $i<=$result; $i++) { 
		  //for ($year = 2005; $year <= 2100; $year++) { 
		  //for ($month = 1; $month <= 12; $month++) { 
		  //for ($day = 1; $day <= 31; $day++) {  
		  for ($year = 2100; $year >= 2005; $year--) { 
		  for ($month = 12; $month >= 1; $month--) { 
		  for ($day = 31; $day >= 1; $day--) {  
		  
		  $imageFile = $year.'-'.$month.'-'.$day;	  
		  
		  //画像ファイルの存在チェック
		  $file = dirname(__FILE__).'/../../images/works/self-portrait/'.$imageFile.'.jpg';
		  if (file_exists($file)) {
			  // 画像あり
		  
		   ?>
		  
			  <figure class="wrap__inner__col">
				  <img alt="現代美術家の新宅睦仁(シンタクトモニ)の<?php echo $year.'年'.$month.'月'.$day.'日' ?>の自画像/鉛筆ドローイング" data-src="/images/works/self-portrait/<?php echo $imageFile ?>.jpg" src="/images/common/white.gif" class="lazyload">
				  <figcaption><time datetime="<?php echo $year.'/'.$month.'/'.$day ?>" itemprop="datepublished"><?php echo $year.'/'.$month.'/'.$day ?></time>
				  <small><?php echo$year; ?>年 紙、鉛筆、30.5×30.5cm &#12316 30.5×30.5cm</small>
				  </figcaption>
			  </figure>

<?php

} else {
  // 画像なし
  
  
  }

?>
		  	  
	
		  <?php }}}
	  
	  //} ?>
		  </section>		  
	  </article>
		  
		<section id="works-nav">
			<?php include("../../inc/works-nav.php"); ?>
		</section><!--foot_nav end-->
	</div><!--コンテンツここまで-->
	<?php include("../../inc/footer.php"); ?>
</body>
</html>