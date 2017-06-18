<?php
	// Class,Object
	// Class データと関数
	// プロパティ：データ
	// メソッド：処理のかたまり、関数
	class Dog {
		public $name = 'Hachi';
		
		public function bark(){
			echo $this->name;
		}
	}
	
	// オブジェクトを生成する
	$a = new Dog();
	// echo "うぉーーーん";
	$a->bark();
	
	//echo $a->name;
	
?>