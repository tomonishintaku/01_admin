<?php use AMPforWP\AMPVendor\AMP_HTML_Utils;
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<?php global $redux_builder_amp;  ?>
<!doctype html>
<html amp <?php echo AMP_HTML_Utils::build_attributes_string( $this->get( 'html_tag_attributes' ) ); ?>>
<head>
	<meta charset="utf-8">
	<?php do_action('amp_experiment_meta', $this); ?>
    <link rel="dns-prefetch" href="//cdn.ampproject.org">
	<?php do_action( 'amp_post_template_head', $this ); ?>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
	</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><link href="/js/hrm/headroom.css" rel="stylesheet" type="text/css">
</head>
<?php
	$lightbox = '';
    if( false == ampforwp_get_setting('ampforwp-amp-img-lightbox') ){
    	$lightbox = 'data-amp-auto-lightbox-disable ';
	}?>
<body <?php echo esc_attr($lightbox); ?><?php ampforwp_body_class('design_3_wrapper');?> > 
<?php do_action('ampforwp_body_beginning', $this); ?>
<?php $this->load_parts( array( 'header-bar' ) ); ?>

<?php do_action( 'ampforwp_after_header', $this ); ?>
<main>
	<article class="amp-wp-article">
		<?php do_action('ampforwp_post_before_design_elements') ?>
		<?php $this->load_parts( apply_filters( 'ampforwp_design_elements', array( 'empty-filter' ) ) ); ?>
		<?php do_action('ampforwp_post_after_design_elements') ?>
		<?php if(true==ampforwp_get_setting('ampforwp-design3-recent-posts') && !checkAMPforPageBuilderStatus(get_the_ID()) ) {?>


<!--ADD Original Text Before Correction and Voice Record-->
<!--VAR-->
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $voice_record = get_field('voice_record'); ?>
<!--VAR END-->


<style type="text/css">
.pale-text-area{
    background: #eee;
    padding: 1rem 1rem 0.1rem 1rem;
    margin-bottom: 1.5rem;
    color: #999;
    font-size: 1rem;
}	
.pale-text-area h4{
    color: #999;
}
.pale-text-area .title{
	display: block;
}
</style>

<article class="pale-text-area">
 <?php if(empty($title)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <h4>Original Text Before Correction</h4>
			<p><span class="title"><?php echo $title; ?></span>
				<?php echo $text; ?></p>
        <?php endif;?><!--END Conditional branch VAR-->
</article>

<article class="download-area">
 <?php if(empty($voice_record)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <h4>You can hear today's English conversation</h4>
            <p><a href="<?php echo $voice_record; ?>"><i class="fa fa-file-audio" aria-hidden="true"></i> Recorded on <?php the_time( get_option( 'date_format' ) ); ?></a></p>
        <?php endif;?><!--END Conditional branch VAR-->
</article>



					<div class="amp-wp-content relatedpost recentpost">
						 <div class="rp">
						<span class="related-title"><?php echo esc_attr(ampforwp_translation(ampforwp_get_setting('amp-translator-recent-text'), 'Recent Posts' )); ?></span>
						<ol class="clearfix">
						<?php 
						$number_of_posts = 6;
						$rcp = ampforwp_get_setting('ampforwp-design3-number-of-recent-posts');
						if(!empty($rcp) ){
							$number_of_posts = (int) ampforwp_get_setting('ampforwp-design3-number-of-recent-posts');
						}
						while( amp_loop('start', array( 'posts_per_page' => $number_of_posts ) ) ): ?>
							<li class="<?php if ( ampforwp_has_post_thumbnail() ) { echo'has_related_thumbnail'; } else { echo 'no_related_thumbnail'; } ?>">
								<div class="related-post_image">
	                            <a href="<?php echo esc_url( amp_loop_permalink() ); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php if ( ampforwp_has_post_thumbnail() ) { 
							$thumb_url 		= ampforwp_get_post_thumbnail();
							$thumb_width  	= ampforwp_get_post_thumbnail('width');
							$thumb_height 	= ampforwp_get_post_thumbnail('height');
							if( $thumb_url && true == ampforwp_get_setting('amforwp-design3-recentpost-image-switch') ) { ?>
				            	<amp-img src="<?php echo esc_url( $thumb_url ); ?>" width=<?php echo esc_attr($thumb_width); ?> height=<?php echo esc_attr($thumb_height); ?> layout="responsive"></amp-img>
							<?php } 
							}?>
	                  		</a>
	                  	</div>
			                <div class="related_link">
			                    <?php $title = get_the_title(); ?>
			                    <a href="<?php echo esc_url( amp_loop_permalink() ); ?>" title="<?php echo esc_html( $title ); ?>" ><?php the_title(); ?></a>
			                    <?php
                                   if( true == ampforwp_get_setting('amforwp-design3-recentpost-excerpt-switch') ){
                                        $excep_len = 15;
                                        if(ampforwp_get_setting('amp-design3-recentpost-excerpt-len') && is_numeric(ampforwp_get_setting('amp-design3-recentpost-excerpt-len'))){
                                            $excep_len = intval(ampforwp_get_setting('amp-design3-recentpost-excerpt-len'));
                                        }
                                        amp_loop_excerpt($excep_len);
                                    }
                                ?>
			                    <?php 
			                    if (true == ampforwp_get_setting('amforwp-design3-recentpost-date-switch') ) {
			                    		amp_loop_date();
			                   		 }
			                     ?>
			                </div>
		            		</li>
						<?php endwhile; amp_loop('end');  ?>
					</div>
				</div>
			<?php } ?>
	</article>
</main>
<?php do_action( 'amp_post_template_above_footer', $this ); ?>
<?php $this->load_parts( array( 'footer' ) ); ?>
<?php do_action( 'amp_post_template_footer', $this ); ?>
</body>
</html>