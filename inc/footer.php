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
    <?php
        //Branch banner for Japanese and English
           $url = $_SERVER['REQUEST_URI'];
           if(strstr($url,'/en/')==true):
				?>
                <section id="top_bnr_space" class="foot_bnr">
                    <ul class="clearfix">
                        <li><a href="/en/portfolio/" onclick="ga('send','event','banner','click','EN-portfolio', 1);"><img class="lazyload" src="/images/top/bnr_portfolio-dl_en.png" alt="PDF Artist Portfolio download"></a></li>
                        <li><a href="https://www.tricera.net/artist/8100604" target="_blank"><img class="lazyload" src="/images/top/bnr_tricera-en.png" alt="tricera, selling paintings art online"></a></li>
                        <li><a href="https://www.instagram.com/tomonishintaku/" target="_blank"><img class="lazyload" src="/images/banner/bnr_instagram-en.png" alt="instagram follow me"></a></li>
                        <li><a href="http://ec.tagboat.com/en/products/list.php?author_id=100265&tngs_flg=0" target="_blank"><img class="lazyload" src="/images/top/bnr_tagboat_en.png" alt="tagboat,picture,painting,sale"></a></li>
                    </ul>
                </section>
    <?php else: ?>
           <section id="top_bnr_space" class="foot_bnr">
                    <ul class="clearfix">
                        <li><a href="https://shintaku.co/" target="_blank" onclick="ga('send','event','banner','click','shintaku-web', 1);"><img class="lazyload" src="/images/banner/bnr_shintaku-web-design.png" title="現代美術家新宅睦仁のWEBデザインの個人事業SHINTAKU。" alt="WEBデザインの個人事業SHINTAKU。のWEBサイトへのリンクバナー"></a></li>

                        <li><a href="http://ec.tagboat.com/jp/products/list.php?author_id=100265&tngs_flg=0" target="_blank" onclick="ga('send','event','banner','click','tagboat', 1);" rel="noopener noreferrer"><img class="lazyload" src="/images/top/bnr_tagboat.jpg" alt="タグボートで新宅睦仁作品を販売中"></a></li>

                        <li><a href="/portfolio/" onclick="ga('send','event','banner','click','portfolio', 1);"><img class="lazyload" src="/images/top/bnr_portfolio-dl_jp.png" alt="作家ポートフォリオPDF版ダウンロード"></a></li>
                        <li><a href="https://www.tricera.net/artist/8100604" target="_blank"><img class="lazyload" src="/images/top/bnr_tricera-en.png" alt="tricera, selling paintings art online" rel="noopener noreferrer"></a></li>
                    </ul>
                </section>  
    <?php endif; 
        //Branch banner for Japanese and English END
        ?>
    <p id="pagetop"><a href="#head"><i class="fa fa-chevron-circle-up"></i></a></p>
    <div class="foot__sns">
        <ul>
                <?php
        //Branch SNS for Japanese and English
           $url = $_SERVER['REQUEST_URI'];
           if(strstr($url,'/en/')==true):
                ?>
    <li class="main-sns">
        <a class="button twitter" href="https://twitter.com/tomoni_en" target="_blank" title="Click to share this post on Twitter"><i aria-hidden="true" class="fab fa-twitter-square"></i></a>
    </li>
    <li class="main-sns">
        <a class="button facebook" href="https://www.facebook.com/tomoni.shintaku" target="_blank"><i aria-hidden="true" class="fab fa-facebook-square"></i></a>
    </li>
    <li>
        <a class="button instagram" href="https://www.instagram.com/tomonishintaku/" target="_blank" title="Click to share this post on Instagram"><i aria-hidden="true" class="fab fa-instagram"></i></a>
    </li>
    <li>
        <a class="button youtube" href="https://www.youtube.com/channel/UCDnt1pKShw7vYrD1JavHBkg" target="_blank" title="Click to share this post on YouTube"><i class="fab fa-youtube-square"></i></a>
    </li>
    <li>
        <a class="button linkedin" href="https://www.linkedin.com/in/tomonishintaku/" target="_blank" title="Click to share this post on LinkedIn"><i aria-hidden="true" class="fab fa-linkedin"></i></a>
    </li>
    <?php else: ?>
    <li class="main-sns">
        <a class="button twitter" href="https://twitter.com/tomonishintaku" target="_blank" title="Click to share this post on Twitter"><i aria-hidden="true" class="fab fa-twitter-square"></i></a>
    </li>
    <li class="main-sns">
        <a class="button facebook" href="https://www.facebook.com/tomoni.shintaku" target="_blank"><i aria-hidden="true" class="fab fa-facebook-square"></i></a>
    </li>
    <li>
        <a class="button instagram" href="https://www.instagram.com/tomonishintaku/" target="_blank" title="Click to share this post on Instagram"><i aria-hidden="true" class="fab fa-instagram"></i></a>
    </li>
    <li>
        <a class="button youtube" href="https://www.youtube.com/channel/UCDnt1pKShw7vYrD1JavHBkg" target="_blank" title="Click to share this post on YouTube"><i class="fab fa-youtube-square"></i></a>
    </li>
    <li>
        <a class="button linkedin" href="https://www.linkedin.com/in/tomonishintaku/" target="_blank" title="Click to share this post on LinkedIn"><i aria-hidden="true" class="fab fa-linkedin"></i></a>
    </li>
    <?php endif; 
        //Branch SNS for Japanese and English END
        ?>
        </ul>
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