<?php



$manager = new TemplateManager($link);

$id_login = $_SESSION['id'];

$req = $manager->getByIdLogin($id_login);

$count = 0 ; 

while($count < sizeof($req))

{
    $result = $req[$count];

require('views/espace.phtml');

    
    $count ++ ;
}




?>
