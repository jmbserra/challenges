<?php
include '../clients_list_app_private/properties/config.php';
 
class Connection {

	private $host = host;
	private $dbname = dbname;
	private $user = username;
	private $pass = password;



	public function connect() {
		try{

			$connection = new PDO(
				

				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);

			return $connection;

		} catch(PDOException $e){
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}



?>