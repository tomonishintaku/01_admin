<div id="head"><h2 id="logotype"><a href="/" class="std"><img src="/images/common/site-logo.png" alt="料理、食をテーマに作品を制作する現代美術家/新宅睦仁/シンタクトモニ"></a><a href="/en<?php echo $_SERVER['PHP_SELF'] ?>" id="en-link" class="std"><img src="/images/common/head-lang_jp.png" alt="website-for-english"></a><a href="/blog/" class="blog"><img src="/images/common/head_pic_blog.png" alt="現代美術家/新宅睦仁/シンタクトモニのエッセイ・コラムのブログ"></a></h2><div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Open Menu</button><ul class="dl-menu"><!--li class="home"><a href="/">ホーム</a><a href="/en<?php echo $_SERVER['PHP_SELF'] ?>">ENGLISH<br>Version</a></li--><li class="news"><a href="/news">新着情報</a>

<?php require_once( '/home/users/1/sub.jp-bijutsu4/web/admin/blog/wp-load.php' ); $page_id = 7229; $content = get_page($page_id); echo $content->post_content; ?>



</li><li><a href="/about">経歴</a></li><li><a href="/works">作品</a></li><li><a href="/works/exhibition/">展覧会</a></li><li><a href="/blog/amp/">ブログ</a></li><li><a href="/contact">お問い合わせ</a></li><li class="sns"><a href="https://www.instagram.com/tomonishintaku/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a><a href="https://twitter.com/tomonishintaku" target="_blank"><i class="fab fa-twitter-square"></i></a><a href="https://www.facebook.com/tomoni.shintaku" target="_blank"><i class="fab fa-facebook-square"></i></a></li><li class="mobile-menu-bnr"><?php $bnr = file_get_contents('https://tomonishintaku.com/inc/bnr.php'); echo $bnr; ?></li>
</ul></div><?php $path = $_SERVER['SCRIPT_NAME']; if ( $path == '/index.html' ) { $h_tag = '<h1 class="std">食（料理・食文化）をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h1>';}else{ $h_tag = '<h2 class="std">食をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h2>';}?><?php echo $h_tag; ?></div><div id="gnav"><ul id="global_navi" class="clearfix"><li><a href="/news">新着情報</a></li><li><a href="/about">経歴</a></li><li><a href="/works">作品</a></li><li><a href="/works/exhibition/">展覧会</a></li><li><a href="/blog/">ブログ</a></li><li><a href="/contact">お問い合わせ</a></li></ul></div>



<style type="text/css">
#latest-text, #latest-text a, #latest-text span {
font-size:12px;
color: #fff !important;
display: inline !important;
padding: 0 !important;
font-weight: normal;
line-height: 1em;
	}
 #latest-text a{
position: relative;
}
	#latest-text{
    vertical-align: middle;
    position: absolute;
    top: 50%;
    left: 65%;
    width: 65%;
 transform: translateY(-50%) translateX(-50%);
  -webkit- transform: translateY(-50%) translateX(-50%);
}
.dl-menuwrapper .news {
display: flex;
}

.dl-menuwrapper .news a {
white-space: nowrap;
}

</style>