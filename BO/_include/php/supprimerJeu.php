<?php
    require('../../fonction.php');
    $id = $_GET['id'];
    supprimerJeu($id);
    header('Location:index-index');
?>