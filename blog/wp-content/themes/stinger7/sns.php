<?php if ( trim( $GLOBALS["stdata12"] ) == '' ) {
	if ( trim( $GLOBALS["stdata25"] ) !== '' ) {
		$twitter_name = esc_attr( $GLOBALS["stdata25"] );
	}else{
		$twitter_name = '';
	}

?>
	<?php
		$url_encode=urlencode(get_permalink());
		$title_encode=urlencode(get_the_title());
	?>

	<div class="sns">
	<ul class="sns__share-buttons clearfix">
		<!--ツイートボタン-->
		<li class="twitter"> 
		<a target="_blank" href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=<?php echo $twitter_name ?>&tw_p=tweetbutton"><i class="fab fa-twitter"></i><?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':'<span class="snstext">'.scc_get_share_twitter().'</span>'; ?></a>
		</li>

		<!--Facebookボタン-->      
		<li class="facebook">
		<a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" target="_blank"><i class="fab fa-facebook-f"></i>
		<?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':'<span class="snstext">'.scc_get_share_facebook().'</span>'; ?></a>
		</li>

		<!--はてブボタン-->  
		<li class="hatebu">       
			<a href="//b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="<?php the_title(); ?>"><i class="fa fa-hatena"></i><span style="font-weight:bold">B!</span>
			<?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':'<span class="snstext"><span class="hatebno">'.scc_get_share_hatebu().'</span></span>';
 ?></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

		</li>

		<!--LINEボタン-->   
		<li class="line">
		<a href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank"><span class="snstext">LINEへ送る</span></a>
		</li>     
	</ul>

	</div> 

	<?php
}
