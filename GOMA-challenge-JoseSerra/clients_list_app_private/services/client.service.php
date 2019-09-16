<?php

class ClientService {

	private $connection;
	private $client;

	public function __construct(connection $connection,Client $client)
	{
		$this->connection = $connection->connect();
		$this->client = $client;
	}

	public function insert() {

		$query = 'insert into users(name,email,phone,address,location,country)values(:name,:email,:phone,:address,:location,:country)';

		$stmt = $this->connection->prepare($query);

		$stmt->bindValue(':name',$this->client->getName());
		$stmt->bindValue(':email',$this->client->getEmail());
		$stmt->bindValue(':phone',$this->client->getPhone());
		$stmt->bindValue(':address',$this->client->getAddress());
		$stmt->bindValue(':location',$this->client->getLocation());
		$stmt->bindValue(':country',$this->client->getCountry());
		$stmt->execute();
	}

	public function retrieve() {

		$query = <<<SQL
		
		SELECT name,email,phone,address,location,country
		FROM users
		ORDER BY id DESC
		SQL;

		$stmt =  $this->connection->prepare($query);
		$stmt ->execute();
		return $stmt ->fetchAll(PDO::FETCH_OBJ);
	}
}

?>