<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="u597679632_uinve";$this->pass="roxanayruth12@@";$this->host="mysql.hostinger.co";$this->ddbb="u597679632_ninve";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
