<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
                <ul class="nav nav-pills">
                    <?php if ($titlePage == "Obres") { ?>
                        <li role="presentation" class="active"><a href="?ctl=obres">Mostrar Obres</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=obres">Mostrar Obres</a></li>
                    <?php } ?>  
                    <?php if ($titlePage == "Tipus Obra") { ?>
                        <li role="presentation" class="active"><a href="?ctl=?ctl=tipusObra&act=mostrar">Mostrar Tipus Obres</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=tipusObra&act=mostrar">Mostrar Tipus Obres</a></li>
                    <?php } ?> 
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>

                        <?php if ($titlePage == "Afegir Obra") { ?>
                            <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                        <?php } ?>

                        <?php if ($titlePage == "Afegir Tipus Obra") { ?>
                            <li role = "presentation" class="active"><a href ="?ctl=tipusObra&act=afegir">Afegir nou Tipus Obra</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=tipusObra&act=afegir">Afegir nou Tipus Obra</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <hr class="featurette-divider">
            </div>  
        </div>
        <h1 class="text-center">OBRES</h1>
        <div class="col-xs-12 col-md-6 col-md-push-3">

            <form action="?ctl=obra&act=cercar" method="post">
                <div class="form-group">                   
                    <div class="col-sm-5">
                        <p>Cercar per Tipus d'obra:
                            <?php
                            echo $selectTipusObra;
                            ?> </p>
                    </div>
                    <div class="col-sm-5">
                        <p>Quantitat de registres:
                            <select name="quantitat" class="form-control">
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
                            </select></p>
                    </div>
                    <div class="col-sm-2"><br>
                        <button name="Submit" class="btn btn-primary"><image class="btn-icon" src="view/images/cercar.png"/>  Cercar</button>
                    </div>
                </div>            
            </form>            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <br>
                <br>
                <?php if (count($obraArray) > 0) { ?>
                    <?php if ($llistaTitle != null) {?>
                        <h3><?php echo $llistaTitle;?></h3>
                    <?php }  ?>
                    <?php foreach ($obraArray as $data): ?>	
                        <a href="?ctl=obra&act=detalls&id=<?php echo $data->getIdObra(); ?>" class="caixa-detalls" data-detalls="Clic per veure detalls d'aquesta obra">
                            <div class="col-sm-6 col-md-4 col-lg-4 ">
                                <div class="thumbnail text-center div-caixa">
                                    <img src="view/images/obra.jpg">
                                    <div class="caption">
                                        <h5><strong>Nom d'Obra:</strong> <?php echo $data->getNomObra(); ?></h5>
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
                            </div>
                        </a>                    
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
                            <h1>Estàs segur que vols eliminar aquesta obra?</h1>                       
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
<div id="fixa" class="alert alert-warning" style="display:none; position:absolute; z-index: 3;"></div>
<script>
    $(document).on("click", ".delete", function () {
        var data_id = "";
        if (typeof $(this).data('id') !== undefined) {
            data_id = $(this).data('id');
        }
        $('#idobra').val(data_id);
    });
    $(function () {
        $(".caixa-detalls").mouseover(function () {
            var veure = $(this).data("detalls");
            $("#fixa").html("<strong>" + veure + "</strong>").show();
        });

        $(".caixa-detalls").mouseout(function () {
            $("#fixa").hide().html("");

        });

        $(document).mousemove(function (evento) {
            var posx = evento.pageX;
            var posy = evento.pageY;
            $("#fixa").css("left", posx + 15);
            $("#fixa").css("top", posy + 15);
        });
    });
</script>

