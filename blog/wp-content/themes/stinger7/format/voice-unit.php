	                    <section class="voice-wrap">
	                        <?php if(empty($audio_file)):?>
	                        <!--none-->
	                        <?php else:?>
	                        <!--Conditional branch VAR-->
	                        <section class="voice-wrap__main">
	                            <audio src="<?php echo $auido_file; ?>" controls>
	                                <p>どうやらご使用のブラウザが古くて頑固な方で、音声の再生なんぞするものかとおっしゃっています。どなたか最近の方をお呼びしてはいかがでしょう。</p>
	                            </audio>
	                        </section>
	                        <?php endif;?>
	                        <!--END Conditional branch VAR-->
	                        <?php if(empty($notes)):?>
	                        <!--none-->
	                        <?php else:?>
	                        <h2>なにを話したか、かいつまんで言いますと……</h2>
	                        <p><?php echo $notes; ?></p>
	                        <?php endif;?>
	                        <!--END Conditional branch VAR-->
	                    </section>