<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <br>
            <br>
            <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
                <ul class="nav nav-pills">
                    <?php if ($titlePage == "Actors") { ?>
                        <li role="presentation" class="active"><a href="?ctl=actors">Mostrar Actors</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=actors">Mostrar Actors</a></li>
                    <?php } ?>  
                    <?php if ($titlePage == "Tipus Paper") { ?>
                        <li role="presentation" class="active"><a href="?ctl=?ctl=tipusPaper&act=mostrar">Mostrar Tipus Paper</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=tipusPaper&act=mostrar">Mostrar Tipus Paper</a></li>
                    <?php } ?> 
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>

                        <?php if ($titlePage == "Afegir Actor") { ?>
                            <li role = "presentation" class="active"><a href ="?ctl=actor&act=afegir">Afegir nou Actor</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=actor&act=afegir">Afegir nou Actor</a></li>
                        <?php } ?>

                        <?php if ($titlePage == "Afegir Tipus Paper") { ?>
                            <li role = "presentation" class="active"><a href ="?ctl=tipusPaper&act=afegir">Afegir nou Tipus Paper</a></li>
                        <?php } else { ?>
                            <li role = "presentation"><a href = "?ctl=tipusPaper&act=afegir">Afegir nou Tipus Paper</a></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <hr class="featurette-divider">
            </div>  
        </div>
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
                            <tr>
                                <td> <h5><strong>Obres:</strong></h5> </td>
                                <td>
                                    <p>Obres en les que participa o ha participat:</p>
                                    <hr>
                                    <?php //foreach ($arrayObres as $data):?>
                                        <p><?php echo $obres->getNomObra() ?></p>
                                        <hr>
                                    <?php// endforeach; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>            
            </div>
        </div>   

    </div>
</div>

