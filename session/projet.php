<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>projet</title>
</head>	
<style media="screen">
.rouge{
	background-color:red;
}
.bleu{
	background-color:blue;
}
.vert{
	background-color: rouge;
}
.td{
	width:90px;
	height:80px>
	border:5px solid gray;
}
</style>
<body>
	<h1>entrer le nombre de ligne</h1>
	<form method="POST" action="projet.php">
		<input type="number" name="valeur" placeholder="n"><br><br>
		<input type="submit" name="valider" value="generer"><br><br>
	</form>
<?php
extract($_POST);
if (isset($submit)){
	echo "<table>";
	for($i=1;$i<=$s;$i++){
		echo "<tr>";
		for($j=1;$j<=$n;$j++){
			if($i==$j && $j==$n-$i+1){
				$bg="vert";
				echo "<td class=$bg></td>";
			}
			elseif ($i==$j) {
				$bg="rouge";
				echo "<td class=$bg></td>";
			}
			elseif ($j==$n-$i+1) {
				$bg="bleu";
				echo "<td class=$bg></td>";
			}
			else{
				echo "<td></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}
include("deconnexion.php");
?>
</body>
</html>