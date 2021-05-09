<?php if ( trim( $GLOBALS["stdata12"] ) == '' ) {
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
	}else{
	$twitter_name = '';
	}
?>

<?php
  $url_encode=urlencode(get_home_url());
  $title_encode=urlencode(get_bloginfo('name'));
?>

<div class="sns">
	<ul class="clearfix">
		<!--ツイートボタン-->
		<li class="twitter"> 
		<a target="_blank" href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=<?php echo $twitter_name ?>&tw_p=tweetbutton"><i class="fab fa-twitter"></i>
		<?php 
		if(function_exists('get_scc_twitter')) { 
			if( scc_get_share_twitter( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snstext">'.scc_get_share_twitter( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a>
		</li>

		<!--Facebookボタン-->      
		<li class="facebook">
		<a target="_blank" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>"><i class="fab fa-facebook-f"></i>
		<?php 
		if(function_exists('get_scc_facebook')) { 
			if( scc_get_share_facebook( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snstext">'.scc_get_share_facebook( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a>
		</li>

		<!--はてブボタン-->  
		<li class="hatebu">       
			<a href="http://b.hatena.ne.jp/entry/<?php home_url(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php bloginfo('name'); ?>"><i class="fa fa-hatena"></i><span style="font-weight:bold">B!</span>
<?php if(function_exists('get_scc_hatebu')) { 
			if( scc_get_share_hatebu( array( 'post_id' => 'home' ) ) !== 0){
				echo '<span class="snstext">'.scc_get_share_hatebu( array( 'post_id' => 'home' ) ).'</span>';
			}
		}?></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

		</li>

		<!--LINEボタン-->   
		<li class="line">
			<a target="_blank" href="http://line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>"><span class="snstext">LINEへ送る</span></a>
		</li>   
  
	</ul>
</div> 	

<?php
}
