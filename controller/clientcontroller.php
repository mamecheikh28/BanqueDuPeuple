<?php
require_once'../controller/clientd.php';
if(isset($_POST['ajout']))
{
    
    extract($_POST);
   $res =ajoute($IdCl,$Nom,$Prenom,$Adresse,$Telephon)
    
    if($res){
        echo "resuir";
        
    }else
    {
        echo "votre message est ok!!!!";
    }
    header('location:../view/clients/liste.php');
             
 
}





?>
    

