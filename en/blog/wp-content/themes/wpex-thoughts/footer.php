<div class="clear"></div><!-- /clear any floats -->
<?php include("../../inc/footer.php"); ?>

<script>
//共通jQuery本体を読み込んだ後に記述が必要のため以下に設置。
//添削前の英文アコーディオン用
	$(function(){
	$("#acMenu dt").on("click", function() {
	$(this).next().slideToggle();
	});
	});
</script>
	
<?php wp_footer(); ?>
</body>
</html>