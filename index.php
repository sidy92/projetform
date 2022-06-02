<?php
/*
require('DbTools.php');
$bdd = new DbTools;
var_dump($bdd);

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp = $_POST['cpostal'];
$passe = $_POST['mot_de_passe'];

$sql = "INSERT INTO utilisateurs (nom, prenom, adresse, cp, passe) VALUES ('$nom','$prenom','$adresse','$cp','$passe')";

var_dump($sql);
$bdd->query($sql);

$sql = 'SELECT * FROM utilisateurs';
        $resultat = $bdd->query($sql);
        $mesUtilisateurs = $resultat->fetchAll(PDO::FETCH_CLASS); 
        foreach ($mesUtilisateurs as $user):
            echo $user->nom.'<br>';
            echo $user->prenom.'<br>';
            echo $user->adresse.'<br>';
            echo $user->cp.'<br>';
        endforeach;
*/
?>

<?php
require('modele/user.php');
$users = selectAllUsers();

//$bdd = new DbTools;
//var_dump($bdd);*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Projet PHP</title>
    </head>
    
    <body style="background-color: ">
        <h1><center>Liste des utilisateurs</center></h1>
        <div id="cadreAjax"></div>


        <table>
<?php
$sql = 'SELECT * FROM utilisateurs';
$resultat = $bdd->query($sql);
$mesUtilisateurs = $resultat->fetchAll(PDO::FETCH_CLASS);

foreach ($mesUtilisateurs as $user):
?>

<tr>
    <td><?=$user->nom?></td>
    <td><?=$user->prenom?></td>
    <td><?=$user->adresse?></td>
    <td><?=$user->cp?></td>
    <td>
        <a href="/projet/delete.php?id=<?=$user->id_user?>" id="delete">Supprimer</a>
    </td>
    <td>
        <a href="/projet/update.php?id=<?=$user->id_user?>">Modifier</a>
    </td>
</tr>

<?php
endforeach;
?>

        </table>

<br/>

<a href="/projet/_formulaire.html">Ajouter un utilisateur</a>   

    </body>


    <script type="text/javascript">
        document.getElementById('delete').addEventListener("click", deleteUser);


        function delteUser(evenement) {
                evenement.preventDefault();

                /*console.log('Test function OK !');*/

            }
    //On crée un objet XMLHttpRequest
    var ajax = new XMLHttpRequest();
    var url = document.getElementById('delete').href; //url que vous souhaitez transmettre au serveur web. Ici on demande la page 'ajax'.
    
    //On initialise notre requête avec open()
    ajax.open("GET", url, true);

    //On envoie la requête
    ajax.send();

    ajax.onload = function(){
     if (ajax.status == 200){
         var reponse = ajax.response;
         document.getElementById('cadreAjax').innerHTML = reponse;
         console.log(reponse);
     } 
     else{
         console.log('Impossible de récupérer la demande Ajax !');
     }
   }

</html>