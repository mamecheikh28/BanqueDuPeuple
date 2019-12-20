<?php
require_once 'connexion.php';
function ajout($IdCl,$Nom,$Prenom,$Adresse,$Telephon)
{
    $sql = "insert into Client values(null,'$Nom','$Prenom','$Adresse',$Telephon)";
    $conn = getcCnnexion();
    return $conn->exec($sql);
}
function affiche()
{
    $sql = "SELECT *FROM Client";
    $conn = getcCnnexion();
    return $conn->query($sql);
}
?>