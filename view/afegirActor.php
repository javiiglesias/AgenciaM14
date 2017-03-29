<?php require_once 'view/menuEdicio.php'; ?>
<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=actor&act=afegir" method="post">  
            <h1 class="text-center">Afegir Actor</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou llibre </small></br> 
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" name="dni" class="form-control" >
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" >
            </div>
            <div class="form-group">
                <label>1º Cognom: </label>
                <input type="text" name="cognom1" class="form-control" >
            </div>
            <div class="form-group">
                <label>2º Cognom:</label>
                <input type="text" name="cognom2" class="form-control" >
            </div>
            <div class="form-group">
                <label>Sexe:</label>
                <?php
                $sexe = new Sexedb();
                $selsexe = $sexe->createSelectCategories();
               
                echo $selsexe;
                ?> 
            </div>
           
            <div class="form-group">
                <label>Foto:</label>
                <input type="text" name="foto" class="form-control">
            </div>
          
            <div class="form-group">
                <label>Descripcio:</label>
                <textarea class="form-control" name="descripcio" rows="4" cols="4"></textarea>
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Afegir Categoria</h4>
                </div>
                <div class="modal-body">
                    <div  class="col-xs-12 col-md-12 col-lg-12 ">        
                        <form action="?ctl=categoria&act=afegir" method="post">  
                            <h1 class="text-center">Afegir Categoria</h1>
                            <div class="col-xs-6 col-xs-offset-3  form-group">
                                <label>ID:</label>
                                <input type="text" name="id" class="form-control" />
                            </div>
                            <div class="col-xs-6 col-xs-offset-3  form-group">
                                <label>Nom:</label>
                                <input type="text" name="nom" class="form-control" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tancar</button>
                    <button type="submit" class="btn btn-primary">Afegir</button>
                </div>
            </div>
        </div>
    </div>
</div>
