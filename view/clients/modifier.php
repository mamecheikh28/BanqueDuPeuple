<?php 
   define('SERVER', '127.0.0.1');
   define('USER', 'root');
   define('PWD', '');
   define('DB_NAME', 'banquedupeuple');
   $msg = "";
   //connexion a la base de donnees 
   $c = mysqli_connect(SERVER,USER,PWD,DB_NAME) or 
   die(mysqli_error($c));
   //modification
   if(isset($_POST['modifier']))
   {

      extract($_POST);

     
      $req = "UPDATE clients set nom='$nom', prenom = '$prenom' WHERE telephon = '$telephon'";
        
      $res2 = mysqli_query($c,$req) or die(mysqli_error($c));

      if($res2){
        $msg = "Modification Reuissi";
      }
   }
   if(isset($_POST['rechercher']))
   {
      extract($_POST);
      $req = "SELECT * FROM clients WHERE telephon = '$telephon'";
      //execution de la requete
      $res = mysqli_query($c,$req) or die(mysqli_error($c));
      if($res->num_rows <= 0)
      {
        $msg = "client n'existe Pas";
      }
      
   }

    //recuperation des departements
   $req = "SELECT * FROM compte";
   //execution de la requete
   $res2 = mysqli_query($c,$req) or die(mysqli_error($c));
   
   
    ?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" media="screen" href="../../public/css/bootstrap.min.css">
</head>
<body>
  <br><br>
  <br>
     <fieldset>
      <div class="container"">
       
       <form method="post">
          <label>telephone</label>
          <input class="form-control" type="search" name="telephon" placeholder="Entere un numero">
          <button type="submit" name="rechercher">Rechercher</button>
       </form>
       <br><
     </fieldset>
     <fieldset>
    
         <?php 

           if(isset($res) && $m = mysqli_fetch_array($res))
           {
            ?>
                 <form method="post">
                   <div>
                     <input class="form-control" type="text" readonly="true" name="telephon" value="<?=$m['telephon']?>">
                   </div>
 
                  <div>
                     <label for="nom"> Nom</label>  
                   <input class="form-control" type="text" name="nom" id="nom" value="<?=$m['nom'] ?>">  
                  </div>
                  <div>
                     <label for="prenom"> prenom</label>  
                   <input class="form-control" type="text" name="prenom" id="prenom" value="<?=$m['prenom'] ?>">  
                  </div>
                  <div>
                     <label for="adresse"> adresse</label>  
                   <input class="form-control"  type="text" name="adresse" id="adresse" value="<?=$m['adresse'] ?>">  
                  </div>
                  
                     
                    <div>
                      <label for="compte">compte</label>
                      <select class="form-control" name="id_c">
                        <?php
                           while ($d = mysqli_fetch_array($res2)) {
                             ?>
                              <option
                              <?php   
                                if($d['id_c'] == $m['id'])
                                   echo "Selected";
                              ?>
                               value="<?=$d['code']?>"><?=$d['solde']?></option>
                             <?php
                           }
                        ?>
                    </select>   
                    </div>
                    <div>
                      <button type="submit" name="modifier">Modifier</button>
                    </div>             
                 </form>
            <?php
           }
           echo "<h2 style='color: red'>$msg</h2>";
         ?>
        <button type="button" name="bt"><a href="liste.php"></a></button>
     </fieldset>
</body>

</html>