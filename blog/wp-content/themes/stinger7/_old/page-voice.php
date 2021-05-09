<?php get_header(); ?>

<div id="content" class="clearfix">
    <div id="contentInner">
        <main <?php st_text_copyck(); ?>>

<?php
$args = array('post_type' => 'voice',
              'ignore_sticky_posts' => 1, 
              'orderby' => 'date', 
              'order' => 'DESC', 
              'posts_per_page' => 4
             );
$post_list = get_posts($args);

if ($post_list) {
  foreach ($post_list as $post) : setup_postdata ($post);
?>

<article class="blog-item">
  <a  href="<?php the_permalink() ?>">
    <?php $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, 'large');
    ?>
    <div class="img-wrap" style="background-image:url(<?php echo $image_url[0]; ?>)"></div>
    <h2><?php the_title(); ?></h2>
  </a>
</article>

<?php endforeach; wp_reset_query();}; ?>


        </main>
    </div>
    <!-- /#contentInner -->
    <?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>