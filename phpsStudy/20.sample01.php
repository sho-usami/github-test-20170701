<?php
	// Class,Object
	// Class �f�[�^�Ɗ֐�
	// �v���p�e�B�F�f�[�^
	// ���\�b�h�F�����̂����܂�A�֐�
	class Dog {
		public $name = 'Hachi';
		
		public function bark(){
			echo $this->name;
		}
	}
	
	// �I�u�W�F�N�g�𐶐�����
	$a = new Dog();
	// echo "�����[�[�[��";
	$a->bark();
	
	//echo $a->name;
	
?>