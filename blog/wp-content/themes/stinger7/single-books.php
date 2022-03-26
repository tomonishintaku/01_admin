	<?php get_header(); ?>

<style type="text/css">
	

.entry-title {
    font-size: 2.5rem;
    margin-top: 2rem;
	}
.entry-title .entry-title__book-info{
	font-size: 1rem;
	display: block;
    margin-top: 1rem;
}
	.entry-content .book-info {
    text-align: center;
    white-space: nowrap;
    margin: 0;
}
.entry-content .book-info__star span {
    color: #fb0;
    padding-left: 0.5em;
}
.entry-content .post-outline__reading_time {
    margin-top: 1rem;
    text-align: center;
    padding: 0.3rem 0 0.3rem 0.5rem;
}
.entry-content .post-outline__summary strong {
	font-size: 0.8rem;
}
.entry-content .post-outline__summary p {
	    font-size: 1.25rem;
    margin-bottom: 0;
}
.entry-content .post-outline__summary {
    position: relative;
    margin: 0 0 2.5rem;
    padding: 0 0 0.5rem;
    background: #fff;
    font-size: 1.25rem;
    border-bottom: 1px solid #c71585;
}


.entry-content .post-outline__summary:after, .entry-content .post-outline__summary:before {
    content: "";
    border: 14px solid transparent;
    border-top-color: transparent;
    position: absolute;
    left: 50%;
    margin-left: -14px;
}
.entry-content .post-outline__summary:before {
    content: "";
    border: 14px solid transparent;
    border-top-color: transparent;
    position: absolute;
    left: 50%;
    margin-left: -14px;
}
.entry-content .post-outline__summary:before {
    border-top-color: #c71585;
    bottom: -28px;
}
.entry-content .post-outline__summary:after {
    border-top-color: #fff;
    bottom: -27px;
}

</style>

	<div id="content" class="clearfix single-page">
	    <div id="contentInner">
	        <main <?php st_text_copyck(); ?>>
	            <article>
	                <div id="post-<?php the_ID(); ?>" <?php st_post_class(); ?>>
	                    <!--breadcrumb-->
	                    <div id="breadcrumb">
	                        <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	                            <a href="<?php echo home_url(); ?>" itemprop="url"> <span itemprop="title">ホーム</span>
	                            </a> &gt;
	                        </div>
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
	                        <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	                            <a href="<?php echo get_category_link( $catid ); ?>" itemprop="url">
	                                <span itemprop="title"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a>
	                            &gt;
	                        </div>
	                        <?php endforeach; ?>
	                    </div>
	                    <!--/breadcrumb-->
	                    <!--ループ開始 -->
	                    <?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					
					<?php //CUSTOM FIELD VARS ?>
					<?php $image = get_field('image'); ?>
					<?php $book_star = get_field('book_star'); ?>
					<?php $amazon_url = get_field('amazon_url'); ?>
					<?php $author = get_field('author'); ?>
					<?php $publisher = get_field('publisher'); ?>
					<?php $summary = get_field('summary'); ?>
					<?php $price = get_field('price'); ?>
					<?php $no_price = get_field('no_price'); ?>
					<?php $type = get_field('type'); ?> 
					<?php $reread = get_field('reread'); ?>
					<?php $text = get_field('text'); ?>
					<?php $status = get_field('status'); ?>
					<?php //CUSTOM FIELD VARS END?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost"
						itemtype="http://schema.org/BlogPosting">
					
						<header class="article-header entry-header">
							<!--aside class="article-tag">
								<?php printf( get_the_category_list(', ') ); ?>
							</aside-->
							<h1 class="entry-title single-title" itemprop="headline" rel="bookmark">
								<?php the_title(); ?>
								<?php if(empty($author || $publisher)):?>
								<!-- none -->
								<?php else:?>
								<span class="entry-title__book-info">(<?php echo $author; ?>/<?php echo $publisher; ?>)</span>
								<?php endif;?>
							</h1>
					
							<p class="byline entry-meta vcard">
								<?php $locale = get_locale();
					if ('en_US' == $locale ) { ?>
					
								<?php printf( __( '<time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> <span class="d-block d-md-inline">by <span class="author"><a href="/en/about">Tomoni Shintaku</a></span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( null ) )); ?>
								(Artist / WEB designer)</span>
					
								<?php } else { ?>
					
								<?php printf( __( '<time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> <span class="d-block d-md-inline">by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?></span>
					
								<?php } ?>
					
							</p>
					
						</header> <?php // end article header ?>
					
						<section class="entry-content cf" itemprop="articleBody">
					
							<?php if( get_the_post_thumbnail() ) : //main image area ?>
							<div class="post-thumbnail mb-3">
								<?php the_post_thumbnail(array(1200, 630, true)); ?>
								<?php else:?>
					
								<?php if(empty($image)):?>
								<!-- none -->
								<?php else:?>
								<section class="type-post__main-image">
									<a href="<?php echo $amazon_url; ?>" target="_blank" rel="noopener noreferrer"><img
											src="<?php echo $image; ?>" title="<?php the_title(); ?>"
											alt="書籍<?php the_title(); ?>(<?php echo $author; ?>/<?php echo $publisher; ?>)」の表紙画像"></a>
								</section>
								<?php endif;?>
					
								<?php endif; //main image area END ?>
					
								<section class="book-info">
									<?php if(empty($author)):?>
									<!--none-->
									<?php else:?>
									<?php if(empty($price)):?>
									<!--none-->
									<p class="book-info__price"><span class="px-2"><?php echo $no_price; ?></span></p>
									<?php else:?>
									<p class="book-info__price">購入価格:<span class="px-2"><?php echo $price; ?></span>円</p>
									<?php endif;?>
									<p class="book-info__star">評価:<span><?php echo $book_star; ?></span></p>
									<?php endif;?>
								</section>
								<section class="post-outline">
									<p class="post-outline__reading_time"><i class="fa fa-eye"></i> <?php my_reading_time(); ?></p>
									<?php if(empty($summary)):?>
									<!--none-->
									<?php else:?>
									<aside class="post-outline__summary">
										<strong>20文字でまとめると…</strong>
										<p><?php echo $summary; ?></p>
									</aside>
									<?php endif;?>
								</section>
								<?php if( get_field('type') == "ForwardMain"): //change 'reread' generate place?>
								<?php require_once('formats-inc/reread.php');?>
								<?php endif; //change 'reread' generate place END ?>
					
								<?php
										the_content();
										wp_link_pages( array(
										  'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
										  'after'       => '</div>',
										  'link_before' => '<span>',
										  'link_after'  => '</span>',
										) );
									  ?>
								<?php if( has_tag('no_comment') ) : //if an article has "no_comment" tag will display fixed format/template ?>
								<p><?php the_time('Y年m月d日');?>に読了。</p>
								<p>感想なし。</p>
								<?php endif; ?>
					
								<?php if(empty($reread)):?>
								<!--none-->
								<?php else:?>
					
								<?php if( get_field('type') == "AfterMain"): //change 'reread' generate place?>
								<?php require_once('formats-inc/reread.php');?>
								<?php endif; //change 'reread' generate place END ?>
					
								<?php endif;?>
								<!--END Conditional branch VAR-->
					
								<footer class="article-footer">
					
									<?php printf( __( '記事カテゴリー', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>
					
								</footer> <?php // end article footer ?>
						</section> <?php // end article section ?>
					
						<?php //comments_template(); ?>
					
					</article> <?php // end article ?>
					
	                <!--ページナビ-->
	                <div class="p-navi clearfix">
	                    <dl>
	                        <?php
								$prev_post = get_previous_post();
								if ( !empty( $prev_post ) ): ?>
	                        <dt><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>前の記事</dt>
	                        <dd>
	                            <a
	                                href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo $prev_post->post_title; ?></a>
	                        </dd>
	                        <?php endif; ?>
	                        <?php
								$next_post = get_next_post();
								if ( !empty( $next_post ) ): ?>
	                        <dt>次の記事<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></dt>
	                        <dd>
	                            <a
	                                href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo $next_post->post_title; ?></a>
	                        </dd>
	                        <?php endif; ?>
	                    </dl>
	                </div>

	                        <!--END Conditional branch VAR-->
		                </section>


	                <section style="margin-top:0;">
	                    <aside>
	                        <?php
								//コメント
								if ( ( $GLOBALS["stdata6"] ) === '' ) { ?>
	                        <?php if ( comments_open() || get_comments_number() ) {
										comments_template();
									} ?>
	                        <?php } ?>
	                    </aside>
	                    					<?php get_template_part('common_inc/support'); //支援のお願い ?>
			　　　　　<?php get_template_part('common_inc/blogs-link-list'); //各ブログへのリンク ?>

	                </section>
	                <?php endwhile; else: ?>
	                <p>記事がありません</p>
	                <?php endif; ?>
	                <!--ループ終了-->
	                						<!--関連記事-->
						<?php get_template_part( 'kanren' ); ?>

	                </aside>
	                <!--/post-->
	            </article>
	        </main>
	    </div>
	    <!-- /#contentInner -->
	    <!--?php get_sidebar(); ?-->
	</div>
	<!--/#content -->
	<?php get_footer(); ?>