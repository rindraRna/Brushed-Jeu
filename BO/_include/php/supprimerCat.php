<?php
    require('../../fonction.php');
    $id = $_GET['id'];
    supprimerCategorie($id);
    header('Location:index-index');
?>