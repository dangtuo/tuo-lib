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


//--增加一条数据
$id = rand(1,100);
$sname = substr(str_shuffle('abcdefghigklmnopqrstuvwxyz'),0,6);
$sql = "insert into stu values ($id,'$sname','$sname')";

//--删除一条数据

$id = isset($_GET['id']) ? $_GET['id'] + 0 : 0;

$sql = 'delete from stu where id = '.$id;

//--修改一条数据
$sname = addslashes($_GET['sname']);
$yy = addslashes($_GET['yy']);
echo $sname.'~~~~'.$yy.'<br/>';
//exit();
$sql = "update stu set sname='$sname',yy='$yy' where id = $id";
//echo $sql;

//查询语句
//$sql = 'select * from stu';




$rs = mysql_query($sql,$conn);
while($row = mysql_fetch_assoc($rs)){
	print_r($row );
	echo '<br/>';
}


echo '<br/>';
if($rs){
	echo 'query success!';
}else{
	echo 'query failed';
}




















?>