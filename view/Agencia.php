<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Agencia</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-9 col-lg-push-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="bg-primary" colspan="2">Informacio d'Agència</th>
                        </tr>  
                        <tr>
                            <?php if (count($agencia) > 0) { ?>
                                <?php foreach ($agencia as $data): ?>

                                    <td><strong>Nom d'Agencia:</strong>  <?php echo $data->getNom(); ?></td>
                                    <td><strong>CIf:</strong>  <?php echo $data->getCif(); ?></td>
                                <?php endforeach; ?>
                            <?php } ?>
                        </tr>  
                        <tr>
                            <th colspan="2"><h5><strong>Directors</strong></h5></th>
                        </tr> 
                        <?php if (count($directores) > 0) { ?>
                            <?php $contDirector = count($directores); ?>
                            <tr>
                                <td class="text-left"><h6><strong>Aquesta Agencia te <?php echo $contDirector; ?> directors</strong></h6></td>
                                <td colspan="3"> <?php foreach ($directores as $data): ?>   
                                        <ul>
                                            <a href="?ctl=director&act=detall&dni=<?php echo $data->getDni(); ?>" class="caixa-detalls" data-detalls="Clic per veure més detalls">
                                                <li><?php echo $data->getNom() . $data->getCognom1() . $data->getCognom2() ?></li>
                                            </a>
                                        </ul>
                                    <?php endforeach; ?> 
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <th colspan="2"><h5><strong>Obres</strong></h5></th>
                        </tr> 
                        <?php if (count($obras) > 0) { ?>
                            <?php $contObres = count($obras); ?>
                            <tr>
                                <td class="text-left"><h6><strong>Aquesta Agencia te <?php echo $contObres; ?> Obres</strong></h6></td>
                                <td colspan="3"> <?php foreach ($obras as $data): ?>   
                                        <ul>
                                            <a href="?ctl=obra&act=detalls&id=<?php echo $data->getIdObra(); ?>" class="caixa-detalls" data-detalls="Clic per veure més detalls">
                                                <li><?php echo $data->getNomObra() ?></li>
                                            </a>
                                        </ul>
                                    <?php endforeach; ?> 
                                </td>
                            </tr>
                        <?php } ?>

                        <tr>
                            <th colspan="2"><h5><strong>Actors</strong></h5></th>
                        </tr> 
                        <?php if (count($actores) > 0) { ?>
                            <?php $contActors = count($actores); ?>
                            <tr>
                                <td class="text-left"><h6><strong>Aquesta Agencia te <?php echo $contActors; ?> Actors</strong></h6></td>
                                <td colspan="3"> <?php foreach ($actores as $data): ?>   
                                        <ul>
                                            <a href="?ctl=veure_fitxa&id=<?php echo $data->getId(); ?>" class="caixa-detalls" data-detalls="Clic per veure més detalls">
                                                <li><?php echo $data->getNom() . " " . $data->getCognom1() . " " . $data->getCognom2() ?></li>
                                            </a>
                                        </ul>
                                    <?php endforeach; ?> 
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
<div id="fixa" class="alert alert-warning" style="display:none; position:absolute; z-index: 3;"></div>
<script>    
    $(function () {
        $(".caixa-detalls").mouseover(function () {
            var veure = $(this).data("detalls");
            $("#fixa").html("<strong>" + veure + "</strong>").show();
        });

        $(".caixa-detalls").mouseout(function () {
            $("#fixa").hide().html("");

        });

        $(document).mousemove(function (evento) {
            var posx = evento.pageX;
            var posy = evento.pageY;
            $("#fixa").css("left", posx + 15);
            $("#fixa").css("top", posy + 15);
        });
    });
</script>
