<div class="container-fluid">
    <div class="container" >
        <div class="col-xs-12 col-md-12 container-confirmacio">
            <?php if (strpos($missatge, "modificat") || strpos($missatge, "esborrat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=directors'>Tornar a la llista</a></p>
                </div>        
            <?php } ?>


            <?php if (strpos($missatge, "registrat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login'>Inicia Sessió</a></p>
                </div>        
            <?php } ?>

            <?php if (strpos($missatge, "afegit")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $missatge; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=llibre&act=afegir'>Tornar a afegir</a></p>
                </div>
                <div class="table-responsive col-xs-12 col-md-12">
                    <?php
                    if (count($llibresArray) > 0) {
                        ?>    
                        <table cellspacing="3" cellpadding="0" class="table table-bordered text-center">
                            <tr class="bg-primary">
                                <th>Isbn</th>
                                <th>Nom</th>
                                <th>Num Pag </th>
                                <th>Autor </th>
                                <th>Genere</th>
                                <th>Cubierta</th>                                
                                <th>Editorial</th>
                                <th>Llengua</th>
                                <th>Resumen</th>
                                <th>Preu</th>
                            </tr>
                            <?php foreach ($llibresArray as $data): ?>		
                                <tr>
                                    <td><?php echo $data->isbn; ?></td>
                                    <td><?php echo $data->nom; ?></td>
                                    <td><?php echo $data->numPag; ?></td>
                                    <td><?php echo $data->autor; ?></td>
                                    <td><?php echo $data->categoria->descripcion; ?></td>
                                    <td><?php echo $data->cubierta; ?></td>
                                    <td><?php echo $data->editorial; ?></td>
                                    <td><?php echo $data->llengua->nomIdioma; ?></td>
                                    <td><?php echo $data->resumen; ?></td>
                                    <td><?php echo $data->preu; ?></td>                       
                                </tr>
                            <?php endforeach; ?>
                        </table>

                        <?php
                    }
                    ?>
                </div>

            <?php } ?>
        </div>
    </div>
</div>

