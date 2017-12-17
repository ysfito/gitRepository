
<?php
	session_start();
    if (!$_SESSION['user']) {
    	header('location: connexion.php');
    }
    else{
    	$date = date("d-m-y");
   		$heure = date("h:i");
   		print("nous somme le $date ---- il est $heure a DAKAR. <br />");
   		echo '<br /> <h3>Bienvenue a mon formulaire:</h3> <br />';
   		if (isset($_POST['deconnexion'])) {
   			session_destroy();
   			header('location: connexion.php');
   		}
    }
    
?>
<!DOCTYPE html>
<html lang="fr">
<body>
    <a href="formulaire.php">aller sur formulaire</a><br /><br />
    <a href="url_01.php">aller sur url</a><br /><br />
    <form method="POST" action="log2.php">
    	<input type="submit" name="deconnexion" value="deconnexion">
    </form>
</body>
</html>