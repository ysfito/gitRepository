<?php
session_start();
$sid="user" || "admin";
session_id($sid);
session_destroy();
echo "<a href= sessions.php><button type='button'>Deconexion</button></a>";

?>