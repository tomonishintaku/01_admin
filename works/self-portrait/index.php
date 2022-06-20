<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include("../../inc/meta.php"); ?>
	<meta content="<?php require_once dirname(__FILE__).'/../../inc/short-concept.php'; echo $selfportrait_jp;?>" lang="ja" name="description">
	<title>自画像(2004-<?php echo date("Y"); ?>)｜現代美術家/新宅睦仁</title>
	<link href="/css/works.css" rel="stylesheet" type="text/css">
	<style>
/*最終的にcssファイルに移行予定*/
.wrap__inner {
	display: flex;
	flex-wrap: wrap;
}
.inner__col {
	width: 24.85%;
	margin-right: 0.2%;
}
.inner__col:nth-child(4n) {
	margin-right: 0;
}
.inner__col img {
	width: 100%;
}
.col__caption {
	text-align: center;
	font-size: 0.75rem;
	margin-top: 0;
	display: block;
	color: #777;
	padding-bottom: 0.5rem;
}
@media only screen and (min-width: 769px) {
.self-portrait-image-wrap__inner{
 width: 254px;
 height: 374px;
	}
}
@media only screen and (max-width: 768px) {
	.self-portrait-image-wrap__inner{
 		width: 114px;
 		height: 168px;
	}
	.inner__col {
		width: 32%;
		margin-right: 1.5%;
	}
	.inner__col {
		width: 33.133333333333333%;
		margin-right: 0.2%;
	}
	.inner__col:nth-child(3n) {
		margin-right: 0;
	}
	.inner__col:nth-child(4n) {
		margin-right: 0.2%;
	}
}
</style>
</head>
<body>
	<?php include("../../inc/header.php"); ?>
	<!-- START contents-->
	<div id="contents">
		<!-- 自画像プロジェクトの開始年月日 2004.03.03 16:28　-->
		<h1 class="line">自画像(2004-<?php echo date("Y"); ?>)</h1>
        <p class="details">紙、鉛筆、色鉛筆、水彩、ダーマトグラフ、コーヒー、サインペン、ボールペン、他、15.8×21.0cm &#12316 22.9×30.5cm</p>
      <article class="wrap">
		  <section class="wrap__inner">	
		  <?php
		  $target_dir = dirname(__FILE__).'/../../images/works/self-portrait/';
		  
		  $result = array();
		  $command = "find " . $target_dir . " -name '*.jpg' | wc -l";
		  exec($command, $result);
		  $result = $result[0] - 1;
		  
		  // 2082 would be the year when I must die because I would have been 100 years old.
		  for ($year = 2082; $year >= 2005; $year--) { 
		  for ($month = 12; $month >= 1; $month--) { 
		  for ($day = 31; $day >= 1; $day--) {  
		  
		  //zero padding = sprintf(%02d)
		  $imageFile = $year.'-'.sprintf('%02d', $month).'-'.sprintf('%02d', $day);
		  		  
		  //Check exists of the images
		  $file = dirname(__FILE__).'/../../images/works/self-portrait/'.$imageFile.'.jpg';
		  if (file_exists($file)) {
			  // START images exist
		   ?>
		  
			  <figure class="inner__col self-portrait-image-wrap">
				  <a href="/images/works/self-portrait/<?php echo $imageFile ?>@2x.jpg" class="zoom self-portrait-image-wrap__inner">
                      <img alt="現代美術家の新宅睦仁(シンタクトモニ)の<?php echo $year.'年'.$month.'月'.$day.'日' ?>の自画像/鉛筆ドローイング" data-src="/images/works/self-portrait/<?php echo $imageFile ?>.jpg" src="/images/common/white.gif" class="lazyload" loading="lazy">
                  </a>
				  <figcaption class="col__caption"><time datetime="<?php echo $year.'-'.$month.'-'.$day ?>" itemprop="datepublished"><?php echo $year.'.'.$month.'.'.$day ?></time>
				  <!-- small><?php echo$year; ?>年 紙、鉛筆、30.5×30.5cm &#12316 30.5×30.5cm</small-->
				  </figcaption>
			  </figure>

			<?php
			// images exist END
			} 
			else {
			// No images
			  	 }
	   		?>
		  	 <?php
		   	}//day Loop END
		   	}//month Loop END
	   		}//year Loop END
	  		?>
		  </section>		  
	  </article>
		  
		<section id="works-nav">
			<?php include("../../inc/works-nav.php"); ?>
            <?php include("../../js/luminous/image-zoom.php"); ?>
		</section>
		<!--foot_nav end-->
	</div>
	<!-- contents END-->
	<?php include("../../inc/footer.php"); ?>
</body>
</html>