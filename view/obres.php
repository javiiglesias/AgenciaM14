
<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="col-xs-11 col-sm-5 col-md-5 col-lg-5 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
                <ul class="nav nav-pills">
                    <?php if ($titlePage == "Obres") { ?>
                        <li role="presentation" class="active"><a href="?ctl=llibres">Mostrar Obres</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=llibres">Mostrar Llibres</a></li>
                    <?php } ?>                   
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                        <?php if ($titlePage == "Afegir Llibres") { ?>
                            <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <hr class="featurette-divider">
            </div>  
        </div>
        <h1 class="text-center">OBRES</h1>
        <div class="col-xs-12 col-md-6 col-md-push-4">

            <form action="?ctl=llibres" method="post">
                <div class="form-group">
                    Cercar per Categoria:
                    <?php
                    require_once 'model/categoria.class.php';
                    $cat = new CategoriaDAO();

                    $sel = $cat->createSelectCategories();
                    echo $sel;
                    ?> 
                    Quantitat de registres:
                    <select name="quantitat">
                        <option value=" "> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="72">72</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                    </select>

                    <button name="Submit" class="btn btn-primary"><image class="btn-icon" src="view/images/cercar.png"/>  Cercar</button>
                </div>            
            </form>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php if (count($obraArray) > 0) { ?>        
                    <?php foreach ($obraArray as $data): ?>	
                        <a href="?ctl=obra&act=detalls&id=<?php echo $data->getIdObra(); ?>">
                            <div class="col-sm-6 col-md-4 col-lg-4 ">
                                <div class="thumbnail text-center div-caixa">
                                    <img src="view/images/obra.jpg">
                                    <div class="caption">
                                        <h5><strong>Nom:</strong> <?php echo $data->getNomObra(); ?></h5>
                                        <h5><strong>Data Inici:</strong> <?php echo $data->getDataIniciObra(); ?></h5>                        
                                        <h5><strong>Data Fi:</strong> <?php echo $data->getDataFiObra(); ?></h5>
                                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                        <p><div class="pull-right btn-mof-elim">
                                                <a href="?ctl=obra&act=modificar&id=<?php echo $data->getIdObra(); ?>" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>
                                                <a href="#" data-toggle="modal" data-id="<?php echo $data->getIdObra(); ?>" data-target="#eliminar" class="btn btn-danger btn-sm delete"><span class="fa fa-trash"></span></a>
                                        </div></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div></a>                    
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div> 
        <!-- Eliminar -->
        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar Obra</h4>
                    </div>                  
                    <form action="?ctl=obra&act=eliminar" method="post">
                        <div class="modal-body">
                            <h1>Estas segur que vos eliminar aquesta obra?</h1>                       
                            <input type="hidden" name="id" id="idobra" value="">   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tancar</button>                                   
                            <button type="submit" class="btn btn-success">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

