<?php


/*�s���{���I��
function prefecture(){
	$pref = array('�k�C��','�X��','��茧','�{�錧','�H�c��','�R�`��','������','��錧','�Ȗ،�','�Q�n��','��ʌ�','��t��','�����s','�_�ސ쌧','�V����','�x�R��','�ΐ쌧','���䌧','�R����','���쌧','�򕌌�','�É���','���m��','�O�d��','���ꌧ','���s�{','���{','���Ɍ�','�ޗǌ�','�a�̎R��','���挧','������','���R��','�L����','�R����','������','���쌧','���Q��','���m��','������','���ꌧ','���茧','�F�{��','�啪��','�{�茧','��������','���ꌧ');
	foreach($pref as $pref) {
	print('<option value="' . $pref . '">' . $pref . '</option>');
	}
}*/

//�s���{���I��
function prefecture(){
	$pref_gp = array('�k�C���E���k','�b�M�z�E�k��','�֓�','���C','�֐�','����','�l��','��B�E����');
	$pref =	array(
		array('�k�C��','�X��','�H�c��','��茧','�R�`��','�{�錧','������'),
		array('�R����','���쌧','�V����','�x�R��','�ΐ쌧','���䌧'),
		array('��錧','�Ȗ،�','�Q�n��','��ʌ�','��t��','�����s','�_�ސ쌧'),
		array('���m��','�É���','�򕌌�','�O�d��'),
		array('���{','���Ɍ�','���s�{','���ꌧ','�ޗǌ�','�a�̎R��'),
		array('���R��','�L����','���挧','������','�R����'),
		array('������','���쌧','���Q��','���m��'),
		array('������','���ꌧ','���茧','�F�{��','�啪��','�{�茧','��������','���ꌧ')
	);

	for($num = 0; $num<count($pref_gp); $num++) {
			print('<optgroup label="' . $pref_gp[$num] . '">');
				foreach($pref[$num] as $pref_num[$num]) {
					print('<option value="' . $pref_num[$num] . '">' . $pref_num[$num] . '</option>');
				}
	}
}



//���N�����I��
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