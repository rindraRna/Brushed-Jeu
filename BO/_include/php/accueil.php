<title>Brushed | Insertion - Modification</title> 
<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
	<div class="container">
    
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Modifier</h2>
                    <h3 class="title-description">Vous pouvez <span style="color:#DE5E60;">ajouter, modifier et supprimer</span> des éléments ici</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Start Accordion/Toggle Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="span4">
                    <h3 class="spec"><span style="color:#DE5E60;">Ajout</span> element</h3>
                    
                    <!-- Start Accordion -->
                    <div class="accordion" id="accordionArea">
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
                                    Catégorie
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                            </div>
                            <div id="oneArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <form action="insertCat" method="post">
                                        <label for="nom">Nom</label>
                                        <input style="width:95%;" type="text" name="nom" required/><br>
                                        <input class="btn  btn-danger" style="background-color:#DE5E60;width:99%;" type="submit" value="Ajouter" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-group">
                            <div class="accordion-heading accordionize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#twoArea">
                                    Jeu
                                    <span class="font-icon-arrow-simple-down"></span>
                                </a>
                                <div id="twoArea" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <form action="insertJeu" method="post" enctype="multipart/form-data">
                                        <label for="nom">Nom</label>
                                        <input style="width:95%;" type="text" name="nom" required/>
                                        <label for="cat">Catégorie</label>
                                        <select style="width:99%;" name="cat">
                                        <?php
                                            $cat = findAllCategorie();
                                            foreach ($cat as $donneeCat){
                                        ?>
                                            <option value="<?php echo $donneeCat['idCategorie']; ?>"><?php echo $donneeCat['nom']; ?></option>
                                        <?php
                                            }
                                        ?>
                                        </select>
                                        <label for="desc">Description</label>
                                        <textarea style="width:95%;" type="text" name="desc" rows="7" col="30" required></textarea>
                                        <label for="photo">Photo</label>
                                        <input style="width:95%;" type="file" name="photo" accept=".jpg" required/><br><br>
                                        <input class="btn  btn-danger" style="background-color:#DE5E60;width:99%;" type="submit" value="Ajouter" />
                                        <input type="hidden" name="send" value="true" />
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
            </div>
            <div class="col-md-8">
                <div class="span8">
                    <h3 class="spec"><span style="color:#DE5E60;">Modification</span> et <span style="color:#DE5E60;">suppression</span></h3>
                    
                    <!-- Start Toggle -->
                    <div class="accordion" id="toggleArea">
                        <div class="accordion-group">
                            <div class="accordion-heading togglize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">
                                    Catégorie
                                    <span class="font-icon-plus"></span>
                                    <span class="font-icon-minus"></span>
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse">
                                <div class="accordion-inner">
                                   <!-- <table class="table table-bordered"> -->
                                   <!-- <table class="table table-hover"> -->
                                   <!-- <table class="table table-condensed"> -->
                                   <table class="table table-expansed">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Référence</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <?php
                                            foreach ($cat as $donneeCat){
                                        ?>
                                        <tr>
                                            <td><?php echo $donneeCat['nom']; ?></td>
                                            <td><?php echo $donneeCat['ref']; ?></td>
                                            <td><a href="index-modifierCat-<?php echo $donneeCat['idCategorie']; ?>"><button class="btn  btn-purple">Modifier</button></a></td>
                                            <td><a href="supprimerCat-<?php echo $donneeCat['idCategorie']; ?>"><button class="btn  btn-danger">Supprimer</button></a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                   </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading togglize">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">
                                Jeux
                                <span class="font-icon-plus"></span>
                                <span class="font-icon-minus"></span>
                            </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table table-expansed">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Catégorie</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <?php
                                            $jeu = findAllJeux();
                                            foreach ($jeu as $donneeJeu){
                                        ?>
                                        <tr>
                                            <td><?php echo $donneeJeu['nom']; ?></td>
                                            <td><?php echo $donneeJeu['nomCat']; ?></td>
                                            <td><?php echo $donneeJeu['descrip']; ?></td>
                                            <td><a href="index-modifierJeu-<?php echo $donneeJeu['idJeu']; ?>"><button class="btn  btn-purple">Modifier</button></a></td>
                                            <td><a href="supprimerJeu-<?php echo $donneeJeu['idJeu']; ?>"><button class="btn  btn-danger">Supprimer</button></a></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                   </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Toggle -->
                </div>
            </div>
        </div>
        <!-- End Accordion/Toggle Section -->
    </div>
</div>
<!-- End Shortcodes Section -->