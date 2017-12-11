<?php 
extract($_POST);
if (is_numeric ($age)) {
    if ($age<=0) {
      echo "L'âge ne peut pas prendre une valeur négative";
    }
    elseif ($age>100) {
      echo "L''âge ne peut pas être supérieur à 100";
    }
    else {
      echo 'Vous vous appelez  ' .$name.   ' et vous avez  '  .$age.  'ans'.  '<br />';
if ($age > 18 ) { 
  echo"Vous êtes Majeur";
} else {
   echo" Vous êtes Mineur(e)";
}
    } 
}
else {
  echo "l'âge ne peut pas contenir des caractéres";
}
include("deconnexion.php");
?>