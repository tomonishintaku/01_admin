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
	                    <h1 class="entry-title"><?php the_title(); //タイトル ?></h1>
	                    <p>
	                        <span class="kdate">
	                            <!--i class="fa fa-calendar"></i-->
	                            <time class="entry-date date updated" datetime="<?php the_time(DATE_W3C); ?>">
	                                <?php the_time( 'Y/m/d' ); ?>
	                            </time>
	                            <?php if ( $mtime = st_get_mtime( 'Y/m/d' ) ) {
									echo ' <i class="fa fa-repeat"></i>&nbsp; ', $mtime;
								} ?>
	                        </span>
	                    </p>

	                    <?php $audio_file = get_field('audio_file'); ?>
	                    <?php $notes = get_field('notes'); ?>
	                    <!--VAR END-->
	                    <section class="voice-wrap">
	                        <?php if(empty($audio_file)):?>
	                        <!--none-->
	                        <?php else:?>
	                        <?php endif;?>
	                        <!--END Conditional branch VAR-->


<!-- ACF Definitions -->
<?php $statusSelect = get_field('statusSelect'); ?>
<?php $bg_color = get_field('bg_color'); ?>
<?php $date_ja = get_field('date_ja'); ?>
<?php $date_en = get_field('date_en'); ?>
<?php $main_image = get_field('main_image'); ?>
<?php $title_ja = get_field('title_ja'); ?>
<?php $title_en = get_field('title_en'); ?>
<?php $costs = get_field('costs'); ?>
<?php $site_ja = get_field('site_ja'); ?>
<?php $site_en = get_field('site_en'); ?>
<?php $main_dish_ja = get_field('main_dish_ja'); ?>
<?php $main_dish_en = get_field('main_dish_en'); ?>
<?php $side_dishes = get_field('side_dishes'); ?>
<?php $description_ja = get_field('description_ja'); ?>
<?php $description_en = get_field('description_en'); ?>
<?php $ingredients = get_field('ingredients'); ?>
<?php $howto = get_field('howto'); ?>
<?php $memo_ja = get_field('memo_ja'); ?>
<?php $memo_en = get_field('memo_en'); ?>
<?php $receipt_image = get_field('receipt_image'); ?>
<?php $cost_no_convert = get_field('cost_no_convert'); ?>


<div class="hash">
<span class="common"><?php echo $statusSelect; ?></span>
<span class="common"><?php echo $bg_color; ?></span>
<span class="ja"><?php echo $date_ja; ?></span>
<span class="en"><?php echo $date_en; ?></span>
<span class="common"><?php echo $main_image; ?></span>
<span class="ja"><?php echo $title_ja; ?></span>
<span class="en"><?php echo $title_en; ?></span>
<?php echo $costs; ?></span>	
<span class="ja"><?php echo $site_ja; ?></span>
<span class="en"><?php echo $site_en; ?></span>
<span class="ja"><?php echo $main_dish_ja; ?></span>
<span class="en"><?php echo $main_dish_en; ?></span>
<?php echo $side_dishes; ?></span>
<span class="ja"><?php echo $description_ja; ?></span>
<span class="en"><?php echo $description_en; ?></span>
<?php echo $ingredients; ?></span>
<?php echo $howto; ?></span>
<span class="ja"><?php echo $memo_ja; ?></span>
<span class="en"><?php echo $memo_en; ?></span>
<span class="common"><?php echo $receipt_image; ?></span>
<span class="common"><?php echo $cost_no_convert; ?></span>
</div>



<script>
	
// URLのパラメータを取得
var urlParam = location.search.substring(1);
 
// URLにパラメータが存在する場合
if(urlParam) {
  // 「&」が含まれている場合は「&」で分割
  var param = urlParam.split('&');
 
  // パラメータを格納する用の配列を用意
  var paramArray = [];
 
  // 用意した配列にパラメータを格納
  for (i = 0; i < param.length; i++) {
	var paramItem = param[i].split('=');
	paramArray[paramItem[0]] = paramItem[1];
  }
 
  // パラメータidがosakaかどうかを判断する
  if (paramArray.id == 'en') {
	$('.ja').append('<p>大阪です</p>');
  } else {
	$('.en').append('<p>大阪ではありません</p>');
  }
}

</script>





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

	            
					    </section>




	                <!--ページナビ-->
	                <div class="p-navi clearfix">
	                    <dl>
	                        <?php
								$prev_post = get_previous_post();
								if ( !empty( $prev_post ) ): ?>
	                        <dt><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>前のレシピ</dt>
	                        <dd>
	                            <a
	                                href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo $prev_post->post_title; ?></a>
	                        </dd>
	                        <?php endif; ?>
	                        <?php
								$next_post = get_next_post();
								if ( !empty( $next_post ) ): ?>
	                        <dt>次のレシピ<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></dt>
	                        <dd>
	                            <a
	                                href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo $next_post->post_title; ?></a>
	                        </dd>
	                        <?php endif; ?>
	                    </dl>
	                </div>
	                <?php endwhile; else: ?>
	                <p>記事がありません</p>
	                <?php endif; ?>
	                <!--ループ終了-->
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