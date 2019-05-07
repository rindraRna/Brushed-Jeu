<?php
    $jeu = findJeuById($_GET['id']);
?>
<title>Brushed | Modifier Jeu</title> 
<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
	<div class="container">
    
    	<!-- Title Page -->
        <div class="row">
            <div class="span12" style="background-color:#424448;border:3px solid black;border-radius:258px;width:700px;padding-top: 99px;margin-left: 275px;">
                <div class="title-page">
                    <h2 class="title">Modifier <span style="color:#DE5E60;">Jeu</span></h2>
                    <h4 class="title-description">Vous pouvez <span style="color:#DE5E60;">modifier</span> des éléments ici</h4><br>
                    <center>
                        <form action="traitModifJeu-<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                            <label for="nom">Nom</label>
                            <input style="width:365px" type="text" name="nom" value="<?php echo $jeu['nom']; ?>" required />
                            <label for="cat">Catégorie</label>
                            <select style="width:380px" name="cat">
                                <?php
                                    $catAll = findAllCategorie();
                                    foreach ($catAll as $donneeCat){
                                ?>
                                    <option value="<?php echo $donneeCat['idCategorie']; ?>"><?php echo $donneeCat['nom']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <label for="desc">Description</label>
                            <textarea type="text" name="desc" rows="7" col="30" style="width:365px" required><?php echo $jeu['descrip']; ?></textarea>
                            <label for="photo">Photo</label>
                            <input type="file"  style="width:378px" name="photo" value="<?php echo $jeu['photo']; ?>" accept=".jpg"/><br>
                            <input style="height:1px" type="hidden" name="photo2" value="<?php echo $jeu['photo']; ?>"/><br>
                            <input class="btn  btn-danger" style="background-color:#DE5E60;width:382px;" type="submit" value="Modifier">
                        </form>
                    </center>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
    </div>
</div>
<!-- End Shortcodes Section -->