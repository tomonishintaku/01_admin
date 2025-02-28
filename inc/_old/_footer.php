<?php //require_once dirname(__FILE__).'/common/functions.php';?>
    <?php
        //Branch banner for main and blogs footer tag
                     $url = $_SERVER['REQUEST_URI'];
           if(strstr($url,'/blog/')==true):
                ?>
    <div class="blogs-foot">
    <?php else: ?>
    <div class="foot">
    <?php endif; 
        //Branch banner for Japanese and English END
        ?>
    <p id="pagetop"><a href="#head"><i class="fa fa-chevron-circle-up"></i></a></p>
    <div class="foot__sns">
    </div>

    <div class="foot__copy">
        <p class="public_caution" lang="ja">当サイト内の文章・画像等の内容の無断転載及び複製等の行為はご遠慮ください。</p>
        <p class="public_caution" lang="en">Unauthorized copying and replication of the contents of this site, text and images are strictly prohibited. All Rights Reserved.</p>
        <address style="font-style: inherit;"> Copyright <span class="cpy">&copy;</span> 2012-<?php echo date("Y"); ?> Shintaku Tomoni. All Rights Reserved. </address>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/smoothScroll.js"></script>
<script src="/js/scripts.js"> </script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Painting",
    "name": "新宅睦仁",
    "url": "https://tomonishintaku.com",
    "sameAs": [
        "https://twitter.com/tomonishintaku",
        "https://www.facebook.com/tomoni.shintaku",
        "https://www.instagram.com/tomonishintaku",
        "https://www.linkedin.com/in/tomonishintaku"
    ]
}
</script>