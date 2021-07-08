<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recette</title>
</head>
<body>

<form method="POST" action="data.php">

    Photo du plat:<br/>
    <input type="text" name="photo" required /><br/>

    Titre du plat:<br/>
    <input type="text" name="title" required /><br/>

    Type du plat:<br/>
    <input type="text" name="type" required /><br/>

    Régime alimentaire:<br/>
    <input type="text" name="regime" required /><br/> 

    Pays d'origine:<br/>
    <input type="text" name="pays" required /><br/>

    Description:<br/>
    <textarea name="contenu" required></textarea><br/>
    <input type="submit" name="submit" value="Publier"/>

</form>

    <ol>
        <?php

    $db = new PDO('mysql:host=localhost;dbname=gestion_recettes', 'root', '');
    $sql = "SELECT nom_plat from recette";
    $request = $db->query($sql);
    while ($row = $request->fetch())
    {
        ?>
            <li> <?php echo $row["nom_plat"] ?> </li>
        <?php
    }

    ?>

</body>
</html>