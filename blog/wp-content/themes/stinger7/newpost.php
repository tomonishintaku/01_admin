<?php if ( $GLOBALS["stdata13"] === '' ) {
	if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
		echo '<h4 class="menu_underh2"> 最近の投稿</h4>';
		get_template_part( 'newpost-thumbnail-off' ); 
	}else{
		echo '<h4 class="menu_underh2"> 最近の投稿</h4>';
		get_template_part( 'newpost-thumbnail-on' ); 
	}
}
?>