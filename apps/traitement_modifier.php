<?php

if(isset($_POST['submit']))
{
$id = $_GET['id'];

$manager = new TemplateManager($link);

$result = $manager->getById($id);


$req = $result->update($result);

}


?>
