<div class="container">      
    </br>
    <div class="row">
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
    <div class="row">
        <div  class="col-xs-12 col-md-3 col-lg-6 col-lg-push-3">        

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class=" text-center">Detalls Obra</h1>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td><h5><strong>Nom:</strong></h5></td>
                            <td><p><?php echo $obraTrobada->getNomObra(); ?></p></td>
                        </tr>
                        <tr>
                            <td><h5><strong>Descripció:</strong></h5> </td>
                            <td><p> <?php echo $obraTrobada->getDescripcioObra(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Data Inici:</strong></h5> </td>
                            <td><p> <?php echo $obraTrobada->getDataIniciObra(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Data Fi:</strong></h5> </td>
                            <td><p> <?php echo $obraTrobada->getDataFiObra(); ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Tipus Obra:</strong> </h5> </td>
                            <td><p><?php echo $tipusTrobat->getDescripcio() ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Director:</strong></h5> </td>
                            <td><p> <?php echo $directorTrobat->getNom() . "  " . $directorTrobat->getCognom1() . "  " . $directorTrobat->getCognom2() ?></p></td>
                        </tr>
                        <tr>
                            <td> <h5><strong>Actors:</strong></h5> </td>
                            <td>
                                <p>Actors que participen en aquesta obra:</p>
                                <hr>
                                <?php foreach ($ArrayObraActors as $data): ?>	
                                    <?php $actor = $obra_actor->cercarIdOActor($data->getActor()); ?>
                                    <?php $personatge = $obra_actor->cercarPersonatge($data->getActor()); ?>
                                    <p><strong> Actor:</strong> <?php echo $actor->getNom() . " " . $actor->getCognom1(); ?></p>
                                    <p> <strong> personatge:</strong>  <?php echo $personatge ?> ()</p>
                                    <hr>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>
    </div>    
</div>
