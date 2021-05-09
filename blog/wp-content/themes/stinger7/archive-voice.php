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
                            <div class="blog_info <?php st_hidden_class(); ?>">
                                <p>
                                    <!--i class="fa fa-clock-o"></i--><?php the_time( 'Y/m/d' ); ?>
                                    &nbsp;<span class="pcone"><i class="fa fa-tags"></i>
                                        <?php the_category( ', ' ); ?>
                                        <?php the_tags( '', ', ' ); ?>
                                    </span>
                                </p>
                                </a>
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
                                <p><?php echo mb_substr(get_field('notes'),0,20). '...'; ?></p>
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