<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Directors") { ?>
                    <li role="presentation" class="active"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Afegir Director") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=director&act=afegir">Afegir nou director</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=director&act=afegir">Afegir nou director</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>
    </div>
</div>

<div class="container">  
    </br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=director&act=afegir" method="post">
            <h1 class="text-center">Afegir Director</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou Director </small></br>
            <div class="form-group has-feedback" id="validacio">
                <label>DNI:</label>
                <input id="dni" type="text" name="dni" class="form-control"  required>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                <span id="error_dni" class="missatge_error"></span>
            </div>

            <div class="form-group has-feedback" id="validacio">
                <label>Nom:</label>
                <input id="nom" type="text" name="nom" class="form-control"   required>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>Cognom: </label>
                <input id="cognom1" type="text" name="cognom1" class="form-control"   required>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>Segon cognom:</label>
                <input id="cognom2" type="text" name="cognom2" class="form-control"  required>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback" id="validacio">
                <label>Descripció:</label>
                <textarea id="descripcio" rows="4" cols="50" name="descripcio" class="form-control" required></textarea>
                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
            </div>
        </form>
    </div>   
</div>
