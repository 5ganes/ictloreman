<?php
	//error_reporting(0);
	class Dbconn{
		var $host;
		var $uname;
		var $psw;
		var $dbname;
		var $links;
		var $db;
		
		function Dbconn(){
			$this->host = "localhost";
			$this->uname = "root"; 		
			$this->psw = "";					
			$this->dbname = "ictan";
			$this->links = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->uname,$this->psw);
		}
		
		function exec($sql, $criteria){
			// echo '<pre>'; echo $sql; print_r($criteria); //die();
			$stmt = $this->links->prepare($sql);
			$stmt->execute($criteria);
			return $stmt;
		}

		function PDOQuery($sql){
			$stmt = $this->links->query($sql);
			return $stmt;
		}
		
		function exec2($sqlMain){
			//echo $sqlMain;
			$result = @mysql_query($sqlMain,$this->links);
			return $result;
		}
		
		function numRows($sql, $criteria){
			$stmt = $this->links->prepare($sql);
			$stmt->execute($criteria);
			return $stmt->rowCount();			
		}
		
		function affRows($stmt)
		{
			return $stmt->rowCount();			
		}
		
		function insertId()
		{
			return $this->links->lastInsertId();
		}
		
		function fetchArray($result)
		{
			return mysql_fetch_array($result);
		}	
		
		function fetchObject($result)
		{
			return mysql_fetch_object($result);
		}	
		
		function fetchAssoc($result)
		{
			return mysql_fetch_assoc($result);
		}
		
		function resetFetchCounter($result)
		{
			return mysql_data_seek($result, 0);
		}
		
		function commit()
		{
			return ($this -> exec("Commit"));
		}
		
		function begin()
		{
			return ($this -> exec("Begin"));
		}
		
		function rollback()
		{
			return ($this -> exec("Rollback"));
		}
		
		function Dbclose()
		{
			mysql_close($this->links);
		}			
	}	//Dbconn ends
?>
