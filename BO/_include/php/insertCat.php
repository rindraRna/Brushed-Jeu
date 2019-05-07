<?php
    require('../../fonction.php');
    $nom = $_POST['nom'];
    insertCategorie($nom);
    header('Location:index-index');
?>