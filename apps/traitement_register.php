<?php

$manager = new UserManager($link);
if (isset($_POST['inscription']))
{
	try
	{        
                $manager = new UserManager($link);
		$user = $manager->create($_POST);
		
	        header('Location:login') ;
		exit;
	}
	catch (Exception $e)
	{
		$error = $e->getMessage();
	}
}
