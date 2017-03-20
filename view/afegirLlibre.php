<?php require_once 'view/menuEdicio.php'; ?>
<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=llibre&act=afegir" method="post">  
            <h1 class="text-center">Afegir Llibre</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou llibre </small></br> 
            <div class="form-group">
                <label>ISBN:</label>
                <input type="text" name="isbn" class="form-control" >
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" >
            </div>
            <div class="form-group">
                <label>Num pagines: </label>
                <input type="text" name="numPag" class="form-control" >
            </div>
            <div class="form-group">
                <label>autor:</label>
                <input type="text" name="autor" class="form-control" >
            </div>
            <div class="form-group">
                <label>Categoria:</label>
                <?php
                require_once 'model/categoria.class.php';
                $cat = new CategoriaDAO();

                $selCat = $cat->createSelectCategories();
                echo $selCat;
                ?> 
            </div>
            <button type="button" class="btn btn-primary btn-xs btn-modal" data-toggle="modal" data-target="#afegirCategoria">
                Afegir Categoria
            </button>
            <div class="form-group">
                <label>cubierta:</label>
                <input type="text" name="cubierta" class="form-control">
            </div>
            <div class="form-group">
                <label>Editorial:</label>
                <input type="text" name="editorial" class="form-control">
            </div>
            <div class="form-group">
                <label>llengua:</label>
                <?php
                require_once 'model/idioma.class.php';
                $idioma = new IdiomaDAO();

                $selIdioma = $idioma->createSelectIdiomes();
                echo $selIdioma;
                ?>
            </div>
            <div class="form-group">
                <label>Resum:</label>
                <textarea class="form-control" name="resumen" rows="4" cols="4"></textarea>
            </div>
            <div class="form-group">
                <label>Preu:</label>
                <input type="text" name="preu">
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
