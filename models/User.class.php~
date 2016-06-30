<?php
class User
{
	//propriétés
	private $id;
	private $login;
	private $email;
	private $password;
	
	private $link;

	
	public function __construct($link)
   	{
    	$this->link = $link;
   	}
	//méthodes
	//fonction suivante: lorsque appelée, va sortir l'Id de cet objet
	public function getId()
	{
		return $this->id;
	}
	public function getLogin()
	{
		return $this->login;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	public function getPassword()
	{
		return $this->password;
	}
	

	public function setLogin($login)
	{
		if (strlen($login)<2)
		{
			throw new Exception("Login trop court (<2)");
		}
		else if (strlen($login)>15)
		{
			throw new Exception("Login trop long (>15)");
		}
	
		$this->login = $login;
	}



	public function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL) == false)
		{
			throw new Exception("Ce n'est pas une adresse mail");
		}
		
		$this->email = $email;
	}

	public function setPassword($password)
	{
		if(strlen($password)<5)
		{
			throw new Exception("Mot de passe trop court (<5)");
		}
		// on va mettre dans l'objet le hash du pass en utilisant la méthode Password_bcrypt, avec le tableau d'options où on définit l'option Coût.
		$this->password= password_hash($password,PASSWORD_BCRYPT, array("cost"=>8));
		// UPDATE
	}

}
