<?php
    require('fonction.php');
    if(!isset($_GET['page'])){
        $_GET['page'] = 'index';
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

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

<!-- Supersized -->
<link href="_include/css/supersized.min.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.min.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.min.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.min.css" rel="stylesheet">
<!-- sprite -->
<link href="_include/css/sprite.min.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.min.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.min.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.min.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.min.css" rel="stylesheet">

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

//   (function() {
//     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//   })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <!--<div class="overlay"></div>-->

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#jeux"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
            <a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="accSpr"><a href="index-index#home-slider" class="external"><span class="espace">Accueil</span></a></li>
                <li class="jeuSpr"><a href="index-index#jeux" class="external"><span class="espace">Jeux</span></a></li>
                <li class="contSpr"><a href="index-index#contact" class="external"><span class="espace">Contact</span></a></li>
                <li class="csSpr"><a href="index-codeSource" class="external"><span class="espace">Code source</span></a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<?php
    if($_GET['page'] == 'index'){
        include('_include/php/accueil.php');
    }
    else if($_GET['page'] == 'codeSource'){
        include('_include/php/codeSource.php');
    }
?>

<!-- Footer -->
<footer>
	<p class="credits">&copy;2019 <a href="#">Brushed</a> by RAMIANDRISOA Rindra Ny Aina - P10B- n°41</p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.min.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.min.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.min.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.min.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.min.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>