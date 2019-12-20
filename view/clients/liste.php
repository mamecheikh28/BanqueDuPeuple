



<?php 
 $con = mysqli_connect('localhost','root','','banquedupeuple') or die(mysqli_error($con));
if (isset($_GET['id'])) {
  $req = "DELETE FROM clients WHERE id = ".$_GET['id'];
    $res1 = mysqli_query($con,$req) or die(mysqli_error($c));
    header('location:liste.php');
}
 $req = "SELECT * FROM clients c left join compte p on c.id = p.id_c";
 $res = mysqli_query($con,$req) or die(mysqli_error($con));

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Liste des clients</title>
  <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css"/>
</head>
<body>
  
   
  <h1 align="center">Liste Des clients</h1>
  <div id="tab">
  <table table class="table table-bordered">  >
    
    <tr>

  <tr>

     <th>Id</th>
    
    <th>Nom</th></td>
     <th>Prenom</th>
    
     <th>adress</th>
        
       <th>telephon</th>
       
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
     
      <td>
                    <a class="btn btn-danger" href="liste.php?id=<?=$clients['id'];?>">Supprimer</a>
                   </td>
      <td>
        <a class="btn btn-primary" href="Modifier.php?>">Modifier</a>
      </td>
    

      
    <?php  } ?>
    
 </tr></td>
  </table>
     <button type="button" class="btn btn-success"><a href="ajoutclients.php"> Nouveau clients</a></button>
    </div>
    <div>

    

</html>








