<form method='post' action='relierpageB.php'>

<label>Code</label> <input type='text' name='code' readonly='true' value='<?php echo $_GET['code'];?>'><br/>
<label>Nom</label> <input type='text' name='nom' value='<?php echo $_GET['nom'];?>'><br/>
<label>Age</label> <input type='text' name='age' value='<?php echo $_GET['age'];?>'><br/>
<input type='submit' name='Modifier' value='Modifier'>
</form>