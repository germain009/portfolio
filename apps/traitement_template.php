<?php

if ( isset( $_POST['submit'] ) ) 
{

    // var_dump($_POST);
   
        $manager = new TemplateManager( $link );// $link => $this->link
        try {
            $tmplt = $manager ->create($_POST);

            header('Location:home');
            exit;
        }

        catch ( Exception $exception ){
            $error = $exception->getMessage();
        }
    
}



?>






