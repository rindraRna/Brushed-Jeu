<title>Brushed | Accueil - Jeux - Contact</title> 
<!-- Our Work Section -->
<div id="jeux" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Jeux</h2>
                    <h3 class="title-description">Vous trouverez ici nos sélections <a href="#jeux">de jeux</a>.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Catégories</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Tout</a></li>
                        <?php
                            $categorie = findAllCategorie();
                            foreach($categorie as $donneeCat){
                        ?>
                        <li><a href="#filter" data-option-value="<?php echo $donneeCat['ref']; ?>"><?php echo $donneeCat['nom']; ?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                            <?php
                                $jeu = findAllJeux();
                                foreach($jeu as $donneeJeu){
                            ?>
                            <!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 <?php echo strtolower($donneeJeu['nomCat']); ?>">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $donneeJeu['nom']; ?>" href="_include/img/jeu/<?php echo $donneeJeu['photo']; ?>.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/jeu/trait/<?php echo $donneeJeu['photo']; ?>.jpg" alt="<?php echo $donneeJeu['descrip']; ?>">
                            </li>
                        	<!-- End Item Project -->
                            <?php
                                }
                            ?>
							
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Contact</h2>
                <h3 class="title-description">Pour nous contactez, veuiller vous addresser à :</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="BRUSHED | Site d' informations de jeux" disabled />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="brushed@gmail.com" disabled/>
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Créé par RAMIANDRISOA Rindra Ny Aina - P10B - n°41 || Miniprojet - Web Design"disabled rows="5" cols="15"></textarea>
                </p>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
                <ul>
                    <li><a href="#">rindranyainaramiandrisoa@gmail.com</a></li>
                    <li>+261 32 69 864 11</li>
                    <li>
                        Lot II B 99 F Ambatomainty,
                        <br>
                        Antananarivo 101,
                        <br>
                        Madagascar
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="http://dribbble.com/Bluxart" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                        <li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                        <li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                        <li><a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                        <li><a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        <li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                        <li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->