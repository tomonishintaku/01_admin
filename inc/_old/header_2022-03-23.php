<?php require_once dirname(__FILE__).'/common/functions.php';?>
<header id="head" class="head">
    <!--  HUMBURGER menu contents-->
    <div class="min-header head__logo">
        <!-- Japanese logo set -->
        <h2 id="logotype" lang="ja">
            <a href="/" class="std"><img src="/images/common/site-logo.png"
                    alt="料理、食をテーマに作品を制作する現代美術家/新宅睦仁/シンタクトモニ"></a>
            <a href="/en<?php echo $_SERVER['PHP_SELF'] ?>" id="en-link" class="std"><img
                    src="/images/common/head-lang_jp.png" alt="website-for-english"></a>
            <a href="/blog/" class="blog"><img src="/images/common/head_pic_blog.png" title="むろん、どこにも行きたくない。" alt="現代美術家/新宅睦仁/シンタクトモニのエッセイ・コラムのブログ"></a>
            <a href="/blog/voice/" class="voice"><img src="/images/blog/voice-blog-logo.png" title="まだ、死んでない。" alt="現代美術家/新宅睦仁の音声ブログ"></a>
        </h2>
        <!-- English logo set -->

        <h2 id="logotype" lang="en">
            <a class="std" href="/en/"><img alt="Contemporary artist｜SHINTAKU Tomoni website"
                    src="/images/common/site-logo_en.png"></a>
            <a href="<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>" id="en-link"
                class="std"><img alt="website-for-Japanese" src="/images/common/head-lang_en.png"></a>
            <a href="/en/blog/" class="blog"><img alt="Contemporary artist｜SHINTAKU Tomoni website"
                    src="/images/common/head_pic_blog_en.png"></a>
        </h2>
    </div>

    <nav class="menu global-nav">
        <ul class="menu__list" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li class="newsflash" itemprop="name">
                <?php
                     //Branch WP load for Japanese and English
                	 $url = $_SERVER['REQUEST_URI'];
                    if(strstr($url,'/en/')==true):
				?>

                <div lang="en">
                    <?php require_once dirname(__FILE__).'../../en/blog/wp-load.php'; $page_id = 932; $content = get_page($page_id); echo $content->post_content; ?>

                </div>

                <?php else: ?>

                <div lang="ja">

                    <?php require_once dirname(__FILE__).'/../blog/wp-load.php'; $page_id = 7229; $content = get_page($page_id); echo $content->post_content; ?>

                </div>

                <?php endif; 

        //Branch WP load for Japanese and English END

        ?>
            </li>

            <li itemprop="name">
                <a href="/news" itemprop="URL" lang="ja">ニュース</a>
                <a href="/en/news/" itemprop="URL" lang="en">NEWS</a>
            </li>
            <li itemprop="name">
                <a href="/about" itemprop="URL" lang="ja">経歴</a>
                <a href="/en/about" itemprop="URL" lang="en">CV</a>
            </li>

            <li itemprop="name">
                <a href="/works" itemprop="URL" lang="ja">作品</a>
                <a href="/en/works" itemprop="URL" lang="en">WORKS</a>
            </li>
            <li itemprop="name">
                <a href="/works/exhibition/" itemprop="URL" lang="ja">展覧会</a>
                <a href="/en/exhibition/" itemprop="URL" lang="en">EXHIBITION</a>
            </li>
            <li itemprop="name">
                <a href="/blog/" itemprop="URL" lang="ja">ブログ</a>
                <a href="/en/blog/" itemprop="URL" lang="en">BLOG</a>
            </li>
            <li itemprop="name" lang="ja">
                <a href="/blog/voice/" itemprop="URL" lang="ja">音声ブログ(毎日更新)</a>
            </li>
            <li itemprop="name">
                <a href="/en/blog/" itemprop="URL" lang="ja">BLOG in English(毎日更新)</a>
                <a href="/blog/" itemprop="URL" lang="en">BLOG in Japanese</a>
            </li>
            <li itemprop="name">
                <a href="/contact" itemprop="URL" lang="ja">お問い合わせ</a>
                <a href="/en/contact" itemprop="URL" lang="en">CONTACT</a>
            </li>
            <li class="sns" itemprop="name">
                <ul>
                    <?php branchURL('/en/', $sns_en, $sns); /*This function from "/inc/common/functions.php"*/?>
                </ul>
            </li>
            <li class="lang-switch" itemprop="name" lang="ja">
                <div class="lang-switch__left"><a class="common-nav en" href="/en<?php echo $_SERVER['PHP_SELF'] ?>"
                        itemprop="URL">English</a><a class="blog-nav" href="/en/blog/">English</a></div>
                <div class="lang-switch__right"><span class="common-nav">Japanese</span><span
                        class="blog-nav">Japanese</span></div>
            </li>
            <li class="lang-switch" itemprop="name" lang="en">
                <div class="lang-switch__right">
                    <a href="<?php $str = $_SERVER['PHP_SELF']; $str = str_replace('/en', '', $str); echo $str;?>"
                        class="common-nav en">
                        Japanese</a><a class="blog-nav" href="/blog/">Japanese</a></div>
                <div class="lang-switch__right">
                    <span class="common-nav">English</span><span class="blog-nav">English</span>
                </div>
            </li>
        </ul>
    </nav>

    <!-- HUMBURGER menu contents END-->

    <!-- DESKTOP menu -->
    <!--div lang="ja">
        <?php $path = $_SERVER['SCRIPT_NAME']; if ( $path == '/index.html' ) { $h_tag = '<h1 class="std">食（料理・食文化）をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h1>';}else{ $h_tag = '<h2 class="std">食をテーマに、絵画やインスタレーションによる現代アートの制作活動を行う美術家/新宅睦仁</h2>';}?><?php echo $h_tag; ?>
    </div>

    <div lang="en">
        <?php $path = $_SERVER['SCRIPT_NAME']; if ( $path == '/en/index.html' ) { $h_tag = '<h1 class="std">Contemporary Artist Tomoni Shintaku. I am using food, cuisine and meal motifs as my theme for painting and installation.</h1>';}else{ $h_tag = '<h2 class="std">Contemporary Artist Tomoni Shintaku. My theme is food, cuisine and meal motifs for painting and installation.</h2>';}?><?php echo $h_tag; ?>
    </div-->

    <nav class="head__menu">
        <ul class="clearfix" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li itemprop="name">
                <a href="/news" itemprop="URL" lang="ja">ニュース</a>
                <a href="/en/news" itemprop="URL" lang="en">NEWS</a>
            </li>
            <li itemprop="name">
                <a href="/about" itemprop="URL" lang="ja">経歴</a>
                <a href="/en/about" itemprop="URL" lang="en">CV</a>
            </li>
            <li itemprop="name">
                <a href="/works" itemprop="URL" lang="ja">作品</a>
                <a href="/en/works" itemprop="URL" lang="en">WORKS</a>
            </li>
            <li itemprop="name">
                <a href="/exhibition/" itemprop="URL" lang="ja">展覧会</a>
                <a href="/en/exhibition/" itemprop="URL" lang="en">EXHIBITION</a>
            </li>
            <li itemprop="name">
                <a href="/blog/" itemprop="URL" lang="ja">ブログ</a>
                <a href="/en/blog/" itemprop="URL" lang="en">BLOG</a>
            </li>
            <li itemprop="name">
                <a href="/contact" itemprop="URL" lang="ja">お問い合わせ</a>
                <a href="/en/contact" itemprop="URL" lang="en">CONTACT</a>
            </li>
        </ul>
    </nav>

    <!-- DESKTOP menu END-->

    <!--a href="/news" lang="ja">
        <div class="pc-line-news">
            <?php/* $page_id = 7229; $content = get_page($page_id); echo $content->post_content; */?>
        </div>
    </a>
    <a href="/en/news" lang="en">
        <div class="pc-line-news" lang="en">
            <?php/* $page_id = 932; $content = get_page($page_id); echo $content->post_content; */?>
        </div>
    </a-->

    <!-- HUMBURGER menu  -->

    <?php /* parts: (1) {_mobile-menu.scss}, (2) "HUMBURGER menu" section in {scripts.js}, (3) "HUMBURGER menu" section in {header.php} */ ?>

    <div class="hamburger" id="js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
    </div>
    <div class="black-bg" id="js-black-bg"></div>

    <!-- HUMBURGER menu  END-->

    <!-- search-window for blog-->
    <section class="search-window">
    <div class="modal-button">
        <a class="js-modal-open" href=""><i class="fas fa-search"></i></a>
    </div>
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <p><?php get_search_form(); ?></p>
            <a class="js-modal-close" href=""><i class="fas fa-times"></i></a>
        </div><!--modal__inner-->
    </div><!--modal-->
    </section>
    <!-- search-window for blog END-->
</header>

