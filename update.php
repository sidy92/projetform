<?php

if(isset($_GET['id']) && $_GET['id'] != '' ):
    
    require('user.php');

    $userId = $_GET['id'];
    $user = selectUser($userId);

endif;

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Mise à jour</title>
    </head>
    
    <body>

        <h1 style="font-family: inherit;"><center>Modification de vos informations</center></h1>

        <p>
            Entrez vos informations
        </p>

        <form id="myform"; action="_validation_formulaire.php" method="post">
            <fieldset style="border-color: rgb(209, 215, 248);">
                <legend style="color: rgb(140, 156, 248);font-size: x-large;">
                    <strong>Informations personnelles</strong>
                </legend>
                <p1>
                    <p>
                        Genre :<input type="radio" name="genre" id="1" value="1" />
                        <label for="1">Monsieur</label>
                        <input type="radio" name="genre" id="2" value="2" checked/>
                        <label for="2">Madame</label>
                    </p>
                    <p>
                        <label for="nom">Votre nom :</label>
                        <input type="name" name="nom" id="mon_nom" value="<?=(isset($user['nom']))? $user['nom'] : '' ?>" required/>
                    </p>
                    <p>
                        <label for="prenom">Votre prénom :</label>
                        <input type="name" name="prenom" id="mon_prenom" value="<?=(isset($user['prenom']))?$user['prenom']:''?>" placeholder="Raul" required/>
                    </p>
                    <p>
                        <label for="date_naissance">Votre date de naissance :</label>
                        <input type="date" name="date_naissance" id="date_naissance" value="<?=(isset($user['date_naissance']))?$user['date_naissance']:''?>" placeholder="JJ/MM/AAAA"/>
                    </p>
                    <p>
                        <label for="ville">Ville :</label>
                        <input type="texte" name="ville" id="ville" value="<?=(isset($user['ville']))?$user['ville']:''?>" placeholder="Saint-Denis" />
                    </p>
                    <p>
                        <label for="adresse_postal">Code postal :</label>
                        <input type="number" name="cpostal" id="adresse_postal" value="<?=(isset($user['cpostal']))?$user['cpostal']:''?>" min="00001" max="99999" value="cpostal" placeholder="93000" />
                    </p>
                    <p>
                        <label for="adresse">Adresse :</label>
                        <input type="texte" name="adresse" id="adresse" value="<?=(isset($user['adresse']))?$user['adresse']:''?>" placeholder="12 rue des pommes" />
                    </p>
                    <p>
                        <label for="mail">Votre adresse mail :</label>
                        <input type="email" name="mail" id="mail" value="<?=(isset($user['mail']))?$user['mail']:''?>" placeholder="raul00@gmail.com" />
                    </p>
                    <p>
                        <label for="phone">Téléphone :</label>
                        <input type="tel" name="phone" id="phone" value="<?=(isset($user['phone']))?$user['phone']:''?>" placeholder="07.12.34.56.78"/>
                    </p>
                    <p>
                        <label for="pwd">Mot de passe :</label>
                        <input type="password" value="" name="mot_de_passe" value="<?=(isset($user['mot_de_passe']))?$user['mot_de_passe']:''?>" id="mot_de_passe" required/>
                    </p>
                    <p>
                        <label for="pwd">Confirmation mot de passe :</label>
                        <input type="password" value="" name="conf_mot_de_passe" value="<?=(isset($user['conf_mot_de_passe']))?$user['conf_mot_de_passe']:''?>" id="conf_mot_de_passe" required/>
                    </p>
                    <p>
                        <label for="logo">Votre logo :</label>
                        <input type="file" name="logo" id="logo" value="<?=(isset($user['logo']))?$user['logo']:''?>" placeholder="logo, photo ou avatar" />
                    <p>

                    <input type="hidden" value="<?=(isset($user['id_user']))?$user['id_user']:''?>" id="id_user" name="id_user"/>
                </p1>
            </fieldset>

            <div>
                <fieldset style="border-color: blue;">
                    <legend style="color: blue;font-size: x-large;">
                        <strong>Merci de votre inscription !</strong>
                    </legend>
                    <p4>
                        <button type="submit" class="button" style="background-color: blue;">
                            <input type="submit" value="Valider">
                        </button>
                        <button2 type="reset" class="button">
                                <input type="reset" value="Réinitialiser"
                        </button>
                    </p4>
                </fieldset>
            </div>
        </form>

    </body>
</html>