<div class="kanren">
	<?php
	$categories = get_the_category( $post->ID );
	$category_ID = array();
	foreach ( $categories as $category ):
		array_push( $category_ID, $category->cat_ID );
	endforeach;
	$args = array(
		'post__not_in' => array( $post->ID ),
		'posts_per_page' => 5,
		'category__in' => $category_ID,
		'orderby' => 'rand',
	);
	$st_query = new WP_Query( $args ); ?>
	<?php
	if ( $st_query->have_posts() ): ?>
		<?php
		while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
			
		<div class="no-thumbitiran">
			<h5><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			</a></h5>
			<div class="blog_info <?php st_hidden_class(); ?>">
				<p><!--i class="fa fa-clock-o"></i-->
					<?php the_time( 'Y/m/d' ); ?>
					&nbsp;<span class="pcone"><i class="fa fa-tags"></i>
					<?php the_category( ', ' ); ?>
					<?php the_tags( '', ', ' ); ?>
<!--a href="<?php comments_link(); ?>">
　<?php comments_number(); ?>
</a-->
				</span></p>
			</div>
			<div class="smanone2">
				<?php the_excerpt(); //抜粋文 ?>
			</div>
		</div>

		<?php endwhile; ?>
	<?php else: ?>
		<p>関連記事はありませんでした</p>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>