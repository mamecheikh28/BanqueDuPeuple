<?php
require_once'../controller/compted.php';
    if(isset($_POST['ajouter']))
    {
        extract($_POST);

      $res=ajoutcompte($code,$Solde,$id_c)
       if($res){
        echo "resuir";
        
    }else
    {
        echo "votre message est ok!!!!";
    }
    header('location:../view/client/liste.php');
             
 
}
?>

