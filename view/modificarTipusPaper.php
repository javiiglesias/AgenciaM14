<div class="container">  
    <br>
    <div class="row">
        <br>
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Actors") { ?>
                    <li role="presentation" class="active"><a href="?ctl=actors">Mostrar Actors</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=actors">Mostrar Actors</a></li>
                <?php } ?>  
                <?php if ($titlePage == "Tipus Paper") { ?>
                    <li role="presentation" class="active"><a href="?ctl=?ctl=tipusPaper&act=mostrar">Mostrar Tipus Paper</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=tipusPaper&act=mostrar">Mostrar Tipus Paper</a></li>
                <?php } ?> 
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>

                    <?php if ($titlePage == "Afegir Actor") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=actor&act=afegir">Afegir nou Actor</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=actor&act=afegir">Afegir nou Actor</a></li>
                    <?php } ?>

                    <?php if ($titlePage == "Afegir Tipus Paper") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=tipusPaper&act=afegir">Afegir nou Tipus Paper</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=tipusPaper&act=afegir">Afegir nou Tipus Paper</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=tipusPaper&act=modificar" method="post">  
            <h1 class="text-center">Modificar Tipus Paper</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou tipus de paper</small></br> 
            <div class="form-group">
                <input type="text" name="id" hidden value="<?php echo $tipusPaperTrobat->getId(); ?>">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $tipusPaperTrobat->gettipus(); ?>">
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/guardar.png"/> Modificar </button>
            </div>
        </form>
    </div>
</div>
