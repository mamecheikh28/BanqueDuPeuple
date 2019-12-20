<?php
$host = 'localhost';
$dbname = 'banquedupeuple';
$user = 'root';
$mdp ='';
try{
    $db = new PDO('mysql:host ='.$host.';dbname='.$dbname, $user, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $ex){
    die("Erreur lors de la connexion à la base de donnée".$ex->getMessage());
}
?>

