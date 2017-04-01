<?php //require_once 'view/menuEdicio.php';   ?>
<div class="container">
    <br>
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Directors") { ?>
                    <li role="presentation" class="active"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Directors") { ?>
                        <li role = "presentation"><a href ="?ctl=director&act=afegir">Afegir nou director</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=director&act=afegir">Por modificar</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4">        
        <form action="?ctl=director&act=modificar" method="post">
            <h1 class="text-center">Modificar Director</h1>
            <small class="col-xs-offset-2 col-md-offset-2 col-sm-offset-1 col-lg-offset-3">Modificar les dades del Director </small></br>
            <small class="col-md-offset-3 text-danger">El DNI del director no es pot modificar.</small>
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" name="dni" readonly="readonly" class="form-control" value="<?php echo $dir[0]->getDni(); ?>">
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $dir[0]->getNom(); ?>" >
            </div>
            <div class="form-group">
                <label>Cognom1: </label>
                <input type="text" name="cognom1" class="form-control" value="<?php echo $dir[0]->getCognom1(); ?>" >
            </div>
            <div class="form-group">
                <label>Cognom2: </label>
                <input type="text" name="cognom2" class="form-control" value="<?php echo $dir[0]->getCognom2(); ?>" >
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>Descripció:</label>
                <textarea id="descripcio" rows="4" cols="50" name="descripcio" class="form-control" required><?php echo $dir[0]->getDescripcio(); ?></textarea>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/guardar.png"/>  Modificar </button>
            </div>
        </form>
    </div>    
</div>
