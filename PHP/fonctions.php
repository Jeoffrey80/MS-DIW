<?php
function genererLien($lien, $titre) {
    return '<a href="' . $lien . '">' . $titre . '</a>';
}
// Exemple d'utilisation
$resultat = genererLien("https://www.reddit.com/", "Reddit Hug");
?>