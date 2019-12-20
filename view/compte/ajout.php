
<!DOCTYPE html>
<html>
<head>
	<title> ajout un compte</title>
  <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container"><br><br>
	<form method="POST"> 
		<h1> nouvaux compte</h1>
     
      <div>
      <label>montant:</label>
      <input class="form-control" type="text" name="solde">

      </div>
      <br><br>
      
       <div>
         <label>clients</label>
         <select name="id_c">
         <option class="form-control" value="" selected>---Choisir un clients ---</option>
         <?php
            while ($clients = mysqli_fetch_array($res2)) {
              ?>
                <option value="<?=$clients['id']?>"><?=$clients['nom']?></option>
              <?php
            }
          ?>
       </select>
       </div>
      
      <br><br>
      <button class="btn btn-success" type="submit" name="ajout">ajouter</button>
      <button class="btn btn-danger" type="submit" name="annuller">annuller</button>
    <button type="button" class="btn btn-info"><a href="etat.php" >voir la liste</a></button>
   
	</form>
</div>
 
	
	</body>	
<script type="text/javascript">
  function listclients(){
    window.location.href = "etat.php"
  }
</script>


</html>








<<?php 
 $con=mysqli_connect('localhost','root','','banquedupeuple') or die(mysqli_error($con));
 $req = "SELECT * FROM clients";
 $res2 = mysqli_query($con,$req) or die(mysqli_error($c));
 

 ?>


<?php
    if(isset($_POST['ajouter']))
    {
        extract($_POST);

        $req = "INSERT INTO clients 
       
        VALUES ('$nom','$prenom','$adresse',$telephon)";

        $resultat = mysqli_query($c,$req) or die(mysqli_error($c));
        if($resultat)
        {
            echo "<h3 style='color:#00FF00;'>insertion reuissi</h3>";
        }
        else{
          echo "<h3 style='color:#FF0000;'>Donnees non ajouter</h3>";
        }
    }
?>
