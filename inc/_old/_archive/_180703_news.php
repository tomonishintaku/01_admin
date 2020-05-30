<h3 class="news_ttl" id="topicstitle">ニュース</h3>
   <div class="news-list">
<?php
  $arg = array(
             'posts_per_page' => 25, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'notice' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): ?>
    <ul>
  <?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); ?>
      <li><a href="<?php the_permalink(); ?>"><div class="image"><?php the_post_thumbnail('thumbnail'); ?></div><div class="text"><span class="date"><?php the_time( 'Y.m.d' ); ?></span><h4><?php the_title(); ?></h4></div></a></li>
<?php endforeach; ?>
    </ul>
<?php
  endif;
  wp_reset_postdata();
?>
</div>