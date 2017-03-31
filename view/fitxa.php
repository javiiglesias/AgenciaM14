<?php require_once 'view/menuEdicio.php'; ?>
<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <div  class="col-xs-12 col-md-3 col-lg-6 col-lg-push-3">        

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1 class=" text-center">Fitxa d'Actor: <?php echo $actor->getNom(); ?></h1>
                    </div>
                    <div class="panel-body">
                        <img src="view/images/<?php echo $actor->getFoto(); ?>" style="margin-left: 30%; padding: 10px;">
                        <table class="table">
                            <tr>
                                <td><h5><strong>Nom:</strong></h5></td>
                                <td><p><?php echo $actor->getNom(); ?></p></td>
                            </tr>
                            <tr>
                                <td><h5><strong>DNI:</strong></h5></td>
                                <td><p><?php echo $actor->getDni(); ?></p></td>
                            </tr>
                            <tr>
                                <td><h5><strong>Sexe:</strong></h5></td>
                                <td><p> <?php echo $actor->getSexe(); ?> </p></td>
                            </tr>
                            <tr>
                                <td><h5><strong>Descripcio:</strong></h5></td>
                                <td><p><?php echo $actor->getDescripcio(); ?></p></td>
                            </tr>
                        </table>
                    </div>
                </div>            
            </div>
        </div>   

    </div>
</div>

