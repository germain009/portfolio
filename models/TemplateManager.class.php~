<?php

class TemplateManager{

private $link;

public function __construct($link)
	{
		$this->link = $link;
	}
public function getById($id) // récup produit par id
	{
		$id=intval($id);
		$query="SELECT * FROM template WHERE id=".$id;
		$res=mysqli_query($this->link,$query);
		$template=mysqli_fetch_object($res,"Template",[$this->link]);
		return $template;
	}



public function getByIdLogin($id_login)
	{
		$list = [];
                $id_login = intval($id_login);
                $query="SELECT * FROM template WHERE id_login ='".$id_login."'";
		$res = mysqli_query($this->link, $query);
		while ($template = mysqli_fetch_object($res, "Template", [$this->link]))
			$list[] = $template;
		return $list;
}

public function getAll()
	{
		$list = [];
		$query = "SELECT * FROM template";
		$res = mysqli_query($this->link, $query);
		while ($info = mysqli_fetch_object($res, "Template", [$this->link]))
			$list[] = $info;
		return $list;
}


public function create($data)
	{
		$template = new Template($this->link);
		if (!isset($data['image1']))
			throw new Exception("Paramètre manquant: image1");
                if (!isset($data['image2']))
			throw new Exception("Paramètre manquant: image2");
                if (!isset($data['image3']))
			throw new Exception("Paramètre manquant: image3");
		if (!isset($data['annonce']))
			throw new Exception("Paramètre manquant: annonce");
		if (!isset($data['photo_prod_1']))
			throw new Exception("Paramètre manquant: photo_prod_1");
		if (!isset($data['photo_prod_2']))
			throw new Exception("Paramètre manquant: photo_prod_2");
                if (!isset($data['photo_prod_3']))
			throw new Exception("Paramètre manquant: photo_prod_3");
		if (!isset($data['photo_prod_4']))
			throw new Exception("Paramètre manquant: photo_prod_4");
		
                if (!isset($data['nom_prod_1']))
			throw new Exception("Paramètre manquant: nom_prod_1");
		if (!isset($data['nom_prod_2']))
			throw new Exception("Paramètre manquant: nom_prod_2");
                if (!isset($data['nom_prod_3']))
			throw new Exception("Paramètre manquant: nom_prod_3");
		if (!isset($data['nom_prod_4']))
			throw new Exception("Paramètre manquant: nom_prod_4");
		if (!isset($data['ville']))

                if (!isset($data['desc_prod_1']))
			throw new Exception("Paramètre manquant: desc_prod_1");
		if (!isset($data['desc_prod_2']))
			throw new Exception("Paramètre manquant: desc_prod_2");
                if (!isset($data['desc_prod_3']))
			throw new Exception("Paramètre manquant: desc_prod_3");
		if (!isset($data['desc_prod_4']))
			throw new Exception("Paramètre manquant: desc_prod_4");
		if (!isset($data['message_perso']))
			throw new Exception("Paramètre manquant: annonce_perso");
		if (!isset($data['image_fin']))
			throw new Exception("Paramètre manquant: image_fin");
                
		
		$template->setImage1($data['image1']);
                $template->setImage2($data['image2']);
                $template->setImage3($data['image3']);

                $template->setAnnonce($data['annonce']);

                $template->setPhotoProd1($data['photo_prod_1']);
                $template->setPhotoProd2($data['photo_prod_2']);
                $template->setPhotoProd3($data['photo_prod_3']);
                $template->setPhotoProd4($data['photo_prod_4']);

                $template->setNomProd1($data['nom_prod_1']);
                $template->setNomProd2($data['nom_prod_2']);
                $template->setNomProd3($data['nom_prod_3']);
                $template->setNomProd4($data['nom_prod_4']);

                $template->setDescProd1($data['desc_prod_1']);
                $template->setDescProd2($data['desc_prod_2']);
                $template->setDescProd3($data['desc_prod_3']);
                $template->setDescProd4($data['desc_prod_4']); 

                $template->setMessagePerso($data['message_perso']);
                $template->setImageFin($data['image_fin']);
               
                

		
		$image1 = mysqli_real_escape_string($this->link, $template->getImage1());
                $image2 = mysqli_real_escape_string($this->link, $template->getImage2());
                $image3 = mysqli_real_escape_string($this->link, $template->getImage3());

                $annonce = mysqli_real_escape_string($this->link, $template->getAnnonce());

                $photo_prod_1 = mysqli_real_escape_string($this->link, $template->getPhotoProd1());
                $photo_prod_2 = mysqli_real_escape_string($this->link, $template->getPhotoProd2());
                $photo_prod_3 = mysqli_real_escape_string($this->link, $template->getPhotoProd3());
                $photo_prod_4 = mysqli_real_escape_string($this->link, $template->getPhotoProd4());

                
                $nom_prod_1 = mysqli_real_escape_string($this->link, $template->getNomProd1());
                $nom_prod_2 = mysqli_real_escape_string($this->link, $template->getNomProd2());
                $nom_prod_3 = mysqli_real_escape_string($this->link, $template->getNomProd3());
                $nom_prod_4 = mysqli_real_escape_string($this->link, $template->getNomProd4());

                
                $desc_prod_1 = mysqli_real_escape_string($this->link, $template->getDescProd1());
                $desc_prod_2 = mysqli_real_escape_string($this->link, $template->getDescProd2());
                $desc_prod_3 = mysqli_real_escape_string($this->link, $template->getDescProd3());
                $desc_prod_4 = mysqli_real_escape_string($this->link, $template->getDescProd4());

                
                $message_perso = mysqli_real_escape_string($this->link, $template->getMessagePerso());
                $image_fin = mysqli_real_escape_string($this->link, $template->getImageFin());
                $id_login = intval($_SESSION['id']);

                $query = "INSERT INTO template (image1, image2, image3, annonce, photo_prod_1,photo_prod_2,
                	                            photo_prod_3,photo_prod_4,nom_prod_1,nom_prod_2,nom_prod_3,
                	                            nom_prod_4,desc_prod_1,desc_prod_2,desc_prod_3,desc_prod_4,
                	                            message_perso,image_fin,id_login)
		                  VALUES ('".$image1."', '".$image2."', '".$image3."', '".$annonce."', '".$photo_prod_1."', 
		                  	      '".$photo_prod_2."', '".$photo_prod_3."','".$photo_prod_4."', '".$nom_prod_1."', 
		                  	      '".$nom_prod_2."', '".$nom_prod_3."', '".$nom_prod_4."','".$desc_prod_1."', 
		                  	      '".$desc_prod_2."','".$desc_prod_3."', '".$desc_prod_4."',
		                  	      '".$message_perso."','".$image_fin."','".$id_login."')";
		                          $res = mysqli_query($this->link, $query);





                $query = "INSERT INTO templateBis (image1, image2, image3, annonce, photo_prod_1,photo_prod_2,
                	                            photo_prod_3,photo_prod_4,nom_prod_1,nom_prod_2,nom_prod_3,
                	                            nom_prod_4,desc_prod_1,desc_prod_2,desc_prod_3,desc_prod_4,
                	                            message_perso,image_fin,id_login)
		                  VALUES ('".$image1."', '".$image2."', '".$image3."', '".$annonce."', '".$photo_prod_1."', 
		                  	      '".$photo_prod_2."', '".$photo_prod_3."','".$photo_prod_4."', '".$nom_prod_1."', 
		                  	      '".$nom_prod_2."', '".$nom_prod_3."', '".$nom_prod_4."','".$desc_prod_1."', 
		                  	      '".$desc_prod_2."','".$desc_prod_3."', '".$desc_prod_4."',
		                  	      '".$message_perso."','".$image_fin."','".$id_login."')";
		                          $res = mysqli_query($this->link, $query);





	}


public function update(Template  $template)
	{
		$id = $template->getId();

                $image1 = mysqli_real_escape_string($this->link, $template->getImage1());
                $image2 = mysqli_real_escape_string($this->link, $template->getImage2());
                $image3 = mysqli_real_escape_string($this->link, $template->getImage3());

                $annonce = mysqli_real_escape_string($this->link, $template->getAnnonce());

                $photo_prod_1 = mysqli_real_escape_string($this->link, $template->getPhotoProd1());
                $photo_prod_2 = mysqli_real_escape_string($this->link, $template->getPhotoProd2());
                $photo_prod_3 = mysqli_real_escape_string($this->link, $template->getPhotoProd3());
                $photo_prod_4 = mysqli_real_escape_string($this->link, $template->getPhotoProd4());

                
                $nom_prod_1 = mysqli_real_escape_string($this->link, $template->getNomProd1());
                $nom_prod_2 = mysqli_real_escape_string($this->link, $template->getNomProd2());
                $nom_prod_3 = mysqli_real_escape_string($this->link, $template->getNomProd3());
                $nom_prod_4 = mysqli_real_escape_string($this->link, $template->getNomProd4());

                
                $desc_prod_1 = mysqli_real_escape_string($this->link, $template->getDescProd1());
                $desc_prod_2 = mysqli_real_escape_string($this->link, $template->getDescProd2());
                $desc_prod_3 = mysqli_real_escape_string($this->link, $template->getDescProd3());
                $desc_prod_4 = mysqli_real_escape_string($this->link, $template->getDescProd4());

                
                $message_perso = mysqli_real_escape_string($this->link, $template->getMessagePerso());
                $image_fin = mysqli_real_escape_string($this->link, $template->getImageFin());
                $id_login = intval($_SESSION['id']);
		
		$query = "UPDATE template SET 
		image1='".$image1."', image2='".$image2."', image3='".$image3."', 
		annonce='".$annonce."', photo_prod_1='".$photo_prod_1."',photo_prod_2='".$photo_prod_2."',photo_prod_3='".$photo_prod_3."',photo_prod_4='".$photo_prod_4."',nom_prod_1='".$nom_prod_1."',nom_prod_2='".$nom_prod_2."',nom_prod_3='".$nom_prod_3."',nom_prod_4='".$nom_prod_4."',desc_prod_1='".$desc_prod_1."',desc_prod_2='".$desc_prod_2."',desc_prod_3='".$desc_prod_3."',desc_prod_4='".$desc_prod_4."', message_perso='".$message_perso."', image_fin='".$image_fin."', id_login='".$id_login."'
		WHERE id=".$id;
		$res = mysqli_query($this->link, $query);
		if ($res)
			return $this->getById($id);
		else
			throw new Exception("Erreur interne");
	}


                
public function delete($id)
{
      
      $query = "DELETE FROM template WHERE id =".$id;
      $res=mysqli_query($this->link,$query);
     

}	

}

?>
