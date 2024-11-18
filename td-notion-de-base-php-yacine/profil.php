<?php
session_start();

if (isset($_SESSION['nom_utilisateur'])) {
    session_unset();
    session_destroy();
}
header('Location: login.php');
exit;
?>
