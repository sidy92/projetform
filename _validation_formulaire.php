<?php
/*
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
require('user.php');

$isUpdate;
if (isset($_POST['id_user']) && $_POST['id_user'] != ''):
    updateUser();
    $isUpdate=true;
else:
    $isUpdate=false;
    addUser();

endif

/*
$users = selectAllUsers();


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp = $_POST['cpostal'];
$passe = $_POST['mot_de_passe'];
$IdUser = $_POST['id_user'];

$sql = "INSERT INTO utilisateurs (nom, prenom, adresse, cp, passe) VALUES ('$nom','$prenom','$adresse','$cp','$passe')";

//var_dump($sql);
$bdd->query($sql);


if ($IdUser !=''):
    updateUser();
    $isUpdate = true;
    /*$sql = 'UPDATE utilisateurs SET'
        . "nom = $nom,"
        . "prenom = $prenom,"
        . "adresse = $adresse,"
        . "cpostal = $cp,"
        . "mot_de_passe = $passe,"
        //. "mail = ,"
        . 'WHERE id_user = $IdUser ';

//echo $sql;

else:
    addUser();
        sql = 'INSERT INTO utilisateurs'
        . '(nom,prenom,adresse,cp,passe)'
        . "VALUES ('$nom','$prenom','$adresse','$cp','$passe') ";

$isUpdate = false;
endif;
*/
?>

<h1><center>Validation de votre formulaire</center></h1>
<p>Voici les informations que vous avez saisies :</p>
<ul>
    <?php echo '<li><strong>Nom : </strong>'.$_POST['nom'].'</li>'; ?>
    <?php echo '<li><strong>Prénom : </strong>'.$_POST['prenom'].'</li>'; ?>
    <?php echo '<li><strong>Date de naissance : </strong>'.$_POST['date_naissance'].'</li>'; ?>
    <?php echo '<li><strong>Ville : </strong>'.$_POST['ville'].'</li>'; ?>
    <?php echo '<li><strong>Code postal : </strong>'.$_POST['cpostal'].'</li>'; ?>
    <?php echo '<li><strong>Adresse : </strong>'.$_POST['adresse'].'</li>'; ?>
    <?php echo '<li><strong>Mail : </strong>'.$_POST['mail'].'</li>'; ?>
    <?php echo '<li><strong>Téléphone : </strong>'.$_POST['phone'].'</li>'; ?>
    <?php echo '<li><strong>Mot de passe : </strong>'.$_POST['mot_de_passe'].'</li>'; ?>
    <?php echo '<li><strong>Confirmation mot de passe : </strong>'.$_POST['conf_mot_de_passe'].'</li>'; ?>
</ul>


<?php /*if($isUpdate == true):
    echo '<p>Modification de l\'utilisateur OK !</p>'

    else:
        echo '<p>Ajout de l\'utilisateur OK !<p>'

endif;*/
?>


<p><a href="/projet/_formulaire.html">Retour au formulaire</a></p>

<p><a href="/projet/index.php">Voir la liste des utilisateurs</a></p>