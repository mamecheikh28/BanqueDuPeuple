
<?php
require_once 'connexion.php';
function ajoutcompte($code,$Solde,$id_c)
{
    $sql = "insert into Compte values($code,$Solde,$id_c)";
    $conn = getcCnnexion();
    return $conn->exec($sql);
}
function updatecompt($id_c,$Solde){
    $sql="UPDATE  compte SET Solde=$Solde where  id=$id_c";
    $conn=getcCnnexion();
    return $conn->exec($sql);
}
function listecompte()
{
    $sql = "SELECT *FROM Compte";
    $conn = getcCnnexion();
    return $conn->query($sql);
}
function deletcmp($code){
    $req="DELETE compte where code= $code";
global $db;
return($db)->exec($req);
}
?>   

?>