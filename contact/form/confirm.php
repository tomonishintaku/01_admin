<?php require_once "inquiry_ctrl.php";
			session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!-- ���{�ے�@start -->
<meta name="robots" content="noindex,nofollow">
<meta name="googlebot" content="noindex,nofollow">
<!-- ���{�ے�@end -->


<meta http-equiv="Content-Type" content="text/html; charset=shift-JIS">
<meta name="Keywords" content="�f�U�C���쐬,���S�쐬,���h�쐬,�|�[�g�t�H���I�쐬">
<meta name="description" content="���₢���킹�E������">

<link rel="shortcut icon" href="../../images/common/favicon.ico">
<link href="../../css/base.css" type="text/css" rel="stylesheet">
<link href="../css/inside_02.css" type="text/css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">

<title>���₢���킹�E������</title>

 <script type="text/javascript" src="../../js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="../../js/opacity-rollover2.1.js"></script>
  <script type="text/javascript" src="../../js/command.js"></script>
</head>

<body>
<!-- start #wrapper -->
<div id="wrapper">
<!---�w�b�_�[�����X�^�[�g-->
<div id="header">
<h1>

<?php  $_SESSION ['inquiry'] = $_POST ['birth_day'];
			 $_SESSION ['inquiry']['service'] = $_POST ['service'][3];

			//echo $_SESSION ['inquiry'];
			echo $_SESSION ['inquiry']['service'];
?>
���₢���킹�E������</h1>

<!--header_inc_start��-->
<h2>
	<a href="http://bijutsu4.com/"><img alt="���p4 �f�U�C�� �I�[�K�i�C�Y" src="http://bijutsu4.com/images/common/logo_bijutsu4.gif" width="121" height="68"></a>
</h2>
<div id="info">
<ul>
	<li class="con"><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">���⍇���E������</a>
	</li>
	<li class="map"><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml">�T�C�g�}�b�v</a>
	</li>
	<li class="mail">&#105;&#x6e;&#x66;&#111;&#x40;&#x62;&#x69;&#x6a;&#x75;&#116;&#115;&#x75;&#x34;&#x2e;&#x63;&#111;&#x6d;
	</li>
</ul>
<ul class="bm">
	<li>
<a href="javascript:var%20d=document,w=window,l=location,e=encodeURIComponent,t=(d.selection)?d.selection.createRange().text:(w.getSelection)?w.getSelection():(d.getSelection)?d.getSelection():'',f='http://twitter.com/home/?status='+e(t)+e(d.title)+e(l.href);if(!w.open(f,'surfing'))l.href=f;void(0);" rel="nofollow"><img src="http://bijutsu4.com/images/common/ico_twitter.gif" alt="twitter" border="0" width="16" height="16"></a>
	</li>
	<li><a href="javascript:void window.open('http://www.google.com/bookmarks/mark?op=edit&bkmk='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title)+'');" rel="nofollow"><img alt="���̃y�[�W�� Google Bookmarks �ɒǉ�" src="http://www.google.co.jp/favicon.ico" border="0" width="16" height="16"></a>
	</li>
<li>
<a href="javascript:void window.open('http://clip.livedoor.com/clip/add?link='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title)+'&jump=myclip');" rel="nofollow"><img src="http://blog.seesaa.jp/img/bookmark/livedoor_ico.gif" alt="Livedoor�N���b�v�ɃN���b�v�I" title="Livedoor�N���b�v�ɃN���b�v�I" border="0" width="16" height="16"></a>
</li>
	<li>
<a href="javascript:void window.open('http://b.hatena.ne.jp/append?'+encodeURIComponent(window.location.href)+'');" rel="nofollow"><img src="http://blog.seesaa.jp/img/bookmark/hatena_ico.gif" alt="�͂Ăȃu�b�N�}�[�N�ɒǉ�" title="�͂Ăȃu�b�N�}�[�N�ɒǉ�" border="0" width="16" height="16"></a>
</li>
		<li>
<a href="javascript:void window.open('http://bookmarks.yahoo.co.jp/action/bookmark?t='+encodeURIComponent(document.title)+'&u='+encodeURIComponent(window.location.href)+'&r=my&fr=ybm_yn');" rel="nofollow"><img src="http://i.yimg.jp/images/ybm/blogparts/addmy_btn.gif" width="125" height="17" alt="Yahoo!�u�b�N�}�[�N�ɒǉ�"></a>
	</li>
</ul>
<a id="page_top" name="page_top"></a>
</div>
<!--header_inc_end��-->

</div>

<div id="nav" class="clearfix">
	<ul>
		<li><a href="http://bijutsu4.com/">���p4 DESIGN ORGANIZE HOME</a></li>
		<li>&gt;</li>
			<li><strong>���⍇���E������</strong></li>
	</ul>
</div>

<!-- start #content -->
		<div id="content">
			<h2><img alt="���⍇���E������" src="http://bijutsu4.com/article_order/form/images/ttl_inquiry.png" width="640" height="120"></h2>

<form action="./" method="POST" id="form">

<div id="form_in">
<p class="must_mark">
<span>��</span>�͓��͕K�{�̍��ڂł��B
</p>

<!--���⍇���E�������̃T�[�r�X�@start-->
<table cellspacing="0" cellpadding="0" class="service">
<tr><th rowspan="2"><p class="must">DM�E�t���C���[�E�`���V�쐬</p>
	</th>
 	  <td class="check">
<input name="service[0]" value="�sDM�E�t���C���[�E�`���V�쐬�t�n�K�L�AA5�T�C�Y�ȓ�/�쐬���i�F31.500�~(�ō�)" type="checkbox">
	</td>
	<td class="menu">�n�K�L�AA5�T�C�Y�ȓ�/�쐬���i�F31.500�~(�ō�)
	</td>
 </tr>
<tr>
 	  <td class="check">
<input name="service[1]" value="�sDM�E�t���C���[�E�`���V�쐬�tA4�`A2�T�C�Y�ȓ�/�쐬���i�F42.000�~(�ō�)" type="checkbox">
	</td>
	<td class="menu">A4�`A2�T�C�Y�ȓ�/�쐬���i�F42.000�~(�ō�)
	</td>
 </tr>
  </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th><p class="must">���h(��ЁE��Ɩ@�l�E��)�쐬</p>
	</th>
 	  <td class="check">
<input name="service[2]" value="�s���h(��ЁE��Ɩ@�l�E��)�쐬�t�쐬���i�F15,750�~(�ō�)" type="checkbox">
	</td>
	<td>�쐬���i�F15,750�~(�ō�)
		</select>
	</td>
 </tr>
  </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th><p class="must">���S�}�[�N�E���S�f�U�C���쐬</p>
	</th>
 	  <td class="check"><input name="service[3]" value="�s���S�}�[�N�E���S�f�U�C���쐬�t�쐬���i�F0�~(����) / �̔����i�F52,500�~(�ō�)" type="checkbox">
	</td>
	<td>
	�쐬���i�F0�~(����) / �̔����i�F52,500�~(�ō�)
	</td>
 </tr>
 </table>

<table cellspacing="0" cellpadding="0" class="service">
    <tr>
 	  <th rowspan="4">
<p class="must">�|�[�g�t�H���I�E��i�t�@�C���쐬</p>
 	</th>
 	  <td class="check">
<input name="service[4]" value="�s�|�[�g�t�H���I�E��i�t�@�C���쐬�t10�y�[�W/�쐬���i�F12,600�~(�ō�)" type="checkbox">
 	</td>
		<td>10�y�[�W/�쐬���i�F12,600�~(�ō�)</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[5]" value="�s�|�[�g�t�H���I�E��i�t�@�C���쐬�t10�`20�y�[�W/�쐬���i�F18,900�~(�ō�)" type="checkbox">
 	</td>
	<td>
	10�`20�y�[�W/�쐬���i�F18,900�~(�ō�)
	</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[6]" value="�s�|�[�g�t�H���I�E��i�t�@�C���쐬�t20�`30�y�[�W/�쐬���i�F25,200�~(�ō�)" type="checkbox">
 	</td>
	<td>
	20�`30�y�[�W/�쐬���i�F25,200�~(�ō�)
	</td>
</tr>
<tr>
	 	 <td class="check">
<input name="service[6]" value="�s�|�[�g�t�H���I�E��i�t�@�C���쐬�t30�`40�y�[�W/�쐬���i�F31,500�~(�ō�)" type="checkbox">
 	</td>
	<td>
	30�`40�y�[�W/�쐬���i�F31,500�~(�ō�)
	</td>
</tr>
 </table>

<table cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s"><p class="must"><span>*</span>�����s�T�[�r�X</p></th>
    <td>�v:1,050�~(�ō�)<input name="proxy" type="radio" value="�v:1,050�~(�ō�)�����񂲗��p��0�~(����)" >
 �s�v<input name="proxy" type="radio" value="�s�v" >�@<span class="cau">�����񂲗��p�җl��0�~(����)</span>
</td>
  </tr>
</table>
 <!-- ���⍇���E�������̃T�[�r�X�@end-->

<table cellspacing="0" cellpadding="0">
<!-- ���q�l���̓��́@start-->
  <tr>
    <th class="l_s"><p class="must"><span>*</span>�����O(����)</p></th>
    <td>��<input type="text" name="name[0]" size="14">
		��<input type="text" name="name[1]" size="14"></td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>�����O(�J�i)</p></th>
    <td>�Z�C<input type="text" name="name_kana[0]" size="14">
		���C<input type="text" name="name_kana[1]" size="14"></td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>�d�b�ԍ�</p></th>
    <td><input type="text" name="tel[0]" size="5">-<input type="text" name="tel[1]" size="5">-<input type="text" name="tel[2]" size="5"><span class="cha_min">(���p�p����)</span></td>
  </tr>
  <tr>
    <th><p class="must"><span>*</span>���[���A�h���X</p></th>
    <td><input type="text" name="email[0]" size="30" maxlength="100"><span class="cha_min">(���p�p����)</span>
</tr>
  <tr>
    <th><p class="must"><span>*</span>���[���A�h���X(�m�F)</p></th>
	<td>
<input type="text" name="email[1]" size="30" maxlength="100"><span class="cha_min">(���p�p����)</span>
	</td>
  </tr>
  <tr>
    <th class="l_s"><p class="must"><span>*</span>�Z��</p></th>
    <td>
��<input type="text" name="address[0]" size="4">-<input type="text" name="address[1]" size="6"><span class="cha_min">(���p�p����)</span><br>
�s���{��<select name="address[2]">
<optgroup label="�k�C���E���k">
<option value="�k�C��">�k�C��</option>

<option value="�X��">�X��</option>
<option value="�H�c��">�H�c��</option>
<option value="��茧">��茧</option>
<option value="�R�`��">�R�`��</option>

<option value="�{�錧">�{�錧</option>
<option value="������">������</option>
</optgroup>
<optgroup label="�b�M�z�E�k��">
<option value="�R����">�R����</option>
<option value="���쌧">���쌧</option>

<option value="�V����">�V����</option>
<option value="�x�R��">�x�R��</option>
<option value="�ΐ쌧">�ΐ쌧</option>
<option value="���䌧">���䌧</option>

</optgroup>
<optgroup label="�֓�">
<option value="��錧">��錧</option>
<option value="�Ȗ،�">�Ȗ،�</option>
<option value="�Q�n��">�Q�n��</option>
<option value="��ʌ�">��ʌ�</option>

<option value="��t��">��t��</option>
<option value="�����s" selected="selected">�����s</option>
<option value="�_�ސ쌧">�_�ސ쌧</option>
</optgroup>

<optgroup label="���C">
<option value="���m��">���m��</option>
<option value="�É���">�É���</option>
<option value="�򕌌�">�򕌌�</option>
<option value="�O�d��">�O�d��</option>
</optgroup>

<optgroup label="�֐�">
<option value="���{">���{</option>
<option value="���Ɍ�">���Ɍ�</option>
<option value="���s�{">���s�{</option>

<option value="���ꌧ">���ꌧ</option>
<option value="�ޗǌ�">�ޗǌ�</option>
<option value="�a�̎R��">�a�̎R��</option>
</optgroup>
<optgroup label="����">
<option value="���R��">���R��</option>

<option value="�L����">�L����</option>
<option value="���挧">���挧</option>
<option value="������">������</option>
<option value="�R����">�R����</option>

</optgroup>
<optgroup label="�l��">
<option value="������">������</option>
<option value="���쌧">���쌧</option>
<option value="���Q��">���Q��</option>
<option value="���m��">���m��</option>

</optgroup>
<optgroup label="��B�E����">
<option value="������">������</option>
<option value="���ꌧ">���ꌧ</option>
<option value="���茧">���茧</option>

<option value="�F�{��">�F�{��</option>
<option value="�啪��">�啪��</option>
<option value="�{�茧">�{�茧</option>
<option value="��������">��������</option>
<option value="���ꌧ">���ꌧ</option>

</optgroup>
</select><br>
<input type="text" size="65" maxlength="120" name="address[3]">
<div class="info"><span class="cha_min">�s�撬���A�}���V�����E�r�����Ȃ�</span></div>
</td>
  </tr>

  <tr>
    <th class="l_s">���N����</th>
    <td>
<input value="19" size="4" id="year" type="text" name="born[0]">�N
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
</select>��
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
</select>��
<span class="cha_min">(���p�p����)</span>
	</td>
</tr>





  <tr>
    <th class="l_s">����</th>
    <td>�j�� <input name="sex" type="radio" value="�j��" >
 ���� <input name="sex" type="radio" value="����" >
</td>
  </tr>
</table>


<div id="txt_area">
<table cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s">
���ӌ��E���v�]
</th>
	</tr>
<tr class="line_no">
	<td class="line_no">
<textarea id="free_txt" name="opinion"></textarea>
</td>
    </tr>
</table>

<!--�����p�K��@start-->
<table class="law" cellspacing="0" cellpadding="0">
  <tr>
    <th class="l_s">
<p class="must"><span>*</span>�����p�K��</p>
	</th>
</tr>
	<tr>
<td class="line_no">
<div id="law_txt">
<div id="law_in">
<p>�{�K��́A���p4 DESIGN ORGANIZE�̒񋟂���T�[�r�X(�ȉ��A���T�[�r�X�Ƃ����܂��B)�𗘗p����邷�ׂĂ̂��q�l�ɓK�p����܂��B</p>
<h4>��1��(�{�K��͈̔͋y�ѕύX)</h4>
<p>�{�K��́A���T�[�r�X�̗��p�Ɋւ��A���q�l�Ɖ^�c�҂ł�����p4 DESIGN ORGANIZE(�ȉ��A�u���������v�Ƃ����܂��B)�Ƃ̊ԂɓK�p�������̂Ƃ��܂��B�Ȃ��{�K��͓��������̔��f�ɂ�萏���\���Ȃ��ύX�ł�����̂Ƃ��܂��B</p>
<h4>��2��(���T�[�r�X�̗��p)</h4>
<p>
���q�l���\�����ݎ葱���s���A�������̃T�[�r�X�̗���������������_�ŁA���q�l�Ɠ��������Ƃ̊ԂŔ����_�񂪐���������̂Ƃ��܂��B�������A��4���ɏ]���A�����������_������������Ă����������Ƃ�����܂��B
</p>

<h4>��3��(�T�[�r�X���i)</h4>
<p>
���������̂��ׂẴT�[�r�X�̉��i�͓��������̔��f�ɂ��\���Ȃ��ύX����ꍇ���������܂��B
</p>
<h4>��4��(�_��̎����)</h4>
<p>
���������́A���q�l���{�K��Ɉᔽ�����ꍇ�A���̑������̗��R������Ɠ������������f�����ꍇ�ɂ́A���q�l���U���葱�����������ꂽ�ꍇ�ł����Ă��A���q�l�Ƃ̊Ԃ̌_������������Ă��������܂��B���̏ꍇ�A���q�l���w�肳�ꂽ�A�����@�ɂāA���̂ނ˂����A���������܂��B�Ȃ��A���������Ƃ̌_�񂪐������鎖�O�̐\�����݂œ����������T�[�r�X�񋟂��s�K�؂��Ɣ��f�����ꍇ�A���������͐\�����݂����������Ƃ��ł��܂��B
</p>
<h4>��5��(���������L���}�̂֐�����тƂ��Ă̌f��)</h4>
<p>
���������͓��T�[�r�X�������p�������������q�l�ɑ΂��A�񋟂���S�T�[�r�X�̐��ʕ��́A��������Web�T�C�g���܂߂��e��L���}�̓��ɐ��쎖��Ƃ��Čf�ڂ����Ă��������ꍇ���������܂��B
</p>
<h4>��6��(�{�K��̏���)</h4>

<p>
���T�[�r�X�����\�����݂̂��q�l�͑S�Ė{�K��������ǂ̂����A����̕��@�ɂĐ\���葱�����s�������̂Ƃ��܂��B
</p>
<h4>��7��(���ӊǊ��ٔ���)</h4>
<p>
���������Ƃ��q�l�ԂŁA�i�ׂ̕K�v���������ꍇ�ɂ́A�����������ݒn���Ǌ�����ٔ�����B��̍��ӊǊ��ٔ����Ƃ��܂��B
</p>

<h4>��8��(���S�}�[�N�E���S�f�U�C���̏��W�o�^)</h4>
<p>
�������������삵�񋟂��郍�S�f�[�^�̏��W�o�^����]���邨�q�l�͂��q�l�̐ӔC�ɂ����čs���Ă��������B�o�^�ɍۂ��Ă̂����k�A���葱�����͓��������ł͈�؍s���Ă���܂���B�Ȃ��A���W�o�^�̌��ʁA���̃��S�}�[�N�⃍�S�f�U�C���Ɨގ���������o�^�s�̏ꍇ�A���̏ؖ������鏑�ʂ̒�o�������ē��������͍ēx�A�����ɂăf�U�C���Ă��o�������܂��B
</p>
<h4>��9��(�ۏ�y�ѐӔC)</h4>

<p>

���������̑S�T�[�r�X�ɂ����āA���삢�����܂������ʕ��������炷���ʁA���X�N�ɂ��Ă͉���̕ۏ؂͂������܂���B�܂��A�T�[�r�X�̗��p�ɍۂ��A���q�l�ɑ΂��Ĕ����������Q�̈�؂̐ӔC�𕉂�Ȃ����̂Ƃ��܂��B�V�ЁE��d�E���́E�̏�A���ɂ���Ƃ̒x��A�f�[�^�̑r���ɂ�鑹�Q�ɑ΂��Ĉ�؂̕ۏ؂͂ł��܂���B���������E�f�U�C�i�[�̕s���̎��̂Ȃǂ̗��R�ɂ��[���̒x�������������ꍇ�̑��Q�̈�؂̐ӔC�𕉂�Ȃ����̂Ƃ��܂��B
</p>

<h4>��10��(���ʕ��̌����A��)</h4>
<p>
���������̑S�T�[�r�X�ɂ����āA���삢�����܂������ʕ��Ɋւ��Ă̒��쌠�́A���삪���������_��I����͂��q�l���L������̂Ƃ��܂��B
</p>
</div>
<p id="agree">
���ӂ���<input type="radio" name="law" value="����" >
���ӂ��Ȃ�<input type="radio" name="law" value="�s����" >
<p>
</div>
<!--�����p�K��@end-->
</td>
    </tr>

</table>
</div>
<!--���q�l���̓��́@end-->
</div>
<!-- end #form_in -->

 <div id="send">
	<input type="submit" value="�m�F��ʂ�" class="submit"> <input name="reset" type="submit" value="���Z�b�g" class="submit">
</div>
</form>

</div>
<!-- end #content -->
<!-- start #side -->
<div id="side">

<!--side_inc_start��-->
<h2><img alt="�f�U�C���E�O���t�B�b�N�EDTP����" src="http://bijutsu4.com/images/common/img_side_m.gif" border="0" width="220" height="14"></h2>
			<ul id="work">
				<li><a href="http://bijutsu4.com/design_art/"><abbr title="�_�C���N�g���[��">DM</abbr>�E�t���C���[�E�`���V�쐬</a></li>
				<li><a href="http://bijutsu4.com/design_art/meishi.shtml">���h(��ЁE��Ɩ@�l�E�l)�쐬</a></li>
				<li><a href="http://bijutsu4.com/design_art/logo.shtml">���S�}�[�N�E���S�f�U�C���쐬</a></li>
				<li><a href="http://bijutsu4.com/design_art/work_file.shtml">�|�[�g�t�H���I�E��i�t�@�C���쐬</a></li>
			</ul>
<h2><img alt="�f�U�C������̂������ɂ���" src="http://bijutsu4.com/images/common/img_side_c.gif" border="0" width="220" height="14"></h2>
			<ul id="con_order">
				<li><a href="http://bijutsu4.com/article_order/">�[�i�E���x�������@</a></li>
				<li><a href="http://bijutsu4.com/article_order/faq.shtml"><abbr title="frequently asked question">FAQ</abbr>�E�悭���鎿��</a></li>
				<li><a href="http://bijutsu4.com/article_order/privacy.shtml">�v���C�o�V�[�|���V�[</a></li>
				<li><a href="http://bijutsu4.com/article_order/law.shtml">���菤����@�Ɋ�Â��\�L</a></li>
				<li><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">���⍇���E������</a></li>
			</ul>

<h2><img alt="��ƃ��Z�i����/�A�[�g�x��" src="http://bijutsu4.com/images/common/img_side_y.gif" border="0" width="220" height="14"></h2>
			<ul id="art_conn">
				<li><a href="/art_connect/">���p�ƁE�A�[�e�B�X�g�ꗗ</a></li>
			</ul>

<h2><img alt="���p4 DESIGN ORGANIZE�ɂ���" src="http://bijutsu4.com/images/common/img_side_k.gif" border="0" width="220" height="14"></h2>
			<ul id="about_us">
			<li><a href="http://bijutsu4.com/about_bijutsu4/">���p4 �������T�v</a></li>
			<li><a href="http://bijutsu4.seesaa.net/" target="_blank" rel="nofollow">���p4 <span class="al">blog</span></a></li>
			<li><a href="http://twitter.com/bijutsu4" target="_blank" rel="nofollow">���p4 <span class="al">twitter</span></a></li>
			<li><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml">���p4 �T�C�g�}�b�v</a></li>
			</ul>

			<h4>
			<a href="http://bijutsu4.com/design_art/logo.shtml">
			<img alt="���S�f�U�C��2�āA0�~(����)�ł����" src="/images/bnr/bnr_logo_0yen"width="220" height="220">
			</a>
			</h4>
<h4>
			<a href="http://bijutsu4.com/article_order/benefit.shtml">
			<img alt="���񂲗��p�җl�����T�[�r�X ���X�N�t���[�̂��߂�3�̖������T" src="/images/bnr/bnr_benefit.gif" width="220" height="50">
			</a>
			</h4>

<h4>
			<a href="http://bijutsu4.com/design_art/service/">
			<img alt="���{�W���K�i(JIS)�p���T�C�Y�\" src="/images/bnr/bnr_jis_size.gif" width="220" height="30">
			</a>
			</h4>
<!--side_inc_end��-->
</div>

<!-- end #side -->
	</div>
	<!-- end #wrapper -->

		<div id="footer">
<!--footer_inc_start��-->
<div class="top_alink">
	<a href="#page_top">
		<img alt="���S�f�U�C���E���h�EDM�쐬�͔��p4�F�y�[�W�̃g�b�v�֖߂�" src="http://bijutsu4.com/images/common/btn_top_alnk.gif" height="20" width="140">
	</a>
</div>
	<div id="footer_link">
		<h5><a href="http://bijutsu4.com/"><img src="http://bijutsu4.com//images/common/img_foot_home.gif" alt="���p4 DESIGN ORGANIZE" border="0" width="200" height="12"></a></h5>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_m.gif" alt="�f�U�C���E�O���t�B�b�N�EDTP����" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/design_art/"><abbr title="�_�C���N�g���[��">DM</abbr>�E�t���C���[�E�`���V�쐬</a>
		</li>
		<li><a href="http://bijutsu4.com/design_art/meishi.shtml">���h(��ЁE��Ɩ@�l�E�l)�쐬</a>
		</li>
		<li><a href="http://bijutsu4.com/design_art/logo.shtml">���S�}�[�N�E���S�f�U�C���쐬</a>
		</li>
		<li class="last"><a href="http://bijutsu4.com/design_art/work_file.shtml">�|�[�g�t�H���I�E��i�t�@�C���쐬</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_c.gif" alt="�f�U�C������̂������ɂ���" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/article_order/">�[�i�E���x�������@</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/faq.shtml"><abbr title="frequently asked question">FAQ</abbr>�E�悭���鎿��</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/privacy.shtml">�v���C�o�V�[�|���V�[</a>
		</li>
		<li><a href="http://bijutsu4.com/article_order/law.shtml">���菤����@�Ɋ�Â��\�L</a>
		</li>
		<li class="last"><a href="https://sub-bijutsu4.ssl-lolipop.jp/article_order/form/" rel="nofollow">���⍇���E������</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_y.gif" alt="��ƃ��Z�i����/�A�[�g�x��" border="0" width="200" height="12">
</h5>
	<ul>
		<li class="last"><a href="/art_connect/">���p�ƁE�A�[�e�B�X�g�ꗗ</a>
		</li>
	</ul>

		<h5><img src="http://bijutsu4.com/images/common/img_foot_k.gif" alt="���p4 DESIGN ORGANIZE�ɂ���" border="0" width="200" height="12">
</h5>
	<ul>
		<li><a href="http://bijutsu4.com/about_bijutsu4/">���p4 �������T�v</a>
		</li>
		<li><a href="http://bijutsu4.seesaa.net/" target="_blank" rel="nofollow">���p4 <span class="al">blog</span></a>
		</li>
<li>
<a href="http://twitter.com/bijutsu4" target="_blank" rel="nofollow">���p4 <span class="al">twitter</span></a></a></li>
		<li class="last"><a href="http://bijutsu4.com/about_bijutsu4/sitemap.shtml" id="last">���p4  �T�C�g�}�b�v</a>
		</li>
	</ul>
			</div>

		<div id="copy_by">
			<div id="copy">
			<h6>�f�ڂ̃f�U�C���T���v���摜�E�ʐ^�E�C���X�g�ȂǁA���ׂẴR���e���c�̖��f���ʁE�]�ځE���O���M�����ւ��܂��B
			</h6>
        		<address>Copyright&copy; 2010<span></span> BIJUTSU4 DESIGN ORGANIZE. All Rights Reserved.
		</address>
			</div>
			<div id="by">
			<h6><a href="http://bijutsu4.com/"><img src="http://bijutsu4.com/images/common/by_bijutsu4.gif" alt="��Web�T�C�g�͔��p4 DESIGN ORGANIZE���f�U�C���E���삵�Ă��܂�" border="0" width="125" height="23"></a>
			</div>
			</h6>
		</div>
<!--footer_inc_end��-->

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