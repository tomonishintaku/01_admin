<?php require_once "inquiry_ctrl.php";
			session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!-- ロボ否定　start -->
<meta name="robots" content="noindex,nofollow">
<meta name="googlebot" content="noindex,nofollow">
<!-- ロボ否定　end -->


<meta http-equiv="Content-Type" content="text/html; charset=shift-JIS">
<meta name="Keywords" content="デザイン作成,ロゴ作成,名刺作成,ポートフォリオ作成">
<meta name="description" content="お問い合わせ・ご注文">

<link rel="shortcut icon" href="../../images/common/favicon.ico">
<link href="../../css/base.css" type="text/css" rel="stylesheet">
<link href="../css/inside_02.css" type="text/css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">

<title>お問い合わせ・ご注文</title>

 <script type="text/javascript" src="../../js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="../../js/opacity-rollover2.1.js"></script>
  <script type="text/javascript" src="../../js/command.js"></script>
</head>

<body>
<!-- start #wrapper -->
<div id="wrapper">
<!---ヘッダー部分スタート-->
<div id="header">
<h1>

<?php  $_SESSION ['inquiry'] = $_POST ['birth_day'];
			 $_SESSION ['inquiry']['service'] = $_POST ['service'][3];

			//echo $_SESSION ['inquiry'];
			echo $_SESSION ['inquiry']['service'];
?>
お問い合わせ・ご注文</h1>

<!--header_inc_start▼-->
<h2>
	<a href="http://bijutsu4.com/"><img alt="美術4 デザイン オーガナイズ" src="http://bijutsu4.com/images/common/logo_bijutsu4.gif" width="121" height="68"></a>
</h2>
<div id="info">
<ul>
	<li class="con"><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">お問合せ・ご注文</a>
	</li>
	<li class="map"><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml">サイトマップ</a>
	</li>
	<li class="mail">&#105;&#x6e;&#x66;&#111;&#x40;&#x62;&#x69;&#x6a;&#x75;&#116;&#115;&#x75;&#x34;&#x2e;&#x63;&#111;&#x6d;
	</li>
</ul>
<ul class="bm">
	<li>
<a href="javascript:var%20d=document,w=window,l=location,e=encodeURIComponent,t=(d.selection)?d.selection.createRange().text:(w.getSelection)?w.getSelection():(d.getSelection)?d.getSelection():'',f='http://twitter.com/home/?status='+e(t)+e(d.title)+e(l.href);if(!w.open(f,'surfing'))l.href=f;void(0);" rel="nofollow"><img src="http://bijutsu4.com/images/common/ico_twitter.gif" alt="twitter" border="0" width="16" height="16"></a>
	</li>
	<li><a href="javascript:void window.open('http://www.google.com/bookmarks/mark?op=edit&bkmk='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title)+'');" rel="nofollow"><img alt="このページを Google Bookmarks に追加" src="http://www.google.co.jp/favicon.ico" border="0" width="16" height="16"></a>
	</li>
<li>
<a href="javascript:void window.open('http://clip.livedoor.com/clip/add?link='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title)+'&jump=myclip');" rel="nofollow"><img src="http://blog.seesaa.jp/img/bookmark/livedoor_ico.gif" alt="Livedoorクリップにクリップ！" title="Livedoorクリップにクリップ！" border="0" width="16" height="16"></a>
</li>
	<li>
<a href="javascript:void window.open('http://b.hatena.ne.jp/append?'+encodeURIComponent(window.location.href)+'');" rel="nofollow"><img src="http://blog.seesaa.jp/img/bookmark/hatena_ico.gif" alt="はてなブックマークに追加" title="はてなブックマークに追加" border="0" width="16" height="16"></a>
</li>
		<li>
<a href="javascript:void window.open('http://bookmarks.yahoo.co.jp/action/bookmark?t='+encodeURIComponent(document.title)+'&u='+encodeURIComponent(window.location.href)+'&r=my&fr=ybm_yn');" rel="nofollow"><img src="http://i.yimg.jp/images/ybm/blogparts/addmy_btn.gif" width="125" height="17" alt="Yahoo!ブックマークに追加"></a>
	</li>
</ul>
<a id="page_top" name="page_top"></a>
</div>
<!--header_inc_end■-->

</div>

<div id="nav" class="clearfix">
	<ul>
		<li><a href="http://bijutsu4.com/">美術4 DESIGN ORGANIZE HOME</a></li>
		<li>&gt;</li>
			<li><strong>お問合せ・ご注文</strong></li>
	</ul>
</div>

<!-- start #content -->
		<div id="content">
			<h2><img alt="お問合せ・ご注文" src="http://bijutsu4.com/article_order/form/images/ttl_inquiry.png" width="640" height="120"></h2>

<form action="./" method="POST" id="form">

<div id="form_in">
<p class="must_mark">
<span>＊</span>は入力必須の項目です。
</p>

<!--お問合せ・ご注文のサービス　start-->
<table cellspacing="0" cellpadding="0" class="service">
<tr><th rowspan="2"><p class="must">DM・フライヤー・チラシ作成</p>
	</th>
 	  <td class="check">
<input name="service[0]" value="《DM・フライヤー・チラシ作成》ハガキ、A5サイズ以内/作成価格：31.500円(税込)" type="checkbox">
	</td>
	<td class="menu">ハガキ、A5サイズ以内/作成価格：31.500円(税込)
	</td>
 </tr>
<tr>
 	  <td class="check">
<input name="service[1]" value="《DM・フライヤー・チラシ作成》A4～A2サイズ以内/作成価格：42.000円(税込)" type="checkbox">
	</td>
	<td class="menu">A4～A2サイズ以内/作成価格：42.000円(税込)
	</td>
 </tr>
  </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th><p class="must">名刺(会社・企業法人・個社)作成</p>
	</th>
 	  <td class="check">
<input name="service[2]" value="《名刺(会社・企業法人・個社)作成》作成価格：15,750円(税込)" type="checkbox">
	</td>
	<td>作成価格：15,750円(税込)
		</select>
	</td>
 </tr>
  </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th><p class="must">ロゴマーク・ロゴデザイン作成</p>
	</th>
 	  <td class="check"><input name="service[3]" value="《ロゴマーク・ロゴデザイン作成》作成価格：0円(無料) / 販売価格：52,500円(税込)" type="checkbox">
	</td>
	<td>
	作成価格：0円(無料) / 販売価格：52,500円(税込)
	</td>
 </tr>
 </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th rowspan="4">
<p class="must">ポートフォリオ・作品ファイル作成</p>
 	</th>
 	  <td class="check">
<input name="service[4]" value="《ポートフォリオ・作品ファイル作成》10ページ/作成価格：12,600円(税込)" type="checkbox">
 	</td>
		<td>10ページ/作成価格：12,600円(税込)</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[5]" value="《ポートフォリオ・作品ファイル作成》10～20ページ/作成価格：18,900円(税込)" type="checkbox">
 	</td>
	<td>
	10～20ページ/作成価格：18,900円(税込)
	</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[6]" value="《ポートフォリオ・作品ファイル作成》20～30ページ/作成価格：25,200円(税込)" type="checkbox">
 	</td>
	<td>
	20～30ページ/作成価格：25,200円(税込)
	</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[6]" value="《ポートフォリオ・作品ファイル作成》30～40ページ/作成価格：31,500円(税込)" type="checkbox">
 	</td>
	<td>
	30～40ページ/作成価格：31,500円(税込)
	</td>
</tr>
 </table>

<table cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s"><p class="must"><span>*</span>印刷代行サービス</p></th>
    <td>要:1,050円(税込)<input name="proxy" type="radio" value="要:1,050円(税込)※初回ご利用者0円(無料)" >
 不要<input name="proxy" type="radio" value="不要" >　<span class="cau">※初回ご利用者様は0円(無料)</span>
</td>
  </tr>
</table>
 <!-- お問合せ・ご注文のサービス　end-->

<table cellspacing="0" cellpadding="0">
<!-- お客様情報の入力　start-->
  <tr>
    <th class="l_s"><p class="must"><span>*</span>お名前(漢字)</p></th>
    <td>姓<input type="text" name="name[0]" size="14">
		名<input type="text" name="name[1]" size="14"></td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>お名前(カナ)</p></th>
    <td>セイ<input type="text" name="name_kana[0]" size="14">
		メイ<input type="text" name="name_kana[1]" size="14"></td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>電話番号</p></th>
    <td><input type="text" name="tel[0]" size="5">-<input type="text" name="tel[1]" size="5">-<input type="text" name="tel[2]" size="5"><span class="cha_min">(半角英数字)</span></td>
  </tr>
  <tr>
    <th><p class="must"><span>*</span>メールアドレス</p></th>
    <td><input type="text" name="email[0]" size="30" maxlength="100"><span class="cha_min">(半角英数字)</span>
</tr>
  <tr>
    <th><p class="must"><span>*</span>メールアドレス(確認)</p></th>
	<td>
<input type="text" name="email[1]" size="30" maxlength="100"><span class="cha_min">(半角英数字)</span>
	</td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>住所</p></th>
    <td>
〒<input type="text" name="address[0]" size="4">-<input type="text" name="address[1]" size="6"><span class="cha_min">(半角英数字)</span><br>
都道府県<select name="address[2]">
<optgroup label="北海道・東北">
<option value="北海道">北海道</option>

<option value="青森県">青森県</option>
<option value="秋田県">秋田県</option>
<option value="岩手県">岩手県</option>
<option value="山形県">山形県</option>

<option value="宮城県">宮城県</option>
<option value="福島県">福島県</option>
</optgroup>
<optgroup label="甲信越・北陸">
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>

<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>

</optgroup>
<optgroup label="関東">
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>

<option value="千葉県">千葉県</option>
<option value="東京都" selected="selected">東京都</option>
<option value="神奈川県">神奈川県</option>
</optgroup>

<optgroup label="東海">
<option value="愛知県">愛知県</option>
<option value="静岡県">静岡県</option>
<option value="岐阜県">岐阜県</option>
<option value="三重県">三重県</option>
</optgroup>

<optgroup label="関西">
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>

<option value="滋賀県">滋賀県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
</optgroup>
<optgroup label="中国">
<option value="岡山県">岡山県</option>

<option value="広島県">広島県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="山口県">山口県</option>

</optgroup>
<optgroup label="四国">
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>

</optgroup>
<optgroup label="九州・沖縄">
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>

<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>

</optgroup>
</select><br>
<input type="text" size="65" maxlength="120" name="address[3]">
<div class="info"><span class="cha_min">市区町村、マンション・ビル名など</span></div>
</td>
  </tr>

  <tr>
    <th class="l_s">生年月日</th>
    <td>
<input value="19" size="4" id="year" type="text" name="born[0]">年
<select name="born[1]">
<option value="01" selected="selected">1 </option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>月
<select  name="born[2]">
<option value="01" selected="selected">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8 </option>
<option value="09">9
									</option><option value="10">10
									</option><option value="11">11
									</option><option value="12">12
									</option><option value="13">13
									</option><option value="14">14
									</option><option value="15">15
									</option><option value="16">16
									</option><option value="17">17
									</option><option value="18">18
									</option><option value="19">19
									</option><option value="20">20
									</option><option value="21">21
									</option><option value="22">22
									</option><option value="23">23
									</option><option value="24">24
									</option><option value="25">25
									</option><option value="26">26
									</option><option value="27">27
									</option><option value="28">28
									</option><option value="29">29
									</option><option value="30">30
									</option><option value="31">31
								</option>
</select>日
<span class="cha_min">(半角英数字)</span>
	</td>
</tr>





  <tr>
    <th class="l_s">性別</th>
    <td>男性 <input name="sex" type="radio" value="男性" >
 女性 <input name="sex" type="radio" value="女性" >
</td>
  </tr>
</table>


<div id="txt_area">
<table cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s">
ご意見・ご要望
</th>
	</tr>
<tr class="line_no">
	<td class="line_no">
<textarea id="free_txt" name="opinion"></textarea>
</td>
    </tr>
</table>

<!--ご利用規約　start-->
<table class="law" cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s">
<p class="must"><span>*</span>ご利用規約</p>
	</th>
</tr>
	<tr>
<td class="line_no">
<div id="law_txt">
<div id="law_in">
<p>本規約は、美術4 DESIGN ORGANIZEの提供するサービス(以下、当サービスといいます。)を利用されるすべてのお客様に適用されます。</p>
<h4>第1条(本規約の範囲及び変更)</h4>
<p>本規約は、当サービスの利用に関し、お客様と運営者である美術4 DESIGN ORGANIZE(以下、「当研究所」といいます。)との間に適用されるものとします。なお本規約は当研究所の判断により随時予告なく変更できるものとします。</p>
<h4>第2条(当サービスの利用)</h4>
<p>
お客様が申し込み手続を行い、ご注文のサービスの料金を入金した時点で、お客様と当研究所との間で売買契約が成立するものとします。ただし、第4条に従い、当研究所が契約を取り消させていただくことがあります。
</p>

<h4>第3条(サービス価格)</h4>
<p>
当研究所のすべてのサービスの価格は当研究所の判断により予告なく変更する場合がございます。
</p>
<h4>第4条(契約の取消し)</h4>
<p>
当研究所は、お客様が本規約に違反した場合、その他相当の理由があると当研究所が判断した場合には、お客様が振込手続きを完了された場合であっても、お客様との間の契約を取り消させていただきます。この場合、お客様が指定された連絡方法にて、そのむねをご連絡いたします。なお、当研究所との契約が成立する事前の申し込みで当研究所がサービス提供が不適切だと判断した場合、当研究所は申し込みを取り消すことができます。
</p>
<h4>第5条(当研究所広告媒体へ制作実績としての掲載)</h4>
<p>
当研究所は当サービスをご利用いただいたお客様に対し、提供する全サービスの成果物は、当研究所Webサイトを含めた各種広告媒体内に制作事例として掲載させていただく場合がございます。
</p>
<h4>第6条(本規約の承諾)</h4>

<p>
当サービスをお申し込みのお客様は全て本規約をご精読のうえ、所定の方法にて申込手続きを行ったものとします。
</p>
<h4>第7条(合意管轄裁判所)</h4>
<p>
当研究所とお客様間で、訴訟の必要が生じた場合には、当研究所所在地を管轄する裁判所を唯一の合意管轄裁判所とします。
</p>

<h4>第8条(ロゴマーク・ロゴデザインの商標登録)</h4>
<p>
当研究所が制作し提供するロゴデータの商標登録を希望するお客様はお客様の責任において行ってください。登録に際してのご相談、お手続き等は当研究所では一切行っておりません。なお、商標登録の結果、他のロゴマークやロゴデザインと類似性があり登録不可の場合、その証明をする書面の提出をもって当研究所は再度、無償にてデザイン案を提出いたします。
</p>
<h4>第9条(保障及び責任)</h4>

<p>

当研究所の全サービスにおいて、制作いたしました成果物がもたらす効果、リスクについては何らの保証はいたしません。また、サービスの利用に際し、お客様に対して発生した損害の一切の責任を負わないものとします。天災・停電・事故・故障、等による作業の遅れ、データの喪失による損害に対して一切の保証はできません。注文件数・デザイナーの不慮の事故などの理由により納期の遅延が発生した場合の損害の一切の責任を負わないものとします。
</p>

<h4>第10条(成果物の権利帰属)</h4>
<p>
当研究所の全サービスにおいて、制作いたしました成果物に関しての著作権は、制作が完了した契約終了後はお客様が有するものとします。
</p>
</div>
<p id="agree">
同意する<input type="radio" name="law" value="同意" >
同意しない<input type="radio" name="law" value="不同意" >
<p>
</div>
<!--ご利用規約　end-->
</td>
    </tr>

</table>
</div>
<!--お客様情報の入力　end-->
</div>
<!-- end #form_in -->

 <div id="send">
	<input type="submit" value="確認画面へ" class="submit"> <input name="reset" type="submit" value="リセット" class="submit">
</div>
</form>

</div>
<!-- end #content -->
<!-- start #side -->
<div id="side">

<!--side_inc_start▼-->
<h2><img alt="デザイン・グラフィック・DTP制作" src="http://bijutsu4.com/images/common/img_side_m.gif" border="0" width="220" height="14"></h2>
			<ul id="work">
				<li><a href="http://bijutsu4.com/design_art/"><abbr title="ダイレクトメール">DM</abbr>・フライヤー・チラシ作成</a></li>
				<li><a href="http://bijutsu4.com/design_art/meishi.shtml">名刺(会社・企業法人・個人)作成</a></li>
				<li><a href="http://bijutsu4.com/design_art/logo.shtml">ロゴマーク・ロゴデザイン作成</a></li>
				<li><a href="http://bijutsu4.com/design_art/work_file.shtml">ポートフォリオ・作品ファイル作成</a></li>
			</ul>
<h2><img alt="デザイン制作のご注文について" src="http://bijutsu4.com/images/common/img_side_c.gif" border="0" width="220" height="14"></h2>
			<ul id="con_order">
				<li><a href="http://bijutsu4.com/article_order/">納品・お支払い方法</a></li>
				<li><a href="http://bijutsu4.com/article_order/faq.shtml"><abbr title="frequently asked question">FAQ</abbr>・よくある質問</a></li>
				<li><a href="http://bijutsu4.com/article_order/privacy.shtml">プライバシーポリシー</a></li>
				<li><a href="http://bijutsu4.com/article_order/law.shtml">特定商取引法に基づく表記</a></li>
				<li><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">お問合せ・ご注文</a></li>
			</ul>

<h2><img alt="企業メセナ活動/アート支援" src="http://bijutsu4.com/images/common/img_side_y.gif" border="0" width="220" height="14"></h2>
			<ul id="art_conn">
				<li><a href="/art_connect/">美術家・アーティスト一覧</a></li>
			</ul>

<h2><img alt="美術4 DESIGN ORGANIZEについて" src="http://bijutsu4.com/images/common/img_side_k.gif" border="0" width="220" height="14"></h2>
			<ul id="about_us">
			<li><a href="http://bijutsu4.com/about_bijutsu4/">美術4 研究所概要</a></li>
			<li><a href="http://bijutsu4.seesaa.net/" target="_blank" rel="nofollow">美術4 <span class="al">blog</span></a></li>
			<li><a href="http://twitter.com/bijutsu4" target="_blank" rel="nofollow">美術4 <span class="al">twitter</span></a></li>
			<li><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml">美術4 サイトマップ</a></li>
			</ul>

			<h4>
			<a href="http://bijutsu4.com/design_art/logo.shtml">
			<img alt="ロゴデザイン2案、0円(無料)でご提案" src="/images/bnr/bnr_logo_0yen"width="220" height="220">
			</a>
			</h4>
<h4>
			<a href="http://bijutsu4.com/article_order/benefit.shtml">
			<img alt="初回ご利用者様向けサービス リスクフリーのための3つの無料特典" src="/images/bnr/bnr_benefit.gif" width="220" height="50">
			</a>
			</h4>

<h4>
			<a href="http://bijutsu4.com/design_art/service/">
			<img alt="日本標準規格(JIS)用紙サイズ表" src="/images/bnr/bnr_jis_size.gif" width="220" height="30">
			</a>
			</h4>
<!--side_inc_end■-->
</div>

<!-- end #side -->
	</div>
	<!-- end #wrapper -->

		<div id="footer">
<!--footer_inc_start▼-->
<div class="top_alink">
	<a href="#page_top">
		<img alt="ロゴデザイン・名刺・DM作成は美術4：ページのトップへ戻る" src="http://bijutsu4.com/images/common/btn_top_alnk.gif" height="20" width="140">
	</a>
</div>
	<div id="footer_link">
		<h5><a href="http://bijutsu4.com/"><img src="http://bijutsu4.com//images/common/img_foot_home.gif" alt="美術4 DESIGN ORGANIZE" border="0" width="200" height="12"></a></h5>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_m.gif" alt="デザイン・グラフィック・DTP制作" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/design_art/"><abbr title="ダイレクトメール">DM</abbr>・フライヤー・チラシ作成</a>
		</li>
		<li><a href="http://bijutsu4.com/design_art/meishi.shtml">名刺(会社・企業法人・個人)作成</a>
		</li>
		<li><a href="http://bijutsu4.com/design_art/logo.shtml">ロゴマーク・ロゴデザイン作成</a>
		</li>
		<li class="last"><a href="http://bijutsu4.com/design_art/work_file.shtml">ポートフォリオ・作品ファイル作成</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_c.gif" alt="デザイン制作のご注文について" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/article_order/">納品・お支払い方法</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/faq.shtml"><abbr title="frequently asked question">FAQ</abbr>・よくある質問</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/privacy.shtml">プライバシーポリシー</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/law.shtml">特定商取引法に基づく表記</a>
		</li>
		<li class="last"><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">お問合せ・ご注文</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_y.gif" alt="企業メセナ活動/アート支援" border="0" width="200" height="12">
</h5>
	<ul>
		<li class="last"><a href="/art_connect/">美術家・アーティスト一覧</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_k.gif" alt="美術4 DESIGN ORGANIZEについて" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/about_bijutsu4/">美術4 研究所概要</a>
		</li>
		<li><a href="http://bijutsu4.seesaa.net/" target="_blank" rel="nofollow">美術4 <span class="al">blog</span></a>
		</li>
<li>
<a href="http://twitter.com/bijutsu4" target="_blank" rel="nofollow">美術4 <span class="al">twitter</span></a></a></li>
		<li class="last"><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml" id="last">美術4  サイトマップ</a>
		</li>
	</ul>
			</div>

		<div id="copy_by">
			<div id="copy">
			<h6>掲載のデザインサンプル画像・写真・イラストなど、すべてのコンテンツの無断複写・転載・公衆送信等を禁じます。
			</h6>
        		<address>Copyright&copy; 2010<span></span> BIJUTSU4 DESIGN ORGANIZE. All Rights Reserved.
		</address>
			</div>
			<div id="by">
			<h6><a href="http://bijutsu4.com/"><img src="http://bijutsu4.com/images/common/by_bijutsu4.gif" alt="当Webサイトは美術4 DESIGN ORGANIZEがデザイン・制作しています" border="0" width="125" height="23"></a>
			</div>
			</h6>
		</div>
<!--footer_inc_end■-->

	</div>

 <script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-18890548-1']);
 _gaq.push(['_trackPageview']);

 (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>

</body>
</html>