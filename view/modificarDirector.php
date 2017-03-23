<?php //require_once 'view/menuEdicio.php'; ?>
<div class="container">
    <br>
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
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-success btn-lg"><span class="fa fa-pencil"></span>  Modificar </button>
            </div>
        </form>
    </div>    
</div>
