<?php
    function dbconnect(){
        static $connect = null;
        if ($connect === null) 
        {
            $connect = mysqli_connect('remotemysql.com', 'RgvuWSt4fb', 'MXj5KIpsBt', 'RgvuWSt4fb');
        }
        return $connect;
    }
    mysqli_set_charset(dbconnect(),"utf8");

    function findAllCategorie(){
        $sql="  SELECT nom, ref
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

    function findAllJeux(){
        $sql="  SELECT c.nom nomCat, j.nom nom, descrip, photo
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
?>