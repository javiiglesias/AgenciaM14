<div class="container">      
    </br>
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-5 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Obres") { ?>
                    <li role="presentation" class="active"><a href="?ctl=llibres">Mostrar Obres</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=obres">Mostrar Obres</a></li>
                <?php } ?>                   
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Afegir Obra") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
    <div class="row">
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <form action="?ctl=obra&act=afegir" method="post">  
                <h1 class="text-center">Afegir Obra</h1>
                <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades de la nova Obra</small></br>             
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" name="nom" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Descripcio: </label>
                    <textarea type="text" name="descripcio" rows="4" cols="4" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label>Data Inici:</label>
                    <input type="date" name="datainici" class="form-control" >               
                </div>       
                <div class="form-group">
                    <label>Data Fi:</label>
                    <input type="date" name="datafi" class="form-control" >               
                </div>   
                <div class="form-group">
                    <label>Tipus:</label>
                    <input type="text" name="tipusobra" class="form-control" >               
                </div>   
                <div class="form-group">
                    <label>Director:</label>
                    <input type="text" name="director" class="form-control" >               
                </div>                  
                <div class="col-md-offset-3 col-xs-offset-2">
                    <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
                </div>
            </form>
        </div>
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
