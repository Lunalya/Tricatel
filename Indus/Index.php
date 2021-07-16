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
            <img src="assets/img/logo/logo1.png" width="100px"> <p class='Nom'>Tricatel</p>
        </div>
    <nav class="nav1">
        <ul class= "ul1">
            <li class="li1"><a class="a1" href="login.php">Connexion</a></li>
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
    </div>

      <nav class="nav2">

      
  <ul class="ul2bis">
    <li class="deroulant li2"><a class="a2" href="#non">Types de plats &ensp;</a>
      <ul class="sous ">
        <li class="li2"><a  class="a2 btn active" onclick="filterSelection('all')"  href="#recet">All</a></li>
        <li class="li2"><a  class="a2 btn" onclick="filterSelection('Entrée')" href="#recet">Entrée</a></li>
        <li class="li2"><a  class="a2 btn" onclick="filterSelection('Plat')" href="#recet">Plat</a></li>
        <li class="li2"><a  class="a2 btn" onclick="filterSelection('Dessert')" href="#recet">Dessert</a></li>
      </ul>
    </li>
  </ul>
    <ul class="ul2bis">
    <li class="deroulant li2"><a class="a2" href="#non">Régimes alimentaires &ensp;</a>
      <ul class="sous ">
        <li class="li2"><a  class="a2 btn active" onclick="filterSelection('all')"  href="#recet">All </a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Végan')" href="#recet">Végan</a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Végétarien')" href="#recet">Végétarien</a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Aucun')" href="#recet">Aucun</a></li>
      </ul>
    </li>
    </ul>

    <ul class="ul2bis">
    <li class="deroulant li2"><a  class="a2"  href="#non">Pays d'origine &ensp;</a>
      <ul class="sous">
        <li class="li2"><a  class="a2 btn active" onclick="filterSelection('all')"  href="#recet">All </a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Indien')" href="#recet">Indien</a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Coréen')" href="#recet">Coréen</a></li>
        <li class="li2"><a class="a2 btn" onclick="filterSelection('Français')" href="#recet">Français</a></li>
      </ul>
    </li>
  </ul>
      </nav>
    </div>

    

    <!-- fin du tries -->

    <div class="all_card container">

    <?php
while ($row = $request->fetch())
{
    ?>

                <div id="recette" class="card_dish filterDiv <?= $row["type_plat"]; ?> <?=  $row["pays"] ?> <?=  $row["regime"] ?>">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
 
</script>
</body>
</html>