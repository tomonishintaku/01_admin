<header id="head">
<!--  HUMBURGER menu contents-->
	<div class="min-header">
	<h2 id="logotype"><a href="/" class="std"><img src="/images/common/site-logo.png" alt="料理、食をテーマに作品を制作する現代美術家/新宅睦仁/シンタクトモニ"></a><a href="/en<?php echo $_SERVER['PHP_SELF'] ?>" id="en-link" class="std"><img src="/images/common/head-lang_jp.png" alt="website-for-english"></a><a href="/blog/" class="blog"><img src="/images/common/head_pic_blog.png" alt="現代美術家/新宅睦仁/シンタクトモニのエッセイ・コラムのブログ"></a></h2>
	</div>
	<nav class="menu global-nav">
			<ul class="menu__list" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
				<li class="newsflash" itemprop="name">
					<?php require_once dirname(__FILE__).'/../blog/wp-load.php'; $page_id = 7229; $content = get_page($page_id); echo $content->post_content; ?>
				</li>
				<li itemprop="name">
					<a href="/news" itemprop="URL">ニュース</a>
				</li>
				<li itemprop="name">
					<a href="/about" itemprop="URL">経歴</a>
				</li>
				<li itemprop="name">
					<a href="/works" itemprop="URL">作品</a>
				</li>
				<li itemprop="name">
					<a href="/works/exhibition/" itemprop="URL">展覧会</a>
				</li>
				<li itemprop="name">
					<a href="/blog/amp" itemprop="URL">ブログ</a>
				</li>
				<li itemprop="name">
					<a href="/en/blog/amp" itemprop="URL">BLOG in English(毎日更新)</a>
				</li>
				<li itemprop="name">
					<a href="/contact" itemprop="URL">お問い合わせ</a>
				</li>
				<li class="sns" itemprop="name">
					<ul>
						<?php $sns = file_get_contents('https://tomonishintaku.com/inc/sns.php'); echo $sns; ?>
					</ul>
				</li>
				<li class="lang-switch" itemprop="name">
					<div class="lang-switch__left"><a class="common-nav en" href="/en<?php echo $_SERVER['PHP_SELF'] ?>" itemprop="URL">English</a><a class="blog-nav" href="/en/blog/">English</a></div> <div class="lang-switch__right"><span class="common-nav">Japanese</span><span class="blog-nav">Japanese</span></div>
				</li>
			</ul>
	</nav>
<!-- HUMBURGER menu contents END-->

<!-- DESKTOP menu -->
<?php $path = $_SERVER['SCRIPT_NAME']; if ( $path == '/index.html' ) { $h_tag = '<h1 class="std">食（料理・食文化）をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h1>';}else{ $h_tag = '<h2 class="std">食をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h2>';}?><?php echo $h_tag; ?>
<nav id="gnav" class="head__desktop">
	<ul class="clearfix" id="global_navi" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
		<li itemprop="name">
			<a href="/news" itemprop="URL">ニュース</a>
		</li>
		<li itemprop="name">
			<a href="/about" itemprop="URL">経歴</a>
		</li>
		<li itemprop="name">
			<a href="/works" itemprop="URL">作品</a>
		</li>
		<li itemprop="name">
			<a href="/exhibition/" itemprop="URL">展覧会</a>
		</li>
		<li itemprop="name">
			<a href="/blog/" itemprop="URL">ブログ</a>
		</li>
		<li itemprop="name">
			<a href="/contact" itemprop="URL">お問い合わせ</a>
		</li>
	</ul><a href="/news">
</nav>
<!-- DESKTOP menu END-->

	<div class="pc-line-news">
		<?php $page_id = 7229; $content = get_page($page_id); echo $content->post_content; ?>
	</div></a>

                <!-- HUMBURGER menu  -->
                <!-- //parts: (1) {_mobile-menu.scss}, (2) "HUMBURGER menu" section in {scripts.js}, (3) "HUMBURGER menu" section in {header.php}  -->
                <div class="hamburger" id="js-hamburger">
                    <span class="hamburger__line hamburger__line--1"></span>
                    <span class="hamburger__line hamburger__line--2"></span>
                    <span class="hamburger__line hamburger__line--3"></span>
                </div>
                <div class="black-bg" id="js-black-bg"></div>
                <!-- HUMBURGER menu  END-->
</header>