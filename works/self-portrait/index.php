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
        <p class="details">紙、鉛筆、色鉛筆、水彩、ボールペン他、30.5×30.5cm &#12316 30.5×30.5cm</p>

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
.inner__col{
width: 24.85%;
margin-right: 0.2%;
}

.inner__col:nth-child(4n){
    margin-right: 0;
    }

.inner__col img{
    width: 100%;
    }
.col__caption{
    text-align: center;
    font-size: 0.75rem;
    margin-top: 0;
    display: block;
    color: #777;
    padding-bottom: 0.5rem;
}
@media only screen and (max-width: 768px){
    .inner__col{
     width: 32%;
     margin-right: 1.5%;
        }
        .inner__col{
             width: 33.133333333333333%;
             margin-right: 0.2%;
                }
                
                .inner__col:nth-child(3n){
margin-right: 0;
                    
                }
                .inner__col:nth-child(4n){
                    margin-right: 0.2%;
                    }
                
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
		  
			  <figure class="inner__col">
				  <a href="/images/works/self-portrait/<?php echo $imageFile ?>@2x.jpg" class="zoom">
                      <img alt="現代美術家の新宅睦仁(シンタクトモニ)の<?php echo $year.'年'.$month.'月'.$day.'日' ?>の自画像/鉛筆ドローイング" data-src="/images/works/self-portrait/<?php echo $imageFile ?>.jpg" src="/images/common/white.gif" class="lazyload">
                  </a>
				  <figcaption class="col__caption"><time datetime="<?php echo $year.'/'.$month.'/'.$day ?>" itemprop="datepublished"><?php echo $year.'/'.$month.'/'.$day ?></time>
				  <!-- small><?php echo$year; ?>年 紙、鉛筆、30.5×30.5cm &#12316 30.5×30.5cm</small-->
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
            <?php include("../../js/luminous/image-zoom.php"); ?>
		</section><!--foot_nav end-->
	</div><!--コンテンツここまで-->
	<?php include("../../inc/footer.php"); ?>
</body>
</html>