<div class="container">      
    </br>
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Obres") { ?>
                    <li role="presentation" class="active"><a href="?ctl=obres">Mostrar Obres</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=obres">Mostrar Obres</a></li>
                <?php } ?>  
                <?php if ($titlePage == "Tipus Obra") { ?>
                    <li role="presentation" class="active"><a href="?ctl=tipusObra&act=mostrar">Mostrar Tipus Obres</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=tipusObra&act=mostrar">Mostrar Tipus Obres</a></li>
                <?php } ?> 
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>

                    <?php if ($titlePage == "Afegir Obra") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } ?>

                    <?php if ($titlePage == "Afegir Tipus Obra") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=tipusObra&act=afegir">Afegir nou Tipus Obra</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=tipusObra&act=afegir">Afegir nou Tipus Obra</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
    <div class="row">
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <h1 class="text-center">Detalls Obra</h1>
            <h5><strong>Nom:</strong></h5>
            <p><?php echo $obraTrobada->getNomObra();?></p>
            <h5><strong>Descripció:</strong></h5>
            <p> <?php echo $obraTrobada->getDescripcioObra();?></p>
            <h5><strong>Data Inici:</strong></h5>
            <p> <?php echo $obraTrobada->getDataIniciObra();?></p>
            <h5><strong>Data Fi:</strong></h5>
            <p> <?php echo $obraTrobada->getDataFiObra();?></p>
            <h5><strong>Tipus Obra:</strong> </h5>
            <p><?php echo $tipusTrobat->getDescripcio()?></p>
            <h5><strong>Director:</strong></h5>
            <p> <?php echo $directorTrobat->getNom() . "  ". $directorTrobat->getCognom1(). "  ". $directorTrobat->getCognom2()?></p>
        </div>
    </div>    
</div>
