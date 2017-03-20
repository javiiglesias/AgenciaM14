<?php require_once 'view/menuEdicio.php'; ?>
<div class="container">
    <br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4">        
        <form action="?ctl=llibre&act=modificar" method="post">  
            <h1 class="text-center">Modificar Llibre</h1>
            <small class="col-xs-offset-2 col-md-offset-2 col-sm-offset-1 col-lg-offset-3">Modificar les dades del llibre </small></br>
            <small class="col-md-offset-3 text-danger">El codi isbn no es pot modificar</small>
            <div class="form-group">
                <label>ISBN:</label>
                <input type="text" name="isbn" readonly="readonly" class="form-control" value="<?php echo $llibre->isbn; ?>">
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $llibre->nom; ?>" >
            </div>
            <div class="form-group">
                <label>Num pagines: </label>
                <input type="text" name="numPag" class="form-control" value="<?php echo $llibre->numPag; ?>" >
            </div>
            <div class="form-group">
                <label>autor:</label>
                <input type="text" name="autor" class="form-control" value="<?php echo $llibre->autor; ?>" >
            </div>
            <div class="form-group">
                <label>Categoria:</label>
                <?php
                require_once 'model/categoria.class.php';
                $cat = new CategoriaDAO();
                $categ = $llibre->categoria;
                $sel = $cat->categoriaSeleccionat($categ);
                echo $sel;
                ?>  
            </div>
            <div class="form-group">
                <label>cubierta:</label>
                <input type="text" name="cubierta" class="form-control" value="<?php echo $llibre->cubierta; ?>">
            </div>
            <div class="form-group">
                <label>Editorial:</label>
                <input type="text" name="editorial" class="form-control" value="<?php echo $llibre->editorial; ?>">
            </div>
            <div class="form-group">
                <label>llengua:</label>
                <?php
                require_once 'model/idioma.class.php';
                $idioma = new IdiomaDAO();

                $selIdioma = $idioma->IdiomaSeleccionat($llibre->llengua);
                echo $selIdioma;
                ?>
            </div>
            <div class="form-group">
                <label>Resum:</label>
                <textarea class="form-control" name="resumen" rows="4" cols="4"><?php echo $llibre->resumen; ?></textarea>
            </div>
            <div class="form-group">
                <label>Preu:</label>
                <input type="text" name="preu" value="<?php echo $llibre->preu; ?>">
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-success btn-lg"><span class="fa fa-pencil"></span>  Modificar </button>
            </div>
        </form>
    </div>    
</div>
