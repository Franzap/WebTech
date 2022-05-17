<?php session_start();?>
<?php

$_SESSION['utente'] = null;
$_SESSION['ruolo'] = null;

header('Location: index.html');
?>