<?php
    function dbconnect(){
        static $connect = null;
        if ($connect === null) 
        {
            // $connect = mysqli_connect('remotemysql.com', 'RgvuWSt4fb', 'MXj5KIpsBt', 'RgvuWSt4fb');
            $connect = mysqli_connect('localhost', 'root', 'root', 'jeu');
        }
        return $connect;
    }
    mysqli_set_charset(dbconnect(),"utf8");

    function findAllCategorie(){
        $sql="  SELECT idCategorie,nom, ref
                FROM categorie
                ORDER BY nom ASC";
        $val = mysqli_query(dbconnect(), $sql );
        $result = array();
        while ($rep = mysqli_fetch_array($val)) {
            $result[] = $rep;
        }
        mysqli_free_result($val);
        return $result;
    }

    function findCatById($id){
		$sql= " SELECT *
                FROM categorie
                WHERE idCategorie = ".$id;
		$resultat = mysqli_query(dbconnect(),$sql);
		$valiny = mysqli_fetch_assoc($resultat);
		return $valiny;
    }

    function existeAdmin($nom){
		$sql= " SELECT COUNT(*) nb
                FROM admin
                WHERE identifiant = '".$nom."'";
		$resultat = mysqli_query(dbconnect(),$sql);
		$valiny = mysqli_fetch_assoc($resultat);
		return $valiny;
    }

    function findAdminByNom($nom){
        $rep = existeAdmin($nom);
        if($rep['nb'] != 0){
            $sql= " SELECT *
                    FROM admin
                    WHERE identifiant = '".$nom."'";
            $resultat = mysqli_query(dbconnect(),$sql);
            $valiny = mysqli_fetch_assoc($resultat);
        }
        else $valiny['mdpHash'] = "Non";
		return $valiny;
    }

    function findAllJeux(){
        $sql="  SELECT idJeu, c.nom nomCat, j.nom nom, descrip, photo
                FROM jeux j
                JOIN categorie c
                ON c.idCategorie = j.idCategorie";
        $val = mysqli_query(dbconnect(), $sql );
        $result = array();
        while ($rep = mysqli_fetch_array($val)) {
            $result[] = $rep;
        }
        mysqli_free_result($val);
        return $result;
    }

    function findJeuById($id){
		$sql="  SELECT idJeu, c.nom nomCat, j.nom nom, descrip, photo
                FROM jeux j
                JOIN categorie c
                ON c.idCategorie = j.idCategorie
                WHERE idJeu = ".$id;
		$resultat = mysqli_query(dbconnect(),$sql);
		$valiny = mysqli_fetch_assoc($resultat);
		return $valiny;
    }

    function insertCategorie($nom){
        $ref = ".".strtolower($nom);
		$sql= "INSERT INTO categorie (nom,ref) VALUES ('".$nom."','".$ref."')";
		$resultat = mysqli_query(dbconnect(),$sql);
    }

    function insertJeu($cat,$nom,$desc,$photo){
        echo $cat.','.$nom.','.$desc.','.$photo;
		$sql= "INSERT INTO jeux (idCategorie, nom, descrip,photo) VALUES (".$cat.",\"".$nom."\",\"".$desc."\",'".$photo."')";
        echo $sql;
        $resultat = mysqli_query(dbconnect(),$sql);
    }

    function supprimerCategorie($id){
        $sql= "DELETE FROM categorie WHERE idCategorie=".$id;
		$resultat = mysqli_query(dbconnect(),$sql);
    }

    function supprimerJeu($id){
        $sql= "DELETE FROM jeux WHERE idJeu=".$id;
		$resultat = mysqli_query(dbconnect(),$sql);
    }

    function update($id,$nom,$ref){
        $sql = "UPDATE categorie SET nom='".$nom."', ref='".$ref."' WHERE idCategorie=".$id;
        $result = mysqli_query(dbconnect(),$sql);
    }

    function updateJeu($id,$idCat,$nom,$descrip,$photo){
        $sql = "UPDATE jeux SET nom='".$nom."', idCategorie=".$idCat.", descrip='".$descrip."', photo='".$photo."' WHERE idJeu=".$id;
        $result = mysqli_query(dbconnect(),$sql);
    }

    //SCRIPT D'UPLOAD D'IMAGE
    function redimensionner_image($fichier, $w, $h) {
        //VARIABLE D'ERREUR
        global $error;

        //TAILLE EN PIXELS DE L'IMAGE REDIMENSIONNEE
        $longueur = $w;
        $largeur = $h;

        //TAILLE DE L'IMAGE ACTUELLE
        $taille = getimagesize($fichier);
        
        //SI LE FICHIER EXISTE
        if ($taille) {
        
            //SI JPG
            if ($taille['mime']=='image/jpeg' ) {
                //OUVERTURE DE L'IMAGE ORIGINALE
                $img_big = imagecreatefromjpeg($fichier); 
                $img_new = imagecreate($longueur, $largeur);
                
                //CREATION DE LA MINIATURE
                $img_petite = imagecreatetruecolor($longueur, $largeur) or $img_petite = imagecreate($longueur, $largeur);

                //COPIE DE L'IMAGE REDIMENSIONNEE
                imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
                imagejpeg($img_petite,$fichier);

            }
            
            //SI PNG
            else if ($taille['mime']=='image/png' ) {
                //OUVERTURE DE L'IMAGE ORIGINALE
                $img_big = imagecreatefrompng($fichier); // On ouvre l'image d'origine
                $img_new = imagecreate($longueur, $largeur);
                
                //CREATION DE LA MINIATURE
                $img_petite = imagecreatetruecolor($longueur, $largeur) OR $img_petite = imagecreate($longueur, $largeur);

                //COPIE DE L'IMAGE REDIMENSIONNEE
                imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
                imagepng($img_petite,$fichier);

            }
            // GIF
            else if ($taille['mime']=='image/gif' ) {
                //OUVERTURE DE L'IMAGE ORIGINALE
                $img_big = imagecreatefromgif($fichier); 
                $img_new = imagecreate($longueur, $largeur);
                
                //CREATION DE LA MINIATURE
                $img_petite = imagecreatetruecolor($longueur, $largeur) or $img_petite = imagecreate($longueur, $largeur);

                //COPIE DE L'IMAGE REDIMENSIONNEE
                imagecopyresized($img_petite,$img_big,0,0,0,0,$longueur,$largeur,$taille[0],$taille[1]);
                imagegif($img_petite,$fichier);

            }
        }
    }
?>