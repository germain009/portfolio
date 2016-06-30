<?php
class UserManager
{
	private $link;
	// les autorisations et certaines vérifs sont faites au traitement_user.php
	//ci-dessous, le lien à la base de données via l'index
	public function __construct($link)
	{
		$this->link = $link;
	}
	// dans le manager, on travaille en direct avec la BDD



        public function getAll()
	{
		$list = [];
		$query = "SELECT * FROM users";
		$res = mysqli_query($this->link, $query);
		while ($info = mysqli_fetch_object($res, "User", [$this->link]))
			$list[] = $info;
		return $list;
        }

        public function verifLogin($login,$password)

        {

        $query = "SELECT * FROM users WHERE login = '".$login."' AND password = '".$password."'";
        $res = mysqli_query($this->link, $query);
        $verif = mysqli_fetch_object($res, "User", [$this->link]);
        return $verif ;
        


        }
	
	//ci-dessous, on récupère un user par l'id
	public function getById($id)
	{
		//ci-dessous, on transforme $id en entier
		$id=intval($id);
		// $query est la requête: on va chercher l'id dans la bdd
		$query="SELECT * FROM users WHERE id=".$id;
		//on applique la requête:
		$res= mysqli_query($this->link,$query);
		//on définit la variable user et on "l'envoie" dans l'objet user
		$user=mysqli_fetch_object($res,"User", [$this->link]);
		return $user;
	}

        public function getByLogin($login)
	{
		
		$login=intval($_POST['login']);
		// $query est la requête: on va chercher l'id dans la bdd
		$query="SELECT * FROM users WHERE login=".$login ;
		//on applique la requête:
		$res= mysqli_query($this->link,$query);
		//on définit la variable user et on "l'envoie" dans l'objet user
		$user=mysqli_fetch_object($res,"User", [$this->link]);
		return $user;
	}


	
	public function create($data)
	{
		$user = new User($this->link);
		// on va commencer à vérifier si les champs du formulaire de register sont Set:
		if (!isset($data['login'])) //n'est pas set
		{
			throw new Exception("Paramètre manquant:login"); //NB:VOIR TRAITEMENT!
		}
		
		if (!isset($data['email']))
		{
			throw new Exception("Paramètre manquant: email");
		}
		//on vérifie que les deux password existent
		if (!isset($data["password"],$data["password2"]))
		{
			throw new Exception("Paramètre manquant: password");
		}

		//on vérifie si les deux pass sont similaires:
		if ($data['password']!= $data['password2'])
		{
			throw new Exception("Les passwords ne correspondent pas");			
		}

		
		//on "rentre dans l'objet"
		//on "complète" l'objet user avec les paramètres qu'on a post
		$user->setLogin($data['login']);
	        $user->setEmail($data['email']);
		$user->setPassword($data['password']);
		


		// on va injecter en base de données:
		//1) On redéfinit les variables en "getant" dans l'objet, avant de les envoyer en bdd
		$login= mysqli_real_escape_string($this->link,$user->getLogin());
		$email= mysqli_real_escape_string($this->link,$user->getEmail());
		$password= mysqli_real_escape_string($this->link,$user->getPassword());
		
		//2)On fait la requête:
		$query="INSERT INTO users (login,email,password) 
				VALUES ('".$login."', '".$email."','".$password."')";
		$res=mysqli_query($this->link,$query);
		// on vérifie que la requête s'est bien exécutée:
		if($res)
		{
			$id=mysqli_insert_id($this->link); // on récupère le dernièr id 
			if($id)
			{
				$user=$this->getById($id); // on récupère l'user qui correspond à l'id
				return $user;
			}
			else
			{
				throw new Exception("Erreur interne");
			}
		}
		else
		{
			throw new Exception("Erreur interne");
			
		}
	}
}
