<?php include("inc/header.inc.php"); ?>

<?php

    //  Insertion des données dans la table "experience" si le formulaire est rempli

if (!empty($_POST)) {


    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["soustitre"] = htmlentities($_POST["soustitre"], ENT_QUOTES);
    $_POST["contenu"] = htmlentities($_POST["contenu"], ENT_QUOTES);
    $_POST["datedebut"] = htmlentities($_POST["datedebut"], ENT_QUOTES);
    $_POST["datefin"] = htmlentities($_POST["datefin"], ENT_QUOTES);

    $requeteSQL = "INSERT INTO experience (titre, soustitre, contenu, date_debut, date_fin)";
    $requeteSQL .= " VALUE ('$_POST[titre]', '$_POST[soustitre]', '$_POST[contenu]', '$_POST[datedebut]', '$_POST[datefin]' )";
    $result = $pdo->exec($requeteSQL);

}
?>

<!-- Formulaire ajout experience-->

<?php

$requete = $pdo->query("SELECT * FROM userlogin WHERE nom_utilisateur = 'PEIXOTOFlavio'");
$login = $requete->fetch(PDO::FETCH_OBJ);

echo "<h2>Bienvenu $login->nom_utilisateur </h2>";

?>

<h3>Ajouter Expérience</h3>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">Titre de l'expérience</label>
            <input type="texte" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="soustitre">Domaine expérience</label>
            <input type="texte" class="form-control" id="soustitre" name="soustitre">
        </div>

        <div class="form-group">
            <label for="contenu">Description de l'expérience</label>
            <textarea rows="10" class="form-control" id="contenu" name="contenu"></textarea>
        </div>

        <div class="form-group">
            <label for="datedebut">Date de début</label>
            <input type="texte" class="form-control" id="datedebut" name="datedebut">
        </div>

        <div class="form-group">
            <label for="datefin">Date de fin</label>
            <input type="texte" class="form-control" id="datefin" name="datefin">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>
</div>


<?php

    //Création d'une div pour chaque experiences ajoutées

$result = $pdo->query("SELECT * FROM experience WHERE deletion_flag = 0 ORDER BY id_experience DESC");
while ($experience = $result->fetch(PDO::FETCH_OBJ)) { ?>

      <div class="w-100">
        
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $experience->titre; ?></h3>
            <div class="subheading mb-3"><?php echo $experience->soustitre; ?></div>
            <a href="modif.php?id=<?php echo $experience->id_experience; ?>">Modifier</a>
            <a href="delete.php?id=<?php echo $experience->id_experience; ?>">Supprimer</a>
          </div>
        </div>
      </div>


<?php } ?>