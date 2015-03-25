<?php
	require_once "config.php";
	
        class db extends config {
	
		private $connection;
                
                public function __construct()
                {
                    $this->connect_db();
                }
                
				private function connect_db() 
                {
					$this->connection = mysql_connect($this->host, $this->login, $this->pass) or die("Error connect DB".mysql_error());
					mysql_select_db($this->db_name, $this->connection);
					mysql_query("SET NAMES utf8", $this->connection);
				}
                
                public function sql($query)
                {
                    $result = mysql_query($query, $this->connection);
                    if (!$result) die ("Error query".mysql_error());
                    return $result;
                }
	}
        
    $ob = new db();