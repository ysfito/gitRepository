<?php
$grdtab = array(array('111','Ansou','25'),array('220','Fatou','45'),array('003','Laye','40'));
if (isset($_POST["Modifier"])) {
for ($i=0; $i < count($grdtab) ; $i++) {
    extract($_POST);
        if ($grdtab[$i][0]==$code) {
            $grdtab[$i][1]=$nom;
            $grdtab[$i][2]=$age;
            break;
        }
    }
}


echo'<table border="solid 1px" width="500px" height="40px">';
    echo '<tr>';
        echo '<td>Code</td>';
        echo '<td>Nom</td>';
        echo '<td>Age</td>';
    echo'<tr/>';

    for ($i=0; $i < count($grdtab) ; $i++) {
           echo'<tr>';
    }
       foreach ($grdtab as $tabhtml) {
                foreach ($tabhtml as $value) {

                    echo '<td>'.$value.'</td>';
                }
            echo "<td><a href='relierpageA.php?code=$tabhtml[0]&nom=$tabhtml[1]&age=$tabhtml[2]'>éditer</a></td>";
          echo'</tr>';
            }
      echo'</table>';
      include("deconnexion.php");

?>