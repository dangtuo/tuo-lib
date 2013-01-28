<?php

/**
 *   私有属性不能继承
 *   public protect 属性是可以继承的，并拥有权限。这些属性类似于家产，继承后拥有处理权。
 *                   1,父类有的，子类可以继承
 *                   1,父类有的，子类可以更改
 *                   1,父类没有，子类可以添加
 *   private  可以继承，但无权操作
 *   
 *   构造方法也可以继承 和普通方法一样
 *   
 *   
 *   
 *   
 *   
 */
class Human{
	private $wife = "小甜甜";
	public function tell(){
		echo $this->wife;
	} 
	public function cry(){
		echo '555555555';
	}

	public function pshow(){
		echo $this->wife;
	}
}

class Stu extends Human{
	private $wife = '凤姐';

	private $height = 180;
	public function sshow(){
		parent::pshow();
		echo "~~~~~~~~~~<br/>";
		echo $this->wife.'<br/>';
	}
}

$lisi = new Stu();

echo "<br/>";
$lisi->cry();
echo "<br/>";
$lisi->tell(); 
echo "<br/>";
$lisi->sshow(); 
echo "<br/>";

?>