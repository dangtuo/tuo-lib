<?php
/**
 * 
 * 
 * 
 * 
 *  
 */


class Mysql{

	private $host; 
	private $user; 
	private $pwd; 
	private $dbName; 
	private $charset; 
	
	public function __construct(){
		$this -> host = 'localhost';
		$this -> user = 'root';
		$this -> pwd = 'root';
		$this -> dbName = 'tuozi';
		$this -> charset = 'utf8';

		$rl = $this -> connect($this->host,$this->user,$this->pwd);
		//切换库 
		$this->dbName($this->dbName);
		//设置字符集
		$this->setChar($this->charset);
	}

	//连接mysql
	private function connect($h,$u,$p){
		$conn = mysql_connect($h,$u,$p);
		$this -> conn = $conn;
		return $conn;
	}

	//发送sql查询
	public function query($sql){
		return mysql_query($sql,$this->conn);
	}

	//切换数据库
	public function dbName($dbName){
		$sql = 'use '.$dbName;
		$this->query($sql);
	}

	//设置字符集
	public function setChar($char){
		$sql = 'set names '.$char;
		$this->query($sql);
	}

	//多行多列的查询
	public function getAll($sql){
		$list = array();
		$rl = $this->query($sql);
		if(!$rl) return false;
		while($row = mysql_fetch_assoc($rl)){
			$list[] = $row;
		}
		return $list;
	}

	//获取一行的数据
	public function getRow($sql){
		$rl = $this->query($sql);
		if(!$rl) return false;
		return mysql_fetch_assoc($rl);

	}

	//关闭资源
	public function close(){
		mysql_close($this->conn);
	}


}//end if Mysql

$mysql = new Mysql();
$sql = 'select * from stu where id = 2';
$rl = $mysql->query($sql);
if($rl){
	echo 'query succsee!';
}else{
	echo 'query failed!';
}
echo '<br/>';
print_r($mysql->getRow($sql));


?>

