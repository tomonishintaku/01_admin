<?php 
	if( ( is_single() ) && ( isset($GLOBALS['stdata40']) && $GLOBALS['stdata40'] === 'yes' ) ){ //投稿記事の場合
		if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
			get_template_part( 'popular-thumbnail-off' ); 
		}else{
			get_template_part( 'popular-thumbnail-on' ); 
		}
	}elseif( ( is_page() ) && ( isset($GLOBALS['stdata41']) && $GLOBALS['stdata41'] === 'yes' ) ){ //固定記事の場合
		if ( isset($GLOBALS['stdata5']) && $GLOBALS['stdata5'] === 'yes' ) {
			get_template_part( 'popular-thumbnail-off' ); 
		}else{
			get_template_part( 'popular-thumbnail-on' ); 
		}
	}
?>