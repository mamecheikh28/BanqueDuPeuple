 <?php

 $con = mysqli_connect('localhost','root','','banquedupeuple') or die(mysqli_error($con));
  $req ="SELECT  c.*,cp.*,sum('montant') as solde FROM clients as c left join compte cp on c.id=cp.id_c  group by cp.id_c";
  $res = mysqli_query($con,$req) or die(mysqli_error($con));

 

?>
<<!DOCTYPE html>
<html>
<head>
	<title>liste des mambre cotise</title>
  <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
  
</head>
<body>
  
	
   
</form>
</div>
	<h1>etat des comptes</h1>
 	<div id="tab">
 	<table table class="table table-bordered">  >
    
    

  <tr>

     <th>Id</th>
    
    <th>Nom</th></td>
     <th>Prenom</th>
    
     <th>adress</th>
        
       <th>telephon</th>
        <th>solde</th>
       <th>Actions</th>
       <th>action2</th>
  </tr>
  <?php while($clients=mysqli_fetch_array($res)) {?>
    <tr>
      <td><?php  echo$clients['id'] ?></td>
      <td><?php echo $clients['nom']  ?></td>
      <td><?php echo $clients['prenom']  ?></td>
  
      <td><?php echo $clients['adresse']  ?></td>
      <td><?php echo $clients['telephon']  ?></td>
      <td><?php echo $clients['solde'] ?></td>
            
    

      
    <?php  } ?>
  </tr>
    
 </tr></td>
  </table>

 <button> <a href ="ajout.php">nouvelle tarasaction </a></button>
   


</body>
</html>