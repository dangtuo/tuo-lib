<?php

$ary = array('zhong','hua','ren','min','gong','he','guo');

//current "当前" 的意思，该函数是取出数组内部指针指向的单元的值
echo current($ary).'<br/>';//数组刚建立，指向第0个单元

//key 该函数是取出指针内部 指针指向的单元的“键”；
echo key($ary).'<br/>';


$ar = array('name'=>'zhangsan','age'=>12,'height'=>186);
for(;current($ar);next($ar)){
	echo key($ar).'~'.current($ar).'<br/>';
}


//指针循环数组时的陷阱
$ary1 = array(-3,-2,-1,0,1,2,3);

//for+游标操作
//for(;current($ary1);next($ary1)){
//	echo current($ary1).'<br/>';
//}

//如果数组某单元的值为 0，false,'0',null
//都将导致循环的退出

//怎么解决？
//print_r(each($ary1));
//print_r(each($ary1));

//each 不仅把当前指针指向的单元的信息组合成一个数组返回，并且自动把指针向尾部移动一位
//返回值是四个单元的数组1 value 0 key
//如果指针超出界限 则返回false


while($ceil = each($ary1)){
	echo $ceil[value].'~~~~~~<br/>';
}
echo '<br/>~~~~~~~~~~~~~~~~~~';
var_dump(each($ary1));
echo '<br/>~~~~~~~~~~~~~~~~~~';
for($a=0; $a <= 10; $a++){
	echo $a.'<br/>';
}

//数组函数
/*
count函数的参数，可以是数组，也可以是非数组
--数组／对象  返回数组／对象的单元／对象的属性个数
--NULL
--非数组，也非NULL，返回1

--count($ary,true); 第二个参数为true时表示递归计算元素个数
*/
echo '~~~~~~function_count---array~~~~~~~~~~~~<br/>';
echo count($ary1);

echo '<br/>~~~~~~function_count---NULL~~~~~~~~~~~~<br/>';
echo count(null);

echo '<br/>~~~~~~function_count---string~~~~~~~~~~~~<br/>';
echo count('string');

/*
array_key_exists
用来判断某一个给定的键名或索引是否存在于数组中
*/


$keyArray = array('age'=>98,'height'=>176,'area'=>'beijing');

echo '<br/>~~~~~~function---array_key_exists~~~~~~~~~~~~<br/>';
echo array_key_exists('height', $keyArray);


/*
array_flip
交换键值
*/



/*
in_array（）
用来判断某一个值是否存在于数组中
*/



/*
range();
生成一个指定范围的数组

array_sun();
计算一个数组所有单元的和
*/

echo '<br/>~~~~~~function---rang~~~~~~~~~~~~<br/>';
print_r(range(0,10));
echo '<br/>';

echo array_sum(range(0,20));



/*
array_unique();
数组去重

*/

echo '<br/>~~~~~~function---rang~~~~~~~~~~~~<br/>';
print_r(range(0,10));
echo '<br/>';

echo array_sum(range(0,20));


/*
array_shift();
数组删除第一个元素，并返回删除的元素胡迪

array_unshift();
从头部追加单元，返回值时追加后新数组的长度

*/

echo '<br/>~~~~~~function---shift~~~~~~~~~~~~<br/>';
$ary = a
print_r(range(0,10));
echo '<br/>';

echo array_sum(range(0,20));













































?>