<?php
    if (preg_match('#news-([0-9-]+)\.html#isU', $_SERVER['REDIRECT_URL'], $match)) {
        // Modification du code retour, pour que les moteurs de recherche indexent nos pages !
        header("Status: 200 OK", false, 200);
        require 'codeSource.php';
    }
    else {
        require 'erreur404.php';
    }
?>