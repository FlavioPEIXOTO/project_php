<?php include("inc/header.inc.php"); ?>

<div class="starter-template"> 

        <?php if (!empty($_GET)) { ?>

                <?php
                
                // Séléction et utilisation de la table experience

                $result = $pdo->query("SELECT * FROM experience WHERE id_experience = $_GET[id]");
                $experience = $result->fetch(PDO::FETCH_OBJ);
                
                ?>   

                <div class="card">
                    <div class="card-body">
                            <h3 class="card-title"><?php echo $experience->titre; ?></h5>
                            <h5 class="card-title"><?php echo $experience->soustitre; ?></h5>
                            <p> Etes-vous sur de vouloir supprimer <?php echo $experience->titre ?> ?</p>
                            <a href="confirm.php?id=<?php echo $experience->id_experience; ?>"> Oui </a> 
                            <a href="admin.php"> Non </a>
                    </div>
                </div> 

        <?php } ?>

</div>