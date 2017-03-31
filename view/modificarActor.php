<?php require_once 'view/menuEdicio.php'; ?>
<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=actor&act=modificar" method="post">  
            <h1 class="text-center">Modificar Actor</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-2">Introdueix les dades a modificar del actor </small></br> 
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" name="dni" class="form-control" value="<?php echo $actor->getDni(); ?>" >
            </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $actor->getNom(); ?>" >
            </div>
            <div class="form-group">
                <label>1º Cognom: </label>
                <input type="text" name="cognom1" class="form-control" value="<?php echo $actor->getCognom1(); ?>">
            </div>
            <div class="form-group">
                <label>2º Cognom:</label>
                <input type="text" name="cognom2" class="form-control" value="<?php echo $actor->getCognom2(); ?>" >
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
                <input type="text" name="foto" class="form-control"value="<?php echo $actor->getFoto(); ?>" >
            </div>

            <div class="form-group">
                <label>Descripcio:</label>
                <textarea class="form-control" name="descripcio" rows="4" cols="4"><?php echo $actor->getDescripcio(); ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Modificar </button>
            </div>

        </form>
    </div>    
</div>
