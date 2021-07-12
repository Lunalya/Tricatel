

<?php


if (isset($_POST["title"], $_POST["contenu"]) && !empty($_POST["title"]) && !empty($_POST["contenu"]))
{
    $title = htmlspecialchars($_POST["title"]);
    $photo = htmlspecialchars($_POST["photo"]);
    $type = htmlspecialchars($_POST["type"]);
    $regime = htmlspecialchars($_POST["regime"]);
    $pays = htmlspecialchars($_POST["pays"]);
    $contenu = htmlspecialchars($_POST["contenu"]);  
    
    $db = new PDO('mysql:host=localhost;dbname=gestion_recettes', 'root', '');
    $sql = "INSERT INTO recette (photo, nom_plat, type_plat, regime, pays, descrip) VALUES (:photo,  :title, :type, :regime, :pays, :contenu)";
    $request = $db->prepare($sql);
    $request->bindParam(':title', $title);
    $request->bindParam(':photo', $photo);
    $request->bindParam(':type', $type);
    $request->bindParam(':regime', $regime);
    $request->bindParam(':pays', $pays);
    $request->bindParam(':contenu', $contenu);
    $request->execute();

    Header("Location:index.php");

}   

?>
