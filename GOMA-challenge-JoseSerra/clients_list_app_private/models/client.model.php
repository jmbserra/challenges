<?php

class Client {
	private $id;
	private $name;
	private $email;
	private $phone;
	private $address;
	private $location;
	private $country;


	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		if(!isset($name) || $name === '')
		{
			throw new InvalidArgumentException('Name invalid');
		}
		$this->name = $name;
	}
	
	public function getEmail()
	{
		return $this->email;
	}


	public function setEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new InvalidArgumentException('Email invalid');
		}
		$this->email = $email;
	}

	public function getPhone()
	{
		return $this->phone;
	}


	public function setPhone($phone)
	{
		if(!isset($phone) || $phone === '')
		{
			throw new InvalidArgumentException('Phone invalid');
		}
		$this->phone = $phone;
	}

	public function getAddress()
	{
		return $this->address;
	}


	public function setAddress($address)
	{
		if(!isset($address) || $address === '')
		{
			throw new InvalidArgumentException('Address invalid');
		}
		$this->address = $address;
	}

	public function getLocation()
	{
		return $this->location;
	}


	public function setLocation($location)
	{
		if(!isset($location) || $location === '')
		{
			throw new InvalidArgumentException('Location invalid');
		}
		$this->location = $location;
	}


	public function getCountry()
	{
		return $this->country;
	}

	
	public function setCountry($country)
	{
		if(!isset($country) || $country === '')
		{
			throw new InvalidArgumentException('Country invalid');
		}
		$this->country = $country;
	}
}
