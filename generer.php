<?php
	function mdp($longueur){
		$mot_de_passe = "";
		$mot = "abcdefghjkmn1opqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789";

		for ($i=0; $i < $longueur; $i++) { 
			$pos = rand(0, strlen($mot)-1);
			$mot_de_passe .= $mot[$pos];
		}
		return $mot_de_passe;
	}

	function verif($f, $mot){
		fseek($f, 0);
		while (($ligne = fgets($f)) == true) {
			$user = explode(";", $ligne);
			if ($user[0] == $mot) {
				return 1;
			}
		}
		return 0;
	}

	function connexion($login, $mot, $profil){


		$fichier = fopen("utilisateur", "r+");
		fseek($fichier, 0);
		while (($ligne = fgets($fichier)) == true) {
			$user = explode(";", $ligne);

			if ($user[2] == $mot) {
				echo "Vrai<br>";
			}

			if (($user[0] == $login) && ($user[1] == $profil) && ($user[2] == $mot)) {
				if ($profil == "user") {
					session_start();
					$_SESSION['user'] = "user";
					header('location: log2.php');
				}
				else{
					session_start();
					$_SESSION['admin'] = "admin";
					header('location: log1.php');
				}
					
			}
				
		}
		echo "<br>Login ou identifiant incorrect";
		fclose($fichier);
	}
?>