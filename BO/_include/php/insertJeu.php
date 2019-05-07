<?php
    require('../../fonction.php');
    if (isset($_POST['send']) AND $_POST['send'] == 'true'){
        $name_picture = md5(uniqid(rand(), true));
        $extension_picture = '.jpg';
        $chemin1 = "../img/jeu/$name_picture$extension_picture";
        $chemin2 = "../img/jeu/trait/$name_picture$extension_picture";
        $chemin3 = "../../../FO/_include/img/jeu/$name_picture$extension_picture";
        $chemin4 = "../../../FO/_include/img/jeu/trait/$name_picture$extension_picture";
        $result1 = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin1);
        copy($chemin1,$chemin2);
        // if ($result1 == true){
        //     echo 'Transfert reussi 1!';
        // }
        // copy image
        // if(copy($chemin1,$chemin2) == true){
        //     echo 'Transfert reussi 2!';
        // }
        // else echo 'non';
        // redimmension chemin2
        redimensionner_image($chemin2,960,800);
        copy($chemin1,$chemin3);
        copy($chemin2,$chemin4);
        insertJeu($_POST['cat'],$_POST['nom'],$_POST['desc'],$name_picture);
        header('Location:index-index');
    }
?>