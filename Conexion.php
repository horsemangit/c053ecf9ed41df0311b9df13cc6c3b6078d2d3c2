<?php

	Class Conexion extends PDO{

		private $dbname = "Funny";
		private $dbhost = "127.0.0.1";
		private $dbuser = "postgres";
		private $dbpass = "";
		private $dbport = "5432";
		private $conn;
		
		public function __construct(){
			try {
				$this->conn = new PDO("pgsql:host=$this->dbhost; port=$this->dbport;  dbname=$this->dbname; user=$this->dbuser; password=$this->dbpass");
			} catch (PDOException $e) {
				print "Error!: " . $e->getMessage();
            	die();				
			}			
		}

		public function prepare($sql, $options = NULL)
    	{
        	return $this->conn->prepare($sql);
    	}
	}





?>