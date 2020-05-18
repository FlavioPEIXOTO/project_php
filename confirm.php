<?php include("inc/header.inc.php"); ?>

<?php

// Suppression de l'experience en modifiant le "deletion_flag" en lui donnant la valeur 1 au lieu de 0
$pdo->exec("UPDATE experience SET deletion_flag = 1 WHERE id_experience = $_GET[id]");
echo " Votre experience a été supprimée avec succès"

?>

<a href="index.php">Retour à l'accueil</a>