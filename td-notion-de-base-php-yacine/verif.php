<?php
$nom_utilisateur = $_POST['login'];
$mot_de_passe = $_POST['password'];
// Vérification des informations de connexion
if ($nom_utilisateur === 'yacine' && $mot_de_passe === 'yacine92') {
    
    echo 'Bon mot de passe !';
} else {
// Informations de connexion incorrectes
    $erreur_message = 'Erreur de connexion : nom d\'utilisateur ou mot de passe incorrect.';
    echo "erreur de connexion , veuillez ressayez !";
}
?>
