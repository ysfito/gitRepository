<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'utilisateur</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<form method="POST" action="ajouter.php">
		<h1>Ajouter un utilisateur</h1>
		<table>
			<tr>
				<td>Login</td><td><input type="text" name="login" required></td>
			</tr>
			<tr>
				<td>Profil</td>
				<td><select name="profil">
					<option value="">Profil</option>
					<option value="user">User</option>
					<option value="admin">Admin</option>
				</select></td>
			</tr>
		</table><br>
		<input type="submit" name="submit" value="Creer">
	</form><br><br>
	<?php
		include('generer.php');
		extract($_POST);
		if (isset($submit)) {
			if ($profil == "") {
				echo "<h1>Veuiller choisir un profil</h1>";
			}
			else{
				$mot = mdp(8);
				$fichier = fopen("utilisateur", "a+");
				$a = verif($fichier, $login);
				if ($a == 0) {
					fputs($fichier, "$login;$profil;$mot;complete\n");
					echo "L'utilisateur $login a bien été ajouté avec le mot de passe $mot";
				}
				else
					echo "L'utilisateur existe";
				
				fclose($fichier);	
			}
		}
		

	?>
	</center>
</body>
</html>