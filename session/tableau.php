<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <style media="screen">
    .rouge{
      background-color: red;
    }
    .bleu{
      background-color: blue;
    }
    .vert{
      background-color: green;
    }
    </style>
    <body>
   <form method="post" action="tableau.php">
       
   <select name="choix">
        <?php
      echo " <option value=''>   faire un choix</option>";
      echo " <option value='2'>  2 lignes et 2 colonnes</option>";
      echo  "<option value='3'>  3 lignes et 3 colonnes</option>";
     echo   "<option value='4'>  4 lignes et 4 colonnes</option>";
      echo  "<option value='5'>  5 lignes et 5 colonnes</option>";
      echo "<option value='6'>  6 lignes et 6 colonnes</option>";
      echo  "<option value='7'>  7 lignes et 7 colonnes</option>";
      echo  "<option value='8'>  8 lignes et 8 colonnes</option>";
       echo "<option value='9'>  9 lignes et 9 colonnes</option>";
      echo  "<option value='10'> 10 lignes et 10 colonnes</option>";
        ?>
    </select> <br/>
    <input type='submit' name='Générer' value='Générer'>
    </form>

 <?php

if (isset($_POST['Générer'])) {
  extract($_POST);
       if ($choix=="") {
           echo"Veuillez faire un choix";
       }

    elseif ($i=$choix && $j=$choix) {

       echo'<table border="solid" width="400px" height="300px"> ';
        for ($i=0; $i < $choix ;$i++) {

           echo '<tr>';
           for ($j=0; $j <$choix ;$j++) {
             if ($i==$j && $j==$choix-1-$i)
          {
            $bg="vert";
                 echo "<td class=$bg></td>";
                }
 elseif ($i==$j) {
            $bg="rouge";
            echo "<td class=$bg></td>";
        }
elseif ($j==$choix-1-$i) {
            $bg="bleu";
            echo "<td class=$bg ></td>";
          }
          else {


               echo ' <td> </td>';
}

                     }
                echo'</tr>';


    }
         echo' </table> ';
    
  }
}
include("deconnexion.php");
?>
  </body>
</html>
