<?php

if(isset($_SESSION['login']))
{
        session_destroy();
        setcookie('login',$_SESSION['login'],time() - 360,null,null,false,true);
	header('Location:home');
	exit;

}
else
{
header('Location:home');
	exit;
}
?>
