<?php
if ( trim( $GLOBALS["stdata9"] ) !== '' ) {
	$topin_query = new WP_Query( 'post_type=page&p=' . $GLOBALS["stdata9"] );
	if ( $topin_query->have_posts() ) : while ( $topin_query->have_posts() ) : $topin_query->the_post(); ?>
		<div class="post">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	<?php
} else {
}