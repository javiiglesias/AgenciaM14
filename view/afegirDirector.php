<?php require_once 'view/menuEdicio.php'; ?>
<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=director&act=afegir" method="post">
            <h1 class="text-center">Afegir Director</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou Director </small></br>
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" name="dni" class="form-control" >
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" >
            </div>
            <div class="form-group">
                <label>Cognom: </label>
                <input type="text" name="cognom1" class="form-control" >
            </div>
            <div class="form-group">
                <label>Segon cognom:</label>
                <input type="text" name="cognom2" class="form-control" >
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="afegirCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary">Afegir</button>
                </div>
            </div>
        </div>
    </div>
</div>
