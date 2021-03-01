<?php
    session_start();
    include "fonction.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/class.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="" /><!--icone de l'onglet-->
    <title>
        <?php
            echo $_GET['TypeName'];
        ?>
    </title>
</head>
<body>
    <div class="space">
        <?php
            include "menu.php"
        ?>
        <div class="arti3">

        <u>
            <?php
                echo '<h1>'.$_GET['TypeName'].' :</h1>';
            ?>
        </u>
        
        <?php

            $CommResult = $MaBase->query("SELECT * FROM `Game` WHERE `type` = '".$_GET['TypeName']."'");
            
                While($don = $CommResult->fetch()){
                    ?>
                        <div class="center">
                            <a  class="zone" href="jeux.php?GameName=<?php echo $_POST['GameName']= $don['id']; ?>">
                                <div class="img1">
                                <!--met l'affiche du jeu selectioné dans la base-->
                                    <img class="Affiche" src="IMG/Games/<?php echo $don['id']; ?>_Affiche.jpg" alt="Affiche">
                                </div>
                                <div class="center nom">
                                    <?php
                                        //affiche le nom du jeu
                                        echo '<h1>'.$don['nom'].'</h1>';
                                    ?>
                                </div>
                            </a>
                            <div class="esp"></div>
                        </div>
                    <?php
                }   
            ?>
        </div>
    </div>
</body>
</html>