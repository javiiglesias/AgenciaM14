<?php
require_once 'view/menuEdicio.php';
?>
<div class="col-lg-12">
    <div class="container">
        <div class="col-xs-12 col-md-6 col-md-push-3">
            <h1>PAGINA DIRECTORS</h1>
        </div>
        <div class="row col-lg-8 col-lg-push-3 ">
            <?php if (count($directors) > 0) { ?>
                <?php foreach ($directors as $data): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                            <?php
                            // poner imagen del director
                            $nomImg = $data->getNom();
                            include 'imagenes.php';
                            ?>
                            <h5><strong><?php echo $data->getDni(); ?></strong></h5>
                            <h5><strong><?php echo $data->getNom(); ?></strong></h5>
                            <h5><strong><?php echo $data->getCognom1(); ?></strong></h5>
                            <h5><strong><?php echo $data->getCognom2(); ?></strong></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
        </div> 
    </div>
</div>

