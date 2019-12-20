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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-primary navbar-fixed-top">    
    <div id="man">
    <table border="1" width="100%">
        <tr>
           <td>
              
        <li><a href="view/clients/ajoutclients.php"><font color="#FFFFFF">gestion des clients</font></a> </li> 
           </td>
           <td>
                <li><a href="view/compte/ajout.php"><font color="#FFFFFF">gestion des comptes</font></a> </li>

           </td> 
           <td>
                <li><a href="view/clients/liste.php"><font color="#FFFFFF">liste des clients</font></a> </li>

           </td> 

        </tr>
    </table>
</div>
</nav>
<div>
   

</div>
    
  <h1 align="center">Liste Des clients</h1><br><br>
  <div id="tab">
  <table table class="table table-bordered">  
    
    <tr>

  <tr>

     <th>Id</th>
    
    <th>Nom</th></td>
     <th>Prenom</th>
    
     <th>adress</th>
        
       <th>telephon</th>
        <th>solde</th>
       
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
    
 </tr></td>
  
    </div>
    <div>
</script>
    


</body>
</html>
