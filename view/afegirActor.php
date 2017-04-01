<div class="container">
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
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=actor&act=afegir" method="post">  
            <h1 class="text-center">Afegir Actor</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou actor </small></br>
            <div class="form-group has-feedback" id="validacio">
                <label>DNI:</label>
                <input type="text" id="dni" name="dni" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctDni"/>
                <img class="icon" src="view/images/error.png" hidden id="errorDni"/>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>Nom:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctnom"/>
                <img class="icon" src="view/images/error.png" hidden id="errornom"/>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>1º Cognom: </label>
                <input type="text" id="cognom1" name="cognom1" class="form-control"  required >
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>2º Cognom:</label>
                <input type="text" id="cognom2" name="cognom2" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            </div>
            <div class="form-group">
                <label>Sexe:</label>
                <?php
                $sexe = new Sexedb();
                $selsexe = $sexe->createSelectCategories();

                echo $selsexe;
                ?>
                <img class="icon" src="view/images/confirm.png" hidden id="correctsexe"/>
                <img class="icon" src="view/images/error.png" hidden id="errorsexe"/>
            </div>

            <div class="form-group">
                <label>Foto:</label>
                <input type="text" id="foto" name="foto" class="form-control"  required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctfoto"/>
                <img class="icon" src="view/images/error.png" hidden id="errorfoto"/>
            </div>

            <div class="form-group">
                <label>Descripcio:</label>
                <textarea class="form-control" id="descripcio" name="descripcio" rows="4" cols="4"></textarea>
                <img class="icon" src="view/images/confirm.png" hidden id="correctdescripcio"/>
                <img class="icon" src="view/images/error.png" hidden id="errordescripcio"/>
            </div>

            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
            </div>
        </form>
    </div>    
</div>
