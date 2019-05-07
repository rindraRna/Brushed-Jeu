<?php
    $cat = findCatById($_GET['id']);
?>
<title>Brushed | Modifier Catégorie</title> 
<!-- Our Shortcodes Section -->
<div id="shortcodes" class="page">
	<div class="container">
    
    	<!-- Title Page -->
        <div class="row">
            <div class="span12" style="background-color:#424448;border:3px solid black;border-radius:258px;width:600px;padding-top: 99px;margin-left: 306px;">
                <div class="title-page">
                    <h2 class="title">Modifier <span style="color:#DE5E60;">Catégorie</span></h2>
                    <h4 class="title-description">Vous pouvez <span style="color:#DE5E60;">modifier</span> des éléments ici</h4><br>
                    <center>
                        <form action="traitModifCat-<?php echo $_GET['id']; ?>" method="post">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" value="<?php echo $cat['nom']; ?>" required /><br>
                            <input class="btn  btn-danger" style="background-color:#DE5E60;width:220px;" type="submit" value="Modifier">
                        </form>
                    </center>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
    </div>
</div>
<!-- End Shortcodes Section -->