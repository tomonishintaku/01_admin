	<?php get_header(); ?>
<div id="content" class="clearfix single-page">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
				<div id="post-<?php the_ID(); ?>" <?php st_post_class(); ?>>
					<!--breadcrumb-->
					<div id="breadcrumb">
						<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="<?php echo home_url(); ?>" itemprop="url"> <span itemprop="title">ホーム</span>
							</a> &gt; </div>
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
									<span itemprop="title"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt; </div>
						<?php endforeach; ?>
					</div>
					<!--/breadcrumb-->
					<!--ループ開始 -->
					<?php if (have_posts()) : while (have_posts()) :
					the_post(); ?>
					<h1 class="entry-title"><?php the_title(); //タイトル ?></h1>
					<div class="blogbox <?php st_hidden_class(); ?>">
						<p>
							<span class="kdate"><!--i class="fa fa-calendar"></i-->
				                <time class="entry-date date updated" datetime="<?php the_time(DATE_W3C); ?>">
					                <?php the_time( 'Y/m/d' ); ?>
				                </time>
								<?php if ( $mtime = st_get_mtime( 'Y/m/d' ) ) {
									echo ' <i class="fa fa-repeat"></i>&nbsp; ', $mtime;
								} ?>
                			</span>
                		</p>
					</div>
					<?php the_content(); //本文 ?>
					<?php include ($_SERVER['DOCUMENT_ROOT'].'/inc/common/blog-profile.php'); //common pfofile unit for blog ?>
					<?php get_template_part('common_inc/support'); //支援のお願い ?>
			　　　　　<?php get_template_part('common_inc/blogs-link-list'); //各ブログへのリンク ?>

					<?php get_template_part( 'sns' ); //ソーシャルボタン読み込み ?>
					<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 5 ) ) : else : ?>
					<?php endif; ?>					
					<?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?>
					<?php get_template_part( 'st-rank' ); ?>
					<?php wp_link_pages(); ?>
					<!--p class="tagst"><i class="fa fa-tags"></i>&nbsp;-
						<?php the_category( ', ' ) ?>
						<?php the_tags( '', ', ' ); ?>
					</p-->
					<!-- /#wrapper -->
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
						</section>
						<!--ページナビ-->
						<div class="p-navi clearfix">
							<dl>
								<?php
								$prev_post = get_previous_post();
								if ( !empty( $prev_post ) ): ?>
									<dt><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>前の記事</dt>
									<dd>
										<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo $prev_post->post_title; ?></a>
									</dd>
								<?php endif; ?>
								<?php
								$next_post = get_next_post();
								if ( !empty( $next_post ) ): ?>
									<dt>次の記事<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></dt>
									<dd>
										<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo $next_post->post_title; ?></a>
									</dd>
								<?php endif; ?>
							</dl>
						</div>
						<?php endwhile; else: ?>
							<p>記事がありません</p>
						<?php endif; ?>
						<!--ループ終了-->
						
						<div id="search" style="margin: -2rem 0 2rem 0;">
	<form method="get" id="searchform" action="https://tomonishintaku.com/blog/">
		<label class="hidden" for="s">
					</label>
		<input type="text" placeholder="検索するテキストを入力" value="" name="s" id="s">
		<input type="image" src="https://tomonishintaku.com/blog/wp-content/themes/stinger7/images/search.png" alt="検索" id="searchsubmit">
	</form>
</div>
						
						<!--関連記事-->
						<?php get_template_part( 'kanren' ); ?>
					</aside>
				</div>
				<!--/post-->
			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<!--?php get_sidebar(); ?-->
</div>
<!--/#content -->
<?php get_footer(); ?>
