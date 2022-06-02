<?php 
//Récupération du fichier de la classe DbTools 
require('DbTools.php');
//Creation de l'objet connecté à la BDD pour réaliser des traitements 
$bdd = new DbTools;

//Récupération de l'id à supprimer
$userId = $_GET['id'];

//Création de la requête SQL qui va supprimer un element
$sqlDelete = "DELETE FROM utilisateurs WHERE id_user = '$userId'";

//Execution de la requête SQL (query) à l'aide de notre objet de connexion à la BDD 
$bdd->query($sqlDelete);
?>
<h1>Vos informations ont bien été supprimées.</h1>

<p><a href="/projet/_formulaire.html">Ajouter un utilisateur</a></p>
<p><a href="/projet/index.php">Retour à la liste des utilisateurs</a></p>