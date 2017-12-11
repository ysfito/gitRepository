<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tp</title>
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
    td{
      width: 100px;
      height: 100px;
      border: 2px solid gray;
    }
  </style>
  <body>
    <?php
      echo "<table>";
      for ($i=0; $i <5 ; $i++) {
        echo "<tr>";
        for ($j=0; $j <5 ; $j++) {
          if ($i==$j && $j==4-$i) {
            $bg="vert";
            echo "<td class=$bg></td>";
          }
          elseif ($i==$j) {
            $bg="rouge";
            echo "<td class=$bg></td>";
          }
          elseif ($j==4-$i) {
            $bg="bleu";
            echo "<td class=$bg ></td>";
          }
          else {
            echo "<td></td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
      include("deconnexion.php");
     ?>
  </body>
</html>
