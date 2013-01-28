<?php
$id = isset($_GET['id']) ? $_GET['id'] + 0 : 0;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>你好</title>
	</head>
	<body>
		<form action="004-mysql.php" method="GET">
		id:<?php
			echo '<input type="text" name="id" value="'.$id.'" />';
		?>
		sname:<input type="text" name="sname" />
		yy:<input type="text" name="yy" />
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>