<?php
    require('../../fonction.php');
    $ref = ".".strtolower($_POST['nom']);
    update($_GET['id'],$_POST['nom'],$ref);
    header('Location:index-index');
?>