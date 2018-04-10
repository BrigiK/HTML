<?php

class DbQueries{
	
private $hostname = "localhost"; 
private $username = "root";
private $password = "";
private $dbName = "het_csoda";
private $conn;
	
	function __construct() {
		// Create connection
		$this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbName);
		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		}
		
		// change charset
		if (!$this->conn->set_charset("utf8")) {
		    printf("Error loading character set utf8: %s\n", $this->conn->error);
		    exit();
		} 	
	}
	
	function __destruct(){
		$this->conn->close();
	}
	
	public function getKerdes($idKerdes)
	{
		$sql = "select kerdes from kerdesek where kerdesek.id = ".$idKerdes;
	
		$result = $this->conn->query($sql);
	
		$kerdes = array();
		
		foreach ($result as $row) {
			foreach ($row as $column) {
				$kerdes[]=$column;
			}
		}
	
		$result->free();
		
		return isset($kerdes[0]) ? $kerdes[0] : null;
	}
	
	public function getValaszokForKerdes($idKerdes)
	{
		$sql = "select id, valasz from valaszok where id_kerdes = ".$idKerdes;
	
		$result = $this->conn->query($sql);
		
		$valaszok = array();
		
		foreach ($result as $row) {
			foreach ($row as $column) {
				$valaszok[]=$column;
			}
		}
		$result->free();
		
		return $valaszok;
	}
	
	public function getHelyesValasz($idKerdes)
	{
		$sql = "select id_helyes_v from kerdesek where kerdesek.id = ".$idKerdes;
	
		$result = $this->conn->query($sql);
	
		$helzesValasz = array();
		
		foreach ($result as $row) {
			foreach ($row as $column) {
				$helzesValasz[]=$column;
			}
		}
	
		$result->free();
		
		return $helzesValasz[0];
	}
}

