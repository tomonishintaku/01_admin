<?php


/*“s“¹•{Œ§‘I‘ğ
function prefecture(){
	$pref = array('–kŠC“¹','ÂXŒ§','ŠâèŒ§','‹{éŒ§','H“cŒ§','RŒ`Œ§','•Ÿ“‡Œ§','ˆïéŒ§','“È–ØŒ§','ŒQ”nŒ§','é‹ÊŒ§','ç—tŒ§','“Œ‹“s','_“ŞìŒ§','VŠƒŒ§','•xRŒ§','ÎìŒ§','•ŸˆäŒ§','R—œŒ§','’·–ìŒ§','Šò•ŒŒ§','Ã‰ªŒ§','ˆ¤’mŒ§','OdŒ§',' ‰êŒ§','‹“s•{','‘åã•{','•ºŒÉŒ§','“Ş—ÇŒ§','˜a‰ÌRŒ§','’¹æŒ§','“‡ªŒ§','‰ªRŒ§','L“‡Œ§','RŒûŒ§','“¿“‡Œ§','ìŒ§','ˆ¤•QŒ§','‚’mŒ§','•Ÿ‰ªŒ§','²‰êŒ§','’·èŒ§','ŒF–{Œ§','‘å•ªŒ§','‹{èŒ§','­™“‡Œ§','‰«“êŒ§');
	foreach($pref as $pref) {
	print('<option value="' . $pref . '">' . $pref . '</option>');
	}
}*/

//“s“¹•{Œ§‘I‘ğ
function prefecture(){
	$pref_gp = array('–kŠC“¹E“Œ–k','bM‰zE–k—¤','ŠÖ“Œ','“ŒŠC','ŠÖ¼','’†‘','l‘','‹ãBE‰«“ê');
	$pref =	array(
		array('–kŠC“¹','ÂXŒ§','H“cŒ§','ŠâèŒ§','RŒ`Œ§','‹{éŒ§','•Ÿ“‡Œ§'),
		array('R—œŒ§','’·–ìŒ§','VŠƒŒ§','•xRŒ§','ÎìŒ§','•ŸˆäŒ§'),
		array('ˆïéŒ§','“È–ØŒ§','ŒQ”nŒ§','é‹ÊŒ§','ç—tŒ§','“Œ‹“s','_“ŞìŒ§'),
		array('ˆ¤’mŒ§','Ã‰ªŒ§','Šò•ŒŒ§','OdŒ§'),
		array('‘åã•{','•ºŒÉŒ§','‹“s•{',' ‰êŒ§','“Ş—ÇŒ§','˜a‰ÌRŒ§'),
		array('‰ªRŒ§','L“‡Œ§','’¹æŒ§','“‡ªŒ§','RŒûŒ§'),
		array('“¿“‡Œ§','ìŒ§','ˆ¤•QŒ§','‚’mŒ§'),
		array('•Ÿ‰ªŒ§','²‰êŒ§','’·èŒ§','ŒF–{Œ§','‘å•ªŒ§','‹{èŒ§','­™“‡Œ§','‰«“êŒ§')
	);

	for($num = 0; $num<count($pref_gp); $num++) {
			print('<optgroup label="' . $pref_gp[$num] . '">');
				foreach($pref[$num] as $pref_num[$num]) {
					print('<option value="' . $pref_num[$num] . '">' . $pref_num[$num] . '</option>');
				}
	}
}



//¶”NŒ“ú‘I‘ğ
function birth_year(){
	for($date = 1; $year < 12; $year++) {
	print('<option value="' . $year . '">' . $year . '</option>');
	}
}

function birth_month(){
	for($date = 1; $month <= 12; $month++) {
	print('<option value="' . $month . '">' . $month . '</option>');
	}
}

function birth_day(){
	for($date = 1; $day <= 31; $day++) {
	print('<option value="' . $day . '">' . $day . '</option>');
	}
}



?>