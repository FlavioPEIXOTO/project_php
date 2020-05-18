<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST)) {
    // Insertion dans la table experience des nouvelles informations 

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["soustitre"] = htmlentities($_POST["soustitre"], ENT_QUOTES);
    $_POST["contenu"] = htmlentities($_POST["contenu"], ENT_QUOTES);
    $_POST["datedebut"] = htmlentities($_POST["datedebut"], ENT_QUOTES);
    $_POST["datefin"] = htmlentities($_POST["datefin"], ENT_QUOTES);

    $modif_titre = $_POST["titre"];
    $modif_soustitre = $_POST["soustitre"];
    $modif_contenu = $_POST["contenu"];
    $modif_datedebut = $_POST["datedebut"];
    $modif_datefin = $_POST["datefin"];


            //Utilisation de tableau pour contenir les informations et les utilisées dans une boucle
    $P = array('titre', 'soustitre', 'contenu', 'date_debut', 'date_fin');
    $L = array($modif_titre, $modif_soustitre, $modif_contenu, $modif_datedebut, $modif_datefin);

            //Replacement des informations correspondantes
    for ($i = 0; $i < sizeof($L); $i++ ){
        $requete = "UPDATE experience SET $P[$i] = '$L[$i]' WHERE id_experience = $_GET[id]";
        $result = $pdo->exec($requete);
    }
}
?>


<?php if (!empty($_GET)) { ?>

    <?php

    // Selection de l'experience dans la table "experience" selon son ID

    $result = $pdo->query("SELECT * FROM experience WHERE id_experience = $_GET[id]");
    $experience = $result->fetch(PDO::FETCH_OBJ);

    ?>   


<!-- Formulaire de modification des informations de la table "experience" -->
    <h2>Modifier Expérience</h2>

    <div class="starter-template">  
        <form method="POST" action="" enctype='multipart/form-data'>

            <div class="form-group">
                <label for="titre">Titre de l'expérience</label>
                <input type="texte" class="form-control" id="titre" name="titre" value="<?php echo $experience->titre; ?>">
            </div>

            <div class="form-group">
                <label for="soustitre">Domaine expérience</label>
                <input type="texte" class="form-control" id="soustitre" name="soustitre" value="<?php echo $experience->soustitre; ?>">
            </div>

            <div class="form-group">
                <label for="contenu">Description de l'expérience</label>
                <textarea rows="10" class="form-control" id="contenu" name="contenu"> <?php echo $experience->contenu; ?></textarea>
            </div>

            <div class="form-group">
                <label for="datedebut">Date de début</label>
                <input type="texte" class="form-control" id="datedebut" name="datedebut" value="<?php echo $experience->date_debut; ?>">
            </div>

            <div class="form-group">
                <label for="datefin">Date de fin</label>
                <input type="texte" class="form-control" id="datefin" name="datefin" value="<?php echo $experience->date_fin; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>

        </form>
    </div>

<?php } ?>



<a href="admin.php">Retour à la page admin</a>

