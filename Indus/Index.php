<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="assets/img/logo1.png" />
    <title>Page d'accueil - Tricatel</title>

</head>
<body>
<div class="first-section">
<header>
    
    <div class="logo_nav">
        <div class="logo">
            <img src="assets/img/logo1.png" width="100px"> <p>Tricatel</p>
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
              
                <a href="#">Découvrez nos recettes</a>
                
                <img src="assets/img/fleche.png" width="50px">  
            </div>
        </div>
    </div>

    <!-- fonctions de tries -->

    <div class="sect_recettes">

        <div class="titre_recette">
            <img src="assets/img/rectangle.png" height="10px" width="20px">
            <h2>Nos recettes</h2>
            <img src="assets/img/rectangle.png" height="10px" width="20px">
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
            <div class="lign_card">

                <div class="card_dish">
                    <img src="assets/img/bebinca.jpg" Alt="Dessert indien Bebinca" >
                    <h3>Bebinca</h3>
                        <div class="categorie_card"> 
                            Indien | Végétarien | Dessert
                        </div>
                    <p class="dish_text">Dessert à base de noix de coco et de beurre clarifié appelé « ghee » venue tout droit de Goa</p>
                        <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                </div>

                <div class="card_dish">
                    <img src="assets/img/bibimbap.jpg" alt="Plat coréen Bibimbap" >
                    <h3>Bibimbap</h3>

                        <div class="categorie_card"> 
                            Coréen | Aucun | Plat
                        </div>
                    <p class="dish_text">L’un des plats les plus emblématiques de la cuisine coréenne est sans conteste le bibimbap. 
                    Il s’agit d’un plat complet composé de riz mélangé avec des légumes, de la viande,
                     un œuf et de la pâte de piment rouge.
                     avant de manger, hop, on mélange.<br/>

                    Pour rester dans les règles de l’art, il faudrait aussi servir le bibimbap dans un bol en pierre ou en terre préalablement chauffé. 
                    Cela permet la formation d’une couche de riz croustillant au fond du plat.
                    </p>

                    <div class="Mybtn">
					    <a href="#">Voir plus</a>
				    </div>
                </div>

                    <div class="card_dish">
                        <img src="assets/img/soe_galb.jpg" alt="plat coréen Soe-Galbijjim" >
                        <h3>Soe-Galbijjim</h3>

                        <div class="categorie_card"> 
                            Coréen | Aucun | Plat
                         </div>
                        <p class="dish_text"> Plat composé de côtes de bœuf braisées avec des radis blancs ou des champignons parfumés,
                        des légumes et un assaisonnement. 
                        C’est un plat coréen typique, très apprécié de tous. 
                        </p>

                        <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                    </div>
                </div>
            </div>



            <div class="lign_card">

                <div class="card_dish">
                    <img src="assets/img/croziflette.jpg" alt="Plat français croziflette">
                    <h3>Croziflette</h3>
                        <div class="categorie_card"> 
                            Français | Aucun | Plat
                        </div>
                    <p class="dish_text">Inspirée de la tartiflette, la croziflette est un gratin de pâtes onctueux garni de crème et de reblochon.    <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                </div>

                <div class="card_dish">
                    <img src="assets/img/coqauvin.jpg" alt="plat français Coq au vin">
                    <h3>Coq au vin</h3>

                        <div class="categorie_card"> 
                            Français | Aucun | Plat
                        </div>
                    <p class="dish_text">Le coq au vin, c’est magique : d’abord parce que c’est le symbole vivant de la France, le coq. Un animal robuste et charpenté, mais qui révèle
                     toute sa délicatesse lorsqu’on le fait mijoter dans l’autre grand symbole hexagonal : le vin. Un bon vin rouge, un vin de Bourgogne naturellement,
                      qui va révéler toutes ses saveurs et sa suavité après une longue cuisson. 
                    Au final, on obtient un joli ballet dansant dans une sauce onctueuse, goûteuse, chaleureuse.
                    </p>

                    <div class="Mybtn">
					    <a href="#">Voir plus</a>
				    </div>
                </div>

                    <div class="card_dish">
                        <img src="assets/img/aloo.jpg" alt="Entrée indien Aloo-tikki" >
                        <h3>Aloo-tikki & Raïta</h3>

                        <div class="categorie_card"> 
                            Indien | Végan | Entrée
                         </div>
                        <p class="dish_text">  Beignets crousti-moelleux à base de pomme de terre, 
                            relevés de plein d’épices à déguster avec du yaourt au herbes. 
                            Essayez pour l’apéro ou en entrée, vous serez conquis
                        </p>

                        <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                    </div>
                </div>
            </div>

            <div class="lign_card">

                <div class="card_dish">
                    <img src="assets/img/sigemchi.jpg" alt="Entrée coréen sigeumchi namul" >
                    <h3>Sigeumchi namul</h3>
                        <div class="categorie_card"> 
                            Coréen | Végan | Entrée
                        </div>
                    <p class="dish_text">Le repas à la coréenne se caractérise par une grande variété de légumes assaisonnés servis avec les mets. 
                        On les appelle “Namul”. 

                    Cette version de Namul se prépare avec des épinards juste blanchis et mélangés à une sauce très goûteuse et des graines de
                    sésame pour le croustillant. 
                    <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                </div>

                <div class="card_dish">
                    <img src="assets/img/gambas.jpg" alt="Plat indien Curry de gambas" >
                    <h3>Curry de gambas à la noix de coco</h3>

                        <div class="categorie_card"> 
                            Indien | Aucun | Plat
                        </div>
                    <p class="dish_text">Parfumé, léger, rapide avec une sauce très intéressante
                         (avec du yaourt comme dans le butter chicken ou le poulet tikka) : un curry de gambas à la noix de coco.
                         Délicieux, frais, légèrement acidulé et doux à la fois grâce aux gambas,
                          il est très apprécié lors d’un repas minute mais aussi un peu raffiné et plein d’évasion.
                    </p>

                    <div class="Mybtn">
					    <a href="#">Voir plus</a>
				    </div>
                </div>

                    <div class="card_dish">
                        <img src="assets/img/tatin.jpg" alt="Dessert français tarte tatin">
                        <h3>Tarte tatin</h3>

                        <div class="categorie_card"> 
                            Français | Végétarien | Dessert
                         </div>
                        <p class="dish_text"> La légende raconte que la tarte tatin a été inventée par les sœurs Tatin à la fin du XIXè siècle.
                             Les deux sœurs tenaient un restaurant souvent fréquenté par des chasseurs.

                            Un jour, Stéphanie Tatin, en préparant une tarte aux pommes, oublia de mettre la pâte au fond du moule et la mit à cuire avec les pommes uniquement.
                            Se rendant compte de son erreur, elle ajouta ensuite la pâte par dessus. Tadam ! La tarte Tatin était née.
                        </p>

                        <div class="Mybtn">
					        <a href="#">Voir plus</a>
				        </div>
                    </div>
                </div>
            </div>
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
            <img src="assets/img/logo.png" width="300px">
        
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