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
                        <li role="presentation" class="active"><a href="?ctl=tipusObra&act=mostrar">Mostrar Tipus Obres</a></li>
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
        <h1 class="text-center">TIPUS OBRES</h1>
        <div class="row col-lg-8 col-lg-push-3 ">
            <?php if (count($tipusObraArray) > 0) { ?>        
                <?php foreach ($tipusObraArray as $data): ?>	
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                            <h5><?php echo $data->getDescripcio(); ?></h5> 
                            <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                <a href="?ctl=tipusObra&act=modificar&id=<?php echo $data->getId(); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>                        
                                <a href="#" data-toggle="modal" data-id="<?php echo $data->getId(); ?>" data-target="#eliminar" class="btn btn-danger btn-sm delete"><span class="fa fa-trash"></span></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
        </div>
        <!-- Eliminar -->
        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar Tipus Obra</h4>
                    </div>                  
                    <form action="?ctl=tipusObra&act=eliminar" method="post">
                        <div class="modal-body">
                            <h1>Estàs segur que vols eliminar aquest tipus d'obra?</h1>                       
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

<script>
    $(document).on("click", ".delete", function () {
        var data_id = "";
        if (typeof $(this).data('id') !== undefined) {
            data_id = $(this).data('id');
        }
        $('#idobra').val(data_id);
    });
</script>