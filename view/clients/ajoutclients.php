<?php

$con = mysqli_connect('localhost','root','','banquedupeuple') or die(mysqli_error($con));
$req= "SELECT *FROM clients";
$ress= mysqli_query($con,$req) or die(mysqli_error($con));



?>



<!DOCTYPE html>
<html>
<head>
    <title> ajout un nouveau </title>
  <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container"><br><br>
    <form method="POST" action="..controller/clientcontroller.php
    "> 
        <h1> nouvaux client</h1>
      <div>
      <label>nom :</label>
      <input class="form-control" type="text" name="nom">

      </div><br><br>
      <div>
      <label>prenom:</label>
      <input class="form-control" type="text" name="prenom">

      </div>
      <br><br>
      <div>
      <label>adresse:</label>
      <input class="form-control" type="text" name="adresse">
      </div>
      <<div>
      <label>telephone:</label>
      <input class="form-control" type="text" name="telephon">
      </div>
      
      <br><br>
      <button class="btn btn-success" type="submit" name="ajout">ajouter</button>
      <button class="btn btn-danger" type="submit" name="annuller">annuller</button><br><br>
      <button ><a href="liste.php" >voir la liste</a></button>

    </form>
</div>
    
    </body> 

</html>








































<?php
if(isset($_POST['ajout']))
{
    
    extract($_POST);
    $req = "INSERT INTO clients
    (nom,prenom,adresse,telephon) 
    VALUES('$nom','$prenom','$adresse','$telephon')";
    $res = mysqli_query($con,$req) or die(mysqli_error($con));
    if($res){
        echo "resuir";
    }else
    {
        echo "votre message est ok!!!!";
    }

}





?>
    


