<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("../../inc/meta.php"); ?>
	<meta content="<?php require_once dirname(__FILE__).'/../../inc/short-concept.php'; echo $selfportrait_en;?>" lang="en" name="description">
	<meta content="abortion, pro-life, pro-choice, Catholic" lang="en" name="keywords">
	<title>Self-portrait(2004-<?php echo date("Y"); ?>)｜Contemporary artist SHINTAKU Tomoni</title>
	<link href="/css/works.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("../../../inc/header.php"); ?>
	<!-- START contents-->
	<div id="contents">
		<!-- 自画像プロジェクトの開始年月日 2004.03.03 16:28　-->
		<h1 class="line">Self-portrait(2004-<?php echo date("Y"); ?>)</h1>
        <p class="details">paper, pencils, colored pencils, watercolors, dermatographs, coffee, felt-tip pens, ballpoint pens, etc. 6.2 × 8.3 inches (15.8 × 21.0 cm) &#12316 9 × 12 inches (22.9 × 30.5 cm)</p>

<style>
/*最終的にcssファイルに移行予定*/

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
		  $target_dir = dirname(__FILE__).'/../../../images/works/self-portrait/';
		  
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
		  $file = dirname(__FILE__).'/../../../images/works/self-portrait/'.$imageFile.'.jpg';
		  if (file_exists($file)) {
			  // START images exist
		   ?>
		  
			  <figure class="inner__col">
				  <a href="/images/works/self-portrait/<?php echo $imageFile ?>@2x.jpg" class="zoom">
                      <img alt="Contemporary artist SHINTAKU Tomoni's <?php echo $year.'/'.$month.'/'.$day ?> Self-portrait or pencil drawing" data-src="/images/works/self-portrait/<?php echo $imageFile ?>.jpg" src="/images/common/white.gif" class="lazyload">
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
            <?php include("../../../js/luminous/image-zoom.php"); ?>
		</section>
		<!--foot_nav end-->
	</div>
	<!-- contents END-->
	<?php include("../../../inc/footer.php"); ?>
</body>
</html>