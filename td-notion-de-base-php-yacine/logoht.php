<?php
session_start();
unset($_SESSION['nom_utilisateur']);
session_destroy();
header('Location: login.php');
exit;
?>
