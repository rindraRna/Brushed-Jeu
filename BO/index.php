<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
<title>Brushed | Login</title> 
<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="L'un des meilleurs de site d'informations de jeux: jeux à la une, les stratégies de jeux, les jeux en ligne... Brushed contient plusieus catégories de jeux" /> 
<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.min.css" rel="stylesheet">

<!-- sprite -->
<link href="_include/css/sprite.min.css" rel="stylesheet">
</head>


<body>
    <center>
        <h1>B R U S H E D</h1>
        <p><q>Site d'informations de jeux</q></p>
        <div style="background-color:#424448;border:2px solid black;width:345px;margin-top: 35px;padding-top: 23px;padding-bottom: 23px;border-radius: 12px">
            <center>
                <section class="fondSpr"></section>
                <?php
                    echo '<br>';
                    if(isset($_GET['err']) && $_GET['err']==0){
                ?>
                <h6 style="color:#DE5E60;">Erreur: vérifier votre identifiant / mot de passe</h6>
                <?php
                    }
                ?>
                <h1 style="font-size:28px;margin-top:21px;"><span style="color:#DE5E60;">Connectez</span>-vous</h1>
                <form action="traitLog" method="post">
                    <label for="identifiant">Identifiant</label>
                    <input class="form-group" type="text" name="identifiant" value="Rindra" />
                    <label for="mdp">Mot de passe</label>
                    <input class="form-group" type="password" name="mdp" value="rindraMdp" /><br>
                    <input class="btn  btn-danger" style="width:220px;background-color:#DE5E60;" type="submit" value="Connecter">
                </form>
            </center>
        </div>
    </center>
</body>
</html>