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
            <div class="form-group">
                <label>DNI:</label>
                <input id="dni" type="text" name="dni" class="form-control" required">
                <img class="icon" src="view/images/confirm.png" hidden id="correctDni"/>
                <img class="icon" src="view/images/error.png" hidden id="errorDni"/>
            </div>

            <div class="form-group">
                <label>Nom:</label>
                <input id="nom" type="text" name="nom" class="form-control"  onchange="notEmpty('nom')" required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctnom"/>
                <img class="icon" src="view/images/error.png" hidden id="errornom"/>
            </div>
            <div class="form-group">
                <label>Cognom: </label>
                <input id="cognom1" type="text" name="cognom1" class="form-control"  onchange="notEmpty('cognom1')" required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom1"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom1"/>
            </div>
            <div class="form-group">
                <label>Segon cognom:</label>
                <input id="cognom2" type="text" name="cognom2" class="form-control" onchange="notEmpty('cognom2')" required>
                <img class="icon" src="view/images/confirm.png" hidden id="correctcognom2"/>
                <img class="icon" src="view/images/error.png" hidden id="errorcognom2"/>
            </div>
            <div class="form-group">
                <label>Descripció:</label>
                <textarea id="description" rows="4" cols="50" name="descripcio" class="form-control" onchange="notEmpty('description')" required></textarea>
                <img class="icon" src="view/images/confirm.png" hidden id="correctdescription"/>
                <img class="icon" src="view/images/error.png" hidden id="errordescription"/>
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
