<?php
if (isset($_POST['valider'])) {
$Prenom=$_POST['Prenom'];
$nom = $_POST['nom'];
$age = $_POST['age'];

if ($age<18)
 {
echo("Vous vous appelez $Prenom $nom ,vous avez $age ans et vous etes mineur.");
}
elseif ($age>18 && $age<50) {
    echo("Vous vous appelez $Prenom $nom ,vous avez $age ans et vous etes majeur.");
}
else {
    echo("Vous vous appelez $Prenom $nom ,vous avez $age ans et vous etes vieux.");
    }

}
?>