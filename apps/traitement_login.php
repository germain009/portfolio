<?php

if (isset($_POST['login'] , $_POST['password']) && !empty($_POST['login']) && !empty($_POST['password']))
{
    $login = mysqli_real_escape_string($link,$_POST['login']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    $manager = new UserManager($link);


   
    /*$req = $manager->getAll();

    $count = 0 ;
    
    while($count <= sizeof($req))
    {

         $result = $req[$count] ;

         

         if($result->getLogin() == $login &&(password_verify($password, $result->getPassword()))) 
         {
               
               
             
                $_SESSION['id'] = $result->getId();
                $_SESSION['login'] = $login;
                setcookie('login',$_SESSION['login'],time() + 360,null,null,false,true);

                header('Location:home');
                exit;
               
               
               
          }
        else
                  {
                    header('Location:register');
                    exit;
                   }
          

        $count ++ ;

          
    }*/

    
    $req = $manager->getByLogin($login);

   if($req && ((password_verify($password, $req->getPassword()))))
   {
         

            
                $_SESSION['id'] = $req->getId();
                $_SESSION['login'] = $login;
                setcookie('login',$_SESSION['login'],time() + 360,null,null,false,true);

                header('Location:home');
                exit;



           
    

     }    


    

   
}

?>
