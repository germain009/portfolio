<?php


$count = 0 ;

$manager = new TemplateManager($link);

$res = $manager->getAll();

while($count < sizeof($res))
{
    $result = $res[$count];


require('views/template.min.phtml');

    $count ++ ;

}

?>
