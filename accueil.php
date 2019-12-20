
<?php

if(isset($_POST['envoi']))
{
 //connexion a la basse
    $con = mysqli_connect('localhost','root','','banquedupeuple') or die(mysqli_error($con));
    $lg = $_POST['logine'];
    $password = $_POST['pwd'];
    //requet utilisateurs
     $req = "SELECT *FROM utilisateurs WHERE   login = '$lg' AND  password =  $password ";
     $res = mysqli_query($con,$req) or die (mysqli_error($con));
     //teste le resultat

     if($res == false)
     {

      echo "erreur serveur";

     }
     else
     {

        $tab = mysqli_fetch_array($res);
        if($tab['login'] == $lg AND $tab['password']== $password)
        {
            
            header('location:index.php');
              
        }else
        {
            echo"identifient incorrect";
        }
     }


}








?>









<!DOCTYPE html>
<html>
<head>
    <title>utilsateur</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2 align="center">espace admins</h2>
     <div class="container">
   <form method="POST" action="">
    <label>adresse hmail</label>
    <input class="form-control" type="text" name="logine"><br><br>
    <label>mots de passe</label>
    <input class="form-control" type="passeword" name="pwd"><br><br>
    <input class="btn btn-primary" type="submit" name="envoi" value="connexion">
    



   </form>
</div>
</body>
</html>