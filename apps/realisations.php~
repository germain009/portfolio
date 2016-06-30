<?php

if(isset($_GET['id_login']))
{
$manager = new TemplateManager($link);

$id_login = $_GET['id_login'];

$req = $manager->getByIdLogin($id_login);

$count = 0 ; 

while($count < sizeof($req))

{
    $result = $req[$count];


require('views/realisations.phtml');

    
    $count ++ ;
}


}





?>
