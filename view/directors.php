<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
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
</div>

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
                            <a href="?ctl=director&act=detall&dni=<?php echo $data->getDni(); ?>" class="caixa-detalls" data-detalls="Clic per veure detalls d'aquest director">
                            <?php
                            // poner imagen del director
                            $nomImg = "Director";
                            include 'imagenes.php';
                            ?>
                            <h5><strong><?php echo $data->getDni(); ?></strong></h5>
                            <h5><strong><?php echo $data->getNom(); ?></strong></h5>
                            <h5><strong><?php echo $data->getCognom1(); ?></strong></h5>
                            <h5><strong><?php echo $data->getCognom2(); ?></strong></h5>
                            <h5><strong><?php echo $data->getDescripcio(); ?></strong></h5>
                            <?php
                            if (isset($_SESSION['login']) == true) {
                                // cambiar param
                                echo "<td><div align='center'><a href='./index.php?ctl=director&act=modificar&dni=" . $data->getDni() . "'><img src='./view/images/modificar.png' width='40' height='40'></a></div></td>";
                                echo "<td><div align='center'><a href='./index.php?ctl=director&act=eliminar&dni=" . $data->getDni() . "'><img src='./view/images/eliminar.png' width='40' height='40'></a></div></td>";
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
        </div> 
    </div>
</div>

