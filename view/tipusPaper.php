<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <br>
        <h1 class="text-center">TIPUS PAPER</h1>
        <div class="row col-lg-8 col-lg-push-3 ">
            <?php if (count($tipusPaperArray) > 0) { ?>        
                <?php foreach ($tipusPaperArray as $data): ?>	
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                            <h5><?php echo $data->getNom(); ?></h5> 
                            <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                <a href="?ctl=tipusPaper&act=modificar&id=<?php echo $data->getId(); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>                        
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
                        <h4 class="modal-title" id="myModalLabel">Eliminar Tipus Paper</h4>
                    </div>                  
                    <form action="?ctl=tipusPaper&act=eliminar" method="post">
                        <div class="modal-body">
                            <h1>Estàs segur que vols eliminar aquest tipus de paper?</h1>                       
                            <input type="hidden" name="id" id="idpaper" value="">   
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
        $('#idpaper').val(data_id);
    });
</script>