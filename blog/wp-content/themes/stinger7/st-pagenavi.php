<div class="page-pagination">
	<div class="page-pagination-inner clearfix">
	<?php $args = array(
		'end_size'           => 1,
		'mid_size'           => 1,
		'prev_next'          => True,
		'prev_text'          => __('&laquo; 前へ' , 'affinger'),
		'next_text'          => __('次へ &raquo;' , 'affinger'),
		'type'               => 'plain',
		);
	echo paginate_links( $args ); ?>
	</div>
</div>