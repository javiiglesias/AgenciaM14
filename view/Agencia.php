<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 27/03/17
 * Time: 15:56
 */
require_once 'view/menuEdicio.php';
?>
<div class="col-lg-12">
    <div class="container">
        <div class="col-xs-12 col-md-6 col-md-push-3">
            <h1>PAGINA Agencia</h1>
        </div>
        <div class="row col-lg-8 col-lg-push-3 ">
            <?php if (count($agencia) > 0) { ?>
                <?php foreach ($agencia as $data): ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                            <h5><strong><?php echo $data->getCif(); ?></strong></h5>
                            <h5><strong><?php echo $data->getNom(); ?></strong></h5>
<!--                            <h5><strong>DIRECTORS</strong></h5>-->
<!--                            <h5><strong>--><?php //echo $data->getDni(); ?><!--</strong></h5>-->
<!--                            <h5><strong>--><?php //echo $data->getNom(); ?><!--</strong></h5>-->
<!--                            <h5><strong>--><?php //echo $data->getCognom1(); ?><!--</strong></h5>-->
<!--                            <h5><strong>--><?php //echo $data->getCognom2(); ?><!--</strong></h5>-->
<!--                            <h5><strong>Obres</strong></h5>-->
<!--                            <h5><strong>Nom:</strong> --><?php //echo $data->getNomObra(); ?><!--</h5>-->
<!--                            <h5><strong>Data Inici:</strong> --><?php //echo $data->getDataIniciObra(); ?><!--</h5>-->
<!--                            <h5><strong>Data Fi:</strong> --><?php //echo $data->getDataFiObra(); ?><!--</h5>-->
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
        </div>
    </div>
</div>

