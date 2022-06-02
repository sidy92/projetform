<?php

require('DbTools.php');
$bdd = new DbTools;

function selectAllUsers() {
    global $bdd;
    $sql = 'SELECT * FROM utilisateurs';
    $resultSet = $bdd->query($sql);
    $users = $resultSet->fetchAll(PDO::FETCH_CLASS);
    return $users;
}


function addUser() {
    global $bdd;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp = $_POST['cpostal'];
$passe = $_POST['mot_de_passe'];

$sql = 'INSERT INTO utilisateurs'
        . '(nom,prenom,adresse,cp,passe)'
        . "VALUES ('$nom','$prenom','$adresse','$cp','$passe')";

$bdd->query($sql);

}


function updateUser() {
    global $bdd;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp = $_POST['cpostal'];
$passe = $_POST['mot_de_passe'];
$userId = $_POST['id_user'];

$sql = 'UPDATE utilisateurs SET'
        . "nom = $nom,"
        . "prenom = $prenom,"
        . "adresse = $adresse,"
        . "cpostal = $cp,"
        . "mot_de_passe = $passe,"
        //. "mail = ,"
        . 'WHERE id_user = $IdUser ';
    
$bdd->query($sql);

}