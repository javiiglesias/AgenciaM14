<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <br>            
            <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
                <ul class="nav nav-pills">
                    <?php if ($titlePage == "Directors") { ?>
                        <li role="presentation" class="active"><a href="?ctl=directors">Mostrar Directors</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=directors">Mostrar Directors</a></li>
                    <?php } ?>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                        <?php if ($titlePage == "Directors") { ?>
                            <li role = "presentation"><a href ="?ctl=director&act=afegir">Afegir nou director</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=director&act=afegir">Por modificar</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <hr class="featurette-divider">
            </div>  
        </div>
        <h1 class="text-center">DIRECTORS</h1>        
        <div class="row">
            <div class="col-lg-10  col-lg-push-2">
                <br>
                <br>
                <?php if (count($directors) > 0) { ?>                    
                    <?php foreach ($directors as $data): ?>	
                        <a href="?ctl=director&act=detall&dni=<?php echo $data->getDni(); ?>" class="caixa-detalls" data-detalls="Clic per veure detalls d'aquest director">
                            <div class="col-sm-6 col-md-4 col-lg-4 ">
                                <div class="thumbnail text-center div-caixa">
                                    <?php
                                    $nomImg = "Director";
                                    include 'imagenes.php';
                                    ?>
                                    <div class="caption">
                                        <h5><strong><?php echo $data->getNom() . " " . $data->getCognom1() . " " . $data->getCognom2(); ?></strong></h5>
                                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                            <p><div class="pull-right btn-mof-elim"><br>
                                                <a href="?ctl=director&act=modificar&dni=<?php echo $data->getDni(); ?>" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>
                                                <a href="#" data-toggle="modal" data-dni="<?php echo $data->getDni(); ?>" data-target="#eliminar" class="btn btn-danger btn-sm delete"><span class="fa fa-trash"></span></a>
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
                    <form action="?ctl=director&act=eliminar" method="post">
                        <div class="modal-body">
                            <h1>Estàs segur que vols eliminar aquest Director?</h1>                       
                            <input type="hidden" name="dni" id="dniDirector" value="">   
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
        var data_dni = "";
        if (typeof $(this).data('dni') !== undefined) {
            data_dni = $(this).data('dni');
        }
        $('#dniDirector').val(data_dni);
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

