<div class="container">      
    </br>
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-3">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Director") { ?>
                    <li role="presentation" class="active"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=directors">Mostrar Directors</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>

                    <?php if ($titlePage == "Afegir Director") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=director&act=afegir">Afegir director</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=director&act=afegir">Afegir nou director</a></li>
                    <?php } ?>
                    <?php if ($titlePage == "Detalls director") { ?>
                        <li role="presentation" class="active"><a href="?ctl=director&act=detall">Mostrar Directors</a></li>
                    <?php } else { ?>
                        <li role="presentation"><a href="?ctl=director&act=detall">Mostrar Directors</a></li>
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
                    <h1 class=" text-center">Detalls Director</h1>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td><h5><strong>Dni:</strong></h5></td>
                            <td><p><?php echo $directorTrobat[0]->getDni(); ?></p></td>
                        </tr>
                        <tr>
                            <td><h5><strong>Nom:</strong></h5> </td>
                            <td><p> <?php echo $directorTrobat[0]->getNom(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Primer cognom:</strong></h5> </td>
                            <td><p> <?php echo $directorTrobat[0]->getCognom1(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Segon cognom:</strong></h5> </td>
                            <td><p> <?php echo $directorTrobat[0]->getCognom2(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Descripcio:</strong> </h5> </td>
                            <td><p><?php echo $directorTrobat[0]->getDescripcio() ?></p></td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>
    </div>    
</div>
