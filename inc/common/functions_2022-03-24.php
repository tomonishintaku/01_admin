<?php

	function file_cget_contents($address){
		$ch = curl_init(); //初期化
		curl_setopt($ch, CURLOPT_URL, $address); //URLの設定
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //出力内容を受け取る設定
		$result = curl_exec($ch); //データの取得
		curl_close($ch); //cURLのクローズ

		return $result; //データを返す
	}

$sns = file_cget_contents($_SERVER['DOCUMENT_ROOT'].'/inc/sns.php');
$sns_en = file_cget_contents($_SERVER['DOCUMENT_ROOT'].'/en/inc/sns.php');
/*

Branch due to URL function

HOW TO include : <?php require_once dirname(__FILE__).'/common/functions.php';?>

USE this : <?php branchURL('japanese', '<a href="/">English</a>', '<a href="japanese.php">日本語</a>'); ?>

*/
function branchURL($char, $char_true, $char_false){
$url = $_SERVER['REQUEST_URI'];
if(strstr($url, $char)==true):
echo $char_true;
else:
echo $char_false;
endif; 

}
?>
<?php

//Multi branch function

function MultiBranchURL($char1, $char2, $char3, $char_true1, $char_true2, $char_true3, $char_false){
$url = $_SERVER['REQUEST_URI'];
if(strstr($url, $char1)==true):
echo $char_true1;
elseif(strstr($url, $char2)==true):
echo $char_true2;
elseif(strstr($url, $char3)==true):
echo $char_true3;
else:
echo $char_false;
endif; 

}
?>

