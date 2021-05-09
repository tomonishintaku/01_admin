<div class="kanren">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="no-thumbitiran">
			<a href="<?php the_permalink(); ?>"><h3>
			<?php the_title(); ?>
			</h3>
</a>
			<div class="blog_info <?php st_hidden_class(); ?>">
				<p><!--i class="fa fa-clock-o"></i--><?php the_time( 'Y/m/d' ); ?>
					&nbsp;<span class="pcone"><i class="fa fa-tags"></i>
					<?php the_category( ', ' ); ?>
					<?php the_tags( '', ', ' ); ?>
<!--a href="<?php comments_link(); ?>">
　<?php comments_number(); ?>
</a-->
				</span></p>
			</div>
			<div class="smanone2">
					<a href="<?php the_permalink(); ?>">
				<?php the_excerpt(); //抜粋文 ?>
							</a>
			</div>
		</div>

	<?php endwhile;
	else: ?>
		<p>記事がありません</p>
	<?php endif; ?>
</div>
