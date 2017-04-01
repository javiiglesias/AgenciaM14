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
        <div class="col-xs-12 col-md-6 col-md-push-3">            
            <form action="?ctl=actors" method="post">
                <div class="form-group">
                    <div class="col-sm-5">
                        <p>Cercar per Sexe:
                            <?php
                            $cat = new Sexedb();

                            $sel = $cat->createSelectCategories();
                            echo $sel;
                            ?> </p>
                    </div>
                    <div class="col-sm-5">
                        Quantitat de registres:
                        <select name="quantitat" class="form-control">
                            <option value=" "> </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="72">72</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                        </select>
                    </div>
                    <div class="col-sm-2"><br>
                        <button name="Submit" class="btn btn-primary"><image class="btn-icon" src="view/images/cercar.png"/>  Cercar</button>
                    </div>
                </div>            
            </form>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-center">ACTORS</h1>
                <br>
                <br>
                <?php if (count($arrayActors) > 0) { ?>        
                    <?php foreach ($arrayActors as $data): ?>
                        <a href="?ctl=veure_fitxa&id=<?php echo $data->getId(); ?>" class="caixa-detalls" data-detalls="Clic per veure detalls d'aquest actor">
                            <div class="col-sm-6 col-md-4 col-lg-4 ">
                                <div class="thumbnail text-center div-caixa">
                                    <img src="view/images/<?php echo $data->getFoto(); ?>">
                                    <div class="caption">
                                        <h5><strong><?php echo $data->getNom() . " " . $data->getCognom1(); ?></strong></h5>
                                        <h5><strong>Sexe:</strong> <?php echo $data->getSexe(); ?> </h5><br>
                                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                            <p><div class="pull-right btn-mof-elim">
                                                <a href="?ctl=actor&act=modificar&id=<?php echo $data->getId(); ?>" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>                                
                                                <a href="?ctl=actor&act=eliminar&id=<?php echo $data->getId(); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                            </div></p>
                                        <?php } ?> 
                                    </div>
                                </div>
                            </div></a>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div> 
</div> 

<div id="fixa" class="alert alert-warning" style="display:none; position:absolute; z-index: 3;"></div>
<script>
    $(document).on("click", ".delete", function () {
        var data_id = "";
        if (typeof $(this).data('id') !== undefined) {
            data_id = $(this).data('id');
        }
        $('#idobra').val(data_id);
    });
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