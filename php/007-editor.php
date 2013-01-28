<?php
$conn = mysql_connect('localhost','root','root');
if(!$conn){
	echo 'connect failed';
	exit;
}

//选库
$sql = 'use tuozi';
//发送sql，进行查询。沿着conn通道进行查询
$rs = mysql_query($sql,$conn);

//设置字符集
$sql = 'set names utf8';
$rs = mysql_query($sql,$conn);
$id = $_GET['id'];
//查询语句
$sql = ' stu where id='.$id.'';


$variable = array();

$rs = mysql_query($sql,$conn);
while($row = mysql_fetch_assoc($rs)){
	array_push($variable, $row);
}

?>