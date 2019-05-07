<?php
    require('../../fonction.php');
    $name_picture = md5(uniqid(rand(), true));
    if($_FILES['photo']['name'] != ""){
        $extension_picture = '.jpg';
        $chemin1 = "../img/jeu/$name_picture$extension_picture";
        $chemin2 = "../img/jeu/trait/$name_picture$extension_picture";
        $chemin3 = "../../../FO/_include/img/jeu/$name_picture$extension_picture";
        $chemin4 = "../../../FO/_include/img/jeu/trait/$name_picture$extension_picture";
        $result1 = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin1);
        copy($chemin1,$chemin2);
        redimensionner_image($chemin2,960,800);
        copy($chemin1,$chemin3);
        copy($chemin2,$chemin4);
        updateJeu($_GET['id'],$_POST['cat'],$_POST['nom'],$_POST['desc'],$name_picture);
    }
    else updateJeu($_GET['id'],$_POST['cat'],$_POST['nom'],$_POST['desc'],$_POST['photo2']);
    header('Location:index-index');
?>