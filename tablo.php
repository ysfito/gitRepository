<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: connexion.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="tablo.php">

            Entrer un numéro :
            <select name="choix"  >
                <option value="">Nombre</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" name="valider" value="Generer"><br><br>
            <input type="submit" name="deconnexion" value="deconnexion">
        </form>



        <table border ="1">
            <?php
                if (isset($_POST['deconnexion'])) {
            session_destroy();
            header('location: connexion.php');
            }

                if(isset($_POST['valider'])){
                    extract ($_POST);
                    if($choix=="10"){

                for ($i=0; $i < 10; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <10 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)||($i==6 AND $j==6)||($i==7 AND $j==7)||($i==8 AND $j==8)||($i==9 AND $j==9)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==9)||($i==1 AND $j==8)||($i==2 AND $j==7) ||($i==3 AND $j==6)||($i==4 AND $j==5)||($i==5 AND $j==4)||($i==6 AND $j==3)||($i==7 AND $j==2)||($i==8 AND $j==1)||($i==9 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="9"){

                for ($i=0; $i < 9; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <9 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)||($i==6 AND $j==6)||($i==7 AND $j==7)||($i==8 AND $j==8)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==8)||($i==1 AND $j==7)||($i==2 AND $j==6) ||($i==3 AND $j==5)||($i==4 AND $j==4)||($i==5 AND $j==3)||($i==6 AND $j==2)||($i==7 AND $j==1)||($i==8 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                if($choix=="8"){

                for ($i=0; $i < 8; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <8 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)||($i==6 AND $j==6)||($i==7 AND $j==7)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==7)||($i==1 AND $j==6)||($i==2 AND $j==5) ||($i==3 AND $j==4)||($i==4 AND $j==3)||($i==5 AND $j==2)||($i==6 AND $j==1)||($i==7 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="7"){

                for ($i=0; $i < 7; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <7 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)||($i==6 AND $j==6)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==6)||($i==1 AND $j==5)||($i==2 AND $j==4) ||($i==3 AND $j==3)||($i==4 AND $j==2)||($i==5 AND $j==1)||($i==6 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }
                elseif($choix=="6"){

                for ($i=0; $i < 6; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <6 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)||($i==5 AND $j==5)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==5)||($i==1 AND $j==4)||($i==2 AND $j==3) ||($i==3 AND $j==2)||($i==4 AND $j==1)||($i==5 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }
                elseif($choix=="5"){

                for ($i=0; $i < 5; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <5 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3) ||($i==4 AND $j==4)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==4)||($i==1 AND $j==3)||($i==2 AND $j==2) ||($i==3 AND $j==1)||($i==4 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="4"){

                for ($i=0; $i < 4; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <4 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)||($i==3 AND $j==3)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==3)||($i==1 AND $j==2)||($i==2 AND $j==1) ||($i==3 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="3"){

                for ($i=0; $i < 3; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <3 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)||($i==2 AND $j==2)){
                            echo "<td style='background-color:yellow;'></td>";
                        }
                        elseif (($i==0 AND $j==2)||($i==1 AND $j==1)||($i==2 AND $j==0)) {
                            echo "<td style='background-color: blue;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="2"){

                for ($i=0; $i < 2; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <2 ; $j++) {
                        if (($i==0 AND $j==0)||($i==1 AND $j==1)){
                            echo "<td style='background-color:yellow;width:30px;height:30px;'></td>";
                        }
                        elseif (($i==0 AND $j==1)||($i==1 AND $j==0)) {
                            echo "<td style='background-color: blue;width:30px;height:30px;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }

                elseif($choix=="1"){

                for ($i=0; $i < 1; $i++) {
                    echo "<tr>";
                    for ($j=0; $j <1 ; $j++) {
                        if ($i==0 AND $j==0){
                            echo "<td style='background-color:yellow;width:30px;height:30px;'></td>";
                        }
                        elseif ($i==0 AND $j==1){
                            echo "<td style='background-color: blue;width:30px;height:30px;'></td>";
                        }
                        else {
                            echo "<td style='background-color:white;width:30px;height:30px;'></td>";
                        }
                    }
                }
                }
                }
            ?>

        </table><br />
        <div class="button">
            <a href="log1.php" > <button type="submit" name="conec">Retour</button></a>
        </div>
    </body>
</html>