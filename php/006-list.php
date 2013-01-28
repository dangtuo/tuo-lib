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

//查询语句
$sql = 'select * from stu';


$variable = array();

$rs = mysql_query($sql,$conn);
while($row = mysql_fetch_assoc($rs)){
	array_push($variable, $row);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>你好</title>
	</head>
	<body>
		<h1>数据库查询列表</h1>
		<table border="1">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>yy</td>
				<td>edit</td>
			</tr>
			<?php
			foreach ($variable as $value) {
			echo "<tr>";
			//echo '<td>'.$value['id']."<br/>";
			echo '<td>'.$value['id'].'</td>';
			echo '<td>'.$value['sname'].'</td>';
			echo '<td>'.$value['yy'].'</td>';
			echo '<td><a href="005-form.php?id='.$value['id'].'">编辑</a></td>';
			echo "</tr>";
			//echo $html;
			}

			?>
		</table>
	</body>
</html>