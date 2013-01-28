<?php

/**
*1，整形
*－－对应数学中的整数
*
*/

$age = 10000;
echo $age.'<br/>';
$age = 028;  //八进制
echo $age.'<br/>';

/*
2,浮点型
－－对应数学中的小数

0.23
0.45
*/
echo 'double~~~~~~~~~~~~~~~~~';
$f1 = 0.23;
echo $f1.'<br/>';

if((0.3 - 0.2) === 0.1){
	// 得出的是约数，不够精确
  echo 'ok'.'<br/>';
}else{
	echo 'no'.'<br/>';
}; 

/*
3，字符串
－－一串字符




*/
//单引号与双引号的区别？






/*
4，布尔型
－－真假
*/

echo 'bollean~~~~~~~~~~~~~~~~~';
//布尔值转变为字符串
echo true.'<br/>';
echo false;

/*
5，NULL型
－－只有一个值NULL  变量没有指向地址
*/

echo 'NULL~~~~~~~~~~~~~~~~~';
$null;
echo $null.'<br/>';
/*

6，常量
*/

echo 'define~~~~~~~~~~~~~~~~~<br/>';
define('height',100);
echo hei.'<br/>';
































?>