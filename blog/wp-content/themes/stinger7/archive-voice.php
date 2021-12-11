<?php get_header(); ?>
    <style type="text/css">
    #head #logotype .blog {
        display: none;
    }
    #head #logotype .voice {
    display: block;
    }
    </style>
    
<div id="content" class="clearfix">
    <div id="contentInner">
        <main <?php st_text_copyck(); ?>>
            <article class="voice-list-wrap">
                <?php if (!is_paged()): ?>
                <?php get_template_part( 'news-st' ); //お知らせ ?>
                <?php get_template_part( 'st-topin' ); //固定記事挿入 ?>
                <?php endif; ?>
                <section>
                    <div class="kanren">
                        <section style="margin-bottom:3.5rem;">
                            <h2 style="margin-bottom:1rem;">*アートプロジェクトとしての音声ブログ
                            </h2>
                            <p>この音声ブログは新宅睦仁の人生その日々の限られた時間を用いたアートプロジェクトです。<strong>死ぬ前日あるいは死ぬ当日まで、毎日1回録音・公開</strong>いたします(各平均5分程度)。<br>
                                録音件数が多くなればなるほど＝積み重ねた時間が増えれば増えるほど、最期の日の録音、その声は、言葉は、たとえどんなにくだらない内容であったとしても、有無を言わさず他人になにかしら得も言われぬ感慨――災難に巻き込まれた人々の遺した最期の声に感ずるような――を与えることになるでしょう。
                            </p>
                        </section>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <!--VAR-->
                        <?php $audio_file = get_field('audio_file'); ?>
                        <?php $notes = get_field('notes'); ?>
                        <!--VAR END-->

                        <div class="no-thumbitiran">
                            <a href="<?php the_permalink(); ?>">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <div class="blog_info <?php st_hidden_class(); ?>">
                                <p>
                                    <!--i class="fa fa-clock-o"></i--><?php the_time( 'Y/m/d' ); ?>
                                    &nbsp;<span class="pcone"><i class="fa fa-tags"></i>
                                        <?php //the_category( ', ' ); ?>
                                        <?php //the_tags( '', ', ' ); ?>


                            <?php $postcat = get_the_category(); ?>
                            <?php $catid = $postcat[0]->cat_ID; ?>
                            <?php $allcats = array( $catid ); ?>
                            <?php
                        while ( !$catid == 0 ) {
                            $mycat = get_category( $catid );
                            $catid = $mycat->parent;
                            array_push( $allcats, $catid );
                        }
                        array_pop( $allcats );
                        $allcats = array_reverse( $allcats );
                        ?>
                            <?php foreach ( $allcats as $catid ): ?>
                                <a href="<?php echo get_category_link( $catid ); ?>" itemprop="url" class="cat-link">
                                    <span itemprop="title"><?php echo esc_html( get_cat_name( $catid ) ); ?></span></a><span class="separate">,</span> 
                                <?php endforeach; ?>

                                    </span>
                                </p>
                                            <!--p style="margin:1rem 0;font-weight:bold;color: #555;"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        <em>お便りを書こう！次回のブログで必ず読みます。</em><br>
                                        <a href="<?php comments_link(); ?>" style="text-decoration: underline;color: #1546a7;"><?php comments_number(); ?></a>
                                        </p-->
                            </div>
                            <!--section>
                                <audio src="<?php echo $audio_file; ?>" controls>
                                    <p>どうやらご使用のブラウザが古くて頑固な方で、音声の再生なんぞするものかとおっしゃっています。どなたか最近の方をお呼びしてはいかがでしょう。</p>
                                </audio>
                            </section-->
                            <a href="<?php the_permalink(); ?>">
                            <div class="smanone2">
                                <p><?php echo mb_substr(get_field('notes'),0,44). '...'; ?></p>
                            </div>
                          </a>
                        </div>

                        <?php endwhile;
                        else: ?>
                        <p>記事がありません</p>
                        <?php endif; ?>
                        <?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>
                    </div>

                </section>
            </article>
        </main>
    </div>
    <!-- /#contentInner -->
    <div id="side">
    <aside>
            <?php if ( is_active_sidebar('sidebar-10') ) : ?>
            <?php dynamic_sidebar('sidebar-10'); ?>
            <?php endif; ?>
            </aside>
</div>
</div>
<!-- /#content -->
<?php get_footer(); ?>