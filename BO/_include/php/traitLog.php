<?php
    require('../../fonction.php');
    session_start();
    $hash = sha1($_POST['mdp']);
    $admin = findAdminByNom($_POST['identifiant']);
    if($admin['mdpHash'] == $hash) header('Location:index-index');
    else{
        $_SESSION['admin'] = "Ok";
        header('Location:login');
    }
?>