<?php session_start(); ?>

<?php

$_SESSION['utente'] = null;

header('Location: homepage.php');

?>