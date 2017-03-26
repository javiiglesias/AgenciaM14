<div class="container">      
    </br>
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-5 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Obres") { ?>
                    <li role="presentation" class="active"><a href="?ctl=obres">Mostrar Obres</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=obres">Mostrar Obres</a></li>
                <?php } ?>                   
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Afegir Obra") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
    <div class="row">
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <form action="?ctl=obra&act=modificar" method="post">  
                <h1 class="text-center">Modificar Obra</h1>
                <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades de la nova Obra</small></br>             
                <input type="hidden" name="id" value="<?php echo $obraTrobada->getIdObra(); ?>">
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" name="nom" class="form-control" value="<?php echo $obraTrobada->getNomObra(); ?>" >
                </div>
                <div class="form-group">
                    <label>Descripcio: </label>
                    <textarea type="text" name="descripcio" rows="4" cols="4" class="form-control" ><?php echo $obraTrobada->getDescripcioObra(); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Data Inici:</label>
                    <input type="date" name="datainici" class="form-control" value="<?php echo $obraTrobada->getDataIniciObra(); ?>" >               
                </div>       
                <div class="form-group">
                    <label>Data Fi:</label>
                    <input type="date" name="datafi" class="form-control" value="<?php echo $obraTrobada->getDataFiObra(); ?>">               
                </div>   
                <div class="form-group">
                    <label>Tipus:</label>
                    <input type="text" name="tipusobra" class="form-control"  value="<?php echo $obraTrobada->getTipusObra(); ?>" >               
                </div>   
                <div class="form-group">
                    <label>Director:</label>
                    <input type="text" name="director" class="form-control" value="<?php echo $obraTrobada->getDirectorObra(); ?>" >               
                </div>                  
                <div class="col-md-offset-3 col-xs-offset-2">
                    <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/guardar.png"/>  Modificar </button>
                </div>
            </form>
        </div>
    </div>


</div>
