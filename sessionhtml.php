
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
    <form  method="post" action="sessionhtml.php">
<fieldset>
    <legend>Session</legend>
    <span>Pseudo</span><input type="text" name="pseudo"> <br/>
    <span>Mot de passe</span><input type="password" name="passeword"><br/>
    <select name="sid">
        <option value="">Profil</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br/>
              <input type="submit" name="connexion" value="connexion">
</fieldset>
<?php
		include('sessions.php');
		extract($_POST);
		if(isset($_post['connexion'])){
			connexion($login, $pass, $profil);	
		}
	?>

    </form>
    </body>
</html>