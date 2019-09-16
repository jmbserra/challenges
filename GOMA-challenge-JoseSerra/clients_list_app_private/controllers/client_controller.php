<?php
	require '../clients_list_app_private/properties/config.php';
	require "../clients_list_app_private/models/client.model.php";
	require "../clients_list_app_private/services/client.service.php";
	require "../clients_list_app_private/connection.php";

	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	if( $action == 'insert' ) {
		$client = new client();
		$connection = new connection();

		try{
			$client->setName($_POST['name']);
			$client->setEmail($_POST['email']);
			$client->setPhone($_POST['phone']);
			$client->setAddress($_POST['address']);
			$client->setLocation($_POST['location']);
			$client->setCountry($_POST['country']);

			$clientService = new clientService($connection, $client);
			$clientService->insert();
			
			header('location: index.php?included=1');
		} catch (InvalidArgumentException $e) {
			header('location: index.php?included=0&message='.$e->getMessage());
		}	
	} 

	else if($action == 'retrieve') {	
		$client = new client();
		$connection = new connection();

		$clientService = new clientService($connection, $client);
		$clients = $clientService->retrieve();
		$clients_size = sizeof($clients);

	} else if($action == 'last_three') {		
		$client = new client();
		$connection = new connection();

		$clientService = new clientService($connection, $client);
		$clients = $clientService->retrieve();
		$clients_size = sizeof($clients);
		$clients = array_slice($clients, -3, 3);
	}