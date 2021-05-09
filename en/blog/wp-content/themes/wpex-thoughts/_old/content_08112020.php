<?php
/**
 * This file is used for your standard post entry
 * @package Thoughts WordPress Theme
 * @since 1.0
 * @author AJ Clarke : http://wpexplorer.com
 * @copyright Copyright (c) 2012, AJ Clarke
 * @link http://wpexplorer.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>
<?php wpex_hook_content_before(); ?>
<article <?php post_class('post-entry clearfix'); ?>> 
<?php wpex_hook_content_top(); ?> 

	<?php if( has_post_thumbnail() ) { ?>
		<div class="post-entry-thumbnail">
			<?php if ( !is_singular() ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php } ?>
			<img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_width' ), wpex_img( 'blog_width' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" />
			<?php if ( !is_singular() ) { ?>
				</a>
			<?php } ?>
		</div><!-- /blog-entry-thumbnail -->
	<?php } ?>
	<?php
	/**
	 * Single Posts
	 * @since 1.0
	 */
	if ( is_singular() && is_main_query() ) { ?>
	
		<div class="post-entry-text clearfix">
			<header>
				<h1><?php the_title(); ?></h1>
				<ul class="post-entry-meta">
					<li><?php echo get_the_date(); ?></li>
					<!--li>By: <?php the_author_posts_link(); ?></li-->
				</ul>
			</header>
			<div class="post-entry-content">
				<?php the_content(''); ?>	


<!--ADD Original Text Before Correction and Voice Record-->
<!--VAR-->
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $voice_record = get_field('voice_record'); ?>
<?php $notes = get_field('notes'); ?>
<!--VAR END-->


<style type="text/css">
.pale-text-area{
    background: #eee;
    padding: 1rem;
    margin-bottom: 1.5rem;
    color: #999;
}	
.pale-text-area h4{
    color: #999;
    margin-bottom: 0;
    font-size: 1rem;
}
.pale-text-area .title{
	display: block;
	margin-top: 1rem;
}

.in-japanese{
	font-size: 0.8rem;
    color: #777;
}

.download-area h4{
 margin: 0 0 1rem 0;
 font-size: 1rem;

}

.download-area__main{
	border:1px solid #ccc;
	padding: 1rem;
	margin-bottom: 2rem;
}

.download-area__notes{
	font-size: 0.8rem;
    color: #777;
    line-height: 1.25rem;
}
}

/*toggle*/
#acMenu dt{
display:block;
cursor:pointer;
}
#acMenu dd{
background:#f2f2f2;
display:none;
margin: 0;
padding-bottom: 1.5rem;
}

</style>
<script>
$(function(){
$("#acMenu dt").on("click", function() {
$(this).next().slideToggle();
});
});
</script>
<!--article id="acMenu" class="pale-text-area">
	<dl>
 <?php if(empty($title)):?>
        <?php else:?>
	        <dt><h4><i class="fa fa-caret-down" aria-hidden="true"></i> The original text before the correction</h4></dt>
			<dd><span class="title"><?php echo $title; ?></span>
				<?php echo $text; ?></dd>
        <?php endif;?>
     </dl>
</article-->

<article class="download-area">
 <?php if(empty($voice_record)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
        <section class="download-area__main">
	        <h4>You can listen to today's English conversation</h4>
	        <p class="download-area__notes">冒頭の5分はその日のあれこれを日本語で、その後の25分はオンライン英会話の録音です。</p> 
					<audio src="<?php echo $voice_record; ?>" controls>
					<p>Your browser does not support the audio element.</p>
					</audio>
					 <p>Recorded on yesterday of <?php the_date(); ?></p> 
		</section>
        <?php endif;?><!--END Conditional branch VAR-->
         <?php if(empty($notes)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <h4>Notes in Japanese</h4>
            <p class="in-japanese"><?php echo $notes; ?></p>
        <?php endif;?><!--END Conditional branch VAR-->
</article>


<?php
  echo do_shortcode('[starbox]');
?>

			</div><!-- /post-entry-content -->
			<footer class="post-entry-footer">
				<?php get_search_form(); ?>

				<p><?php _e('Categorized','wpex'); ?>: <?php the_category(' - '); ?></p>
				<?php the_tags( '<p>'. __('Tagged','wpex') .': ',' - ', '</p>'); ?>
			</footer><!-- /post-entry-footer -->
			<?php comments_template(); ?>
		</div><!-- /post-entry-text -->
	<?php
	/**
	 * Entries
	 * @since 1.0
	 */
	} else { ?>
	
		<div class="post-entry-text clearfix">
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<ul class="post-entry-meta">
					<li><?php echo get_the_date(); ?></li>
					<li>By: <?php the_author_posts_link(); ?></li>
				</ul>
			</header>
			<div class="post-entry-content">
				<?php if ( '1' == get_theme_mod( 'wpex_blog_excerpt', '1' ) ) {
					the_excerpt();
					} else {
						the_content('');
					} ?>
			</div><!-- /post-entry-content -->
			<footer class="post-entry-footer">
				<?php if(comments_open()) { ?><?php comments_popup_link(__('0 Comments', 'wpex'), __('1 Comment', 'wpex'), __('% Comments', 'wpex'), 'comments-link' ); ?><?php } ?><span class="wpex-icon-minus"></span><a href="<?php the_permalink(); ?>" title="<?php _e('read more','wpex'); ?>"><?php _e('read more','wpex'); ?> &rarr;</a>
			</footer><!-- /post-entry-footer -->
		</div><!-- /post-entry-text -->
	<?php } ?>
<?php wpex_hook_content_bottom(); ?>
</article><!-- /post-entry -->
<?php wpex_hook_content_after(); ?>
