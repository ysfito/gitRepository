<?php
//Nombre a trouver
$nb=216;
//boucle de tirage
for($tirage=1;$x!=$nb;$tirage++)
{
$x=rand(0,1000);
//echo $x,"<br />";//pour afficher tous les tirages
}
echo "$nb trouvé en $coup coups ";
include("deconnexion.php");
?>
