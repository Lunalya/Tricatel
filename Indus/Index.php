<?php

require('crud/db.php');

$sql = "SELECT * from recette";
$request = $bdd->query($sql);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="assets/img/logo/logo1.png" />
    <title>Page d'accueil - Tricatel</title>

</head>
<body>
<div class="first-section">
<header>
    
    <div class="logo_nav">
        <div class="logo">
            <img src="assets/img/logo/logo1.png" width="100px"> <p>Tricatel</p>
        </div>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Recettes</a></li>
            <li><a href="login.php">Connexion</a></li>
        </ul>
    
    </nav>
    </div>

</header>

        <div class="slogan">
            <h1>  A chaque bouchée une nouvelle saveur.  </h1>

            <div class="dec_nos_recettes">
              
                <a href="#titre_recette">Découvrez nos recettes</a>
                
                <img src="assets/img/icones/fleche.png" width="50px">  
            </div>
        </div>
    </div>

    <!-- fonctions de tries -->

    <div class="sect_recettes">

        <div class="titre_recette">
            <img src="assets/img/icones/rectangle.png" height="10px" width="20px">
            <h2 id="titre_recette">Nos recettes</h2>
            <img src="assets/img/icones/rectangle.png" height="10px" width="20px">
        </div>

        <form class="form_index" method="POST">
         <div>
            
            <select name="type_plat" id="type_plat">
                <option value="">Types de plats</option>
                <option value="entrée">Entrée</option>
                <option value="plat">Plat</option>
                <option value="dessert">Dessert</option>
            </select>
        </div>

        <div>
            
            <select name="type_plat" id="type_plat">
                <option value="">Régime alimentaire</option>
                <option value="végé">Végétarien</option>
                <option value="vegan">Vegan</option>
                <option value="omni">Aucun</option>
            </select>
        </div>

        <div>
            
            <select name="type_plat" id="type_plat">
                <option value="">Pays d'origines</option>
                <option value="france">France</option>
                <option value="corée">Corée du sud</option>
                <option value="inde">Inde</option>
            </select>
        </div>
        </form>
     </div>

    <!-- fin du tries -->

    <div class="all_card">

    <?php
while ($row = $request->fetch())
{
    ?>

                <div class="card_dish">
                    <img src="<?= $row["photo"] ?>" >
                    <h3><?=  $row["nom_plat"] ?></h3>
                        <div class="categorie_card"> 
                        <?=  $row["pays"] ?> | <?=  $row["regime"] ?> | <?= $row["type_plat"] ?>
                        </div>
                    <p class="dish_text"> <?=  $row["descrip"] ?> </p>       
                </div>    
         
        <?php
    }

    ?>
    </div> 
        
  
        <div class="citation">
            <p>“ Les deux secrets d'un succès : la Qualité et la Créativité. ”</p>
            <div class="source">
                <p> Paul Bocuse </p>
            </div>
        </div>


<footer>
    <div class="foot1">
        <div class="logo">
            <img src="assets/img/logo/logo.png" width="300px">
        
        </div>
        <div class="partenaires">
            <h5>Nos partenaires :</h5>
            <ul>
                <li>Findus</li>
                <li>Panzani</li>
                <li>Lustucru</li>
                <li>Fleury Michon</li>
                <li>Herta</li>
            </ul>
        </div>
        <div class="maps">
            <img src="assets/img/maps.png" width="400px">
        </div>
    </div>
    <div class="mention">
        <h6>Mention legales</h6>
    </div>
</footer>

</body>
</html>