<?php include("inc/header.inc.php") ?>


<?php

if (!empty($_POST)) {

    $_POST["nom_utilisateur"] = htmlentities($_POST["nom_utilisateur"], ENT_QUOTES);
    $_POST["mdp"] = htmlentities($_POST["mdp"], ENT_QUOTES);

    $requete = $pdo->query("SELECT * FROM userlogin WHERE nom_utilisateur = 'PEIXOTOFlavio'");
    $login = $requete->fetch(PDO::FETCH_OBJ);
    if ($login->nom_utilisateur == $_POST["nom_utilisateur"] && $login->mdp == $_POST["mdp"] ) {
        header("location: admin.php");
    }
    else {
        echo "<h3 style = 'color:red'>Les informations entrées sont erronées</h3>";
    }

}

?>


<!-- Connexion à la page administration-->

<h2> Connexion </h2>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="nom_utilisateur"> Nom d'utilisateur </label>
            <input type="texte" class="form-control" id="nom_utilisateur" name="nom_utilisateur">
        </div>

        <div class="form-group">
            <label for="mdp"> Mot de passe </label>
            <input type="texte" class="form-control" id="mdp" name="mdp">
        </div>

        <button type="submit" class="btn btn-primary"> Connexion </button>

    </form>
</div>