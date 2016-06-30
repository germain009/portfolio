<?php


if(isset($_SESSION['id']))
{
require('views/header_log.phtml');
}
else
   {

    require('views/header.phtml');

   }
?>
