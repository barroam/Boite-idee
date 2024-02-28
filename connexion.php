<?php
$serveur = "localhost" ;
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "Boite_idee";
try {
    //creation d'une connexion
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees",$utilisateur,$mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion reussie";
    //Configuration pour gérer la connexion en cas d'erreur SQL
} catch (PDOException $e) {
    die("Erreur de connexion:".$e->getMessage());
}
?>
