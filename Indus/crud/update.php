<?php
session_start();

error_reporting(-1);
ini_set('display_errors', 'On'); 

require('db.php');

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['photo']) && !empty($_POST['photo']) && isset($_POST['nom_plat']) && !empty($_POST['nom_plat']) && isset($_POST['regime']) && !empty($_POST['regime']) && isset($_POST['pays']) && !empty($_POST['pays']) && isset($_POST['descrip']) && !empty($_POST['descrip']) && isset($_POST['type_plat']) && !empty($_POST['type_plat'])){

        $id  = htmlspecialchars($_POST['id']);
        $photo = htmlspecialchars($_POST['photo']);
        $nom_plat   = htmlspecialchars($_POST['nom_plat']);
        $type_plat = htmlspecialchars($_POST['type_plat']);
        $regime = htmlspecialchars($_POST['regime']);
        $pays = htmlspecialchars($_POST['pays']);
        $descrip = htmlspecialchars($_POST['descrip']);

        $req = $bdd->prepare("UPDATE recette SET id = :id, photo = :photo, nom_plat = :nom_plat, type_plat = :type_plat, regime = :regime, pays = :pays, descrip = :descrip WHERE id = :id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':nom_plat', $nom_plat, PDO::PARAM_STR);
        $req->bindValue(':type_plat', $type_plat, PDO::PARAM_STR);
        $req->bindValue(':photo', $photo, PDO::PARAM_STR);
        $req->bindValue(':regime', $regime, PDO::PARAM_STR);
        $req->bindValue(':pays', $pays, PDO::PARAM_STR);
        $req->bindValue(':descrip', $descrip, PDO::PARAM_STR);
        $req->execute();

        $_SESSION['message'] = "L'utilisateur a bien été modifié";
        header('location: index.php');

    }
    else {
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){

    $id = htmlspecialchars($_GET['id']);

    $req = $bdd->prepare('SELECT * FROM recette WHERE id = :id');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $result = $req->fetch();

    if(!$result){
        $_SESSION['erreur'] = "Cet ID n'existe pas";
        header('location: index.php');
    }

}
else {
    $_SESSION['erreur'] = "L'URL demandé n'existe pas";
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../assets/css/update.css" rel="stylesheet" type="text/css">

    <title>Indus - Modification </title>
</head>

<body>
    <main class="container">
        <div class="row">
            <section class="col-8">
                <h1>Modifier une recette</h1>
                <?php
                    if(!empty($_SESSION['erreur'])){
                ?>
                    <div class="alert alert-danger" role="alert"> <?= $_SESSION['erreur'] ?></div>
                    <?= $_SESSION['erreur'] = "" ?>
                <?php        
                    }
                ?>
                <form method="post">
                    <div class="form-group">
                        <label for="title">Nom : </label>
                        <input type="text" id="nom_plat" name="nom_plat" class="form-control" value=" <?= $result['nom_plat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="chemin_photo">Chemin de la photo : </label>
                        <input type="text" id="photo" name="photo" class="form-control" value=" <?= $result['photo'] ?>">
                    </div>
                    <div class="form-group">
                    <label for="type_plat">Type de plat : </label>
                        <input type="text" id="type_plat" name="type_plat" class="form-control" value=" <?= $result['type_plat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="regime">Régime Alimentaire : </label>
                        <input type="text" id="regime" name="regime" class="form-control" value=" <?= $result['regime'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="origine">Pays d'origine : </label>
                        <input type="text" id="pays" name="pays" class="form-control" value=" <?= $result['pays'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="descrip">Description : </label>
                        <textarea type="textarea" id="descrip" name="descrip" class="form-control" value="text"><?= $result['descrip'] ?></textarea
                    </div>
                    <input type="hidden" value=" <?= $result['id'] ?>" name="id">
                    <button class="btn btn-warning">Modifier</button>
                    <a href="index.php" class="btn btn-secondary">Retour à l'accueil</a>
                </form>
            </section>
        </div>
    </main>
</body>
</html>
