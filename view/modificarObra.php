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
                    <li role="presentation" class="active"><a href="?ctl=tipusObra">Mostrar Tipus Obres</a></li>
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
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <form action="?ctl=obra&act=modificar" method="post">  
                <h1 class="text-center">Modificar Obra</h1>
                <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades de la nova Obra</small></br>             
                <input type="hidden" name="id" value="<?php echo $obraTrobada->getIdObra(); ?>">
                <div class="form-group  has-feedback" id="validacio">
                    <label>Nom:</label>
                    <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $obraTrobada->getNomObra(); ?>" required>
                    <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group  has-feedback" id="validacio">
                    <label>Descripcio: </label>
                    <textarea type="text" id="descripcio" name="descripcio" rows="4" cols="4" class="form-control" required><?php echo $obraTrobada->getDescripcioObra(); ?></textarea>
                    <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group  has-feedback" id="validacio">
                    <label>Data Inici:</label>
                    <input type="date" name="datainici" id="datepicker-1" class="form-control data" value="<?php echo $obraTrobada->getDataIniciObra(); ?>" required >               
                    <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                </div>       
                <div class="form-group  has-feedback" id="validacio">
                    <label>Data Fi:</label>
                    <input type="date" name="datafi" id="datepicker-2" class="form-control data" value="<?php echo $obraTrobada->getDataFiObra(); ?>" required>               
                    <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                </div>   
                <div class="form-group">
                    <label>Tipus:</label>
                    <?php echo $tipusObraSeleccionat ?>
                </div>   
                <div class="form-group">
                    <label>Director:</label>
                    <?php echo $directorSeleccionat ?>
                </div>     
                <div class="form-group">
                    <label>Actors d'obra:</label>
                    <div class="row">
                        <div class="col-xs-12">                            
                            <?php foreach ($ActorsObra as $data): ?>                            
                                <label>Actor:</label>
                                <?php echo $obra->actorObraSelecctionat($data->getActor()); //var_dump($data)?>
                            </div>
                            <div class="col-xs-6  has-feedback" id="validacio">
                                <label>Personatge:</label>
                                <input class="form-control" name="personatge[]" value="<?php echo $data->getPersonatge(); ?>" id="nom" required/>
                                <span id="span-validacio" class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="col-xs-6">
                                <label>Tipus Paper:</label>
                                <?php echo $obra->tipuspaperSeleccionat($data->getTipusPaper()); ?>  
                            </div><br>
                        <?php endforeach; ?> 
                    </div>
                    <br>
                    <br>                    
                </div>

                <div class="col-xs-7 col-md-4 col-md-offset-5 col-xs-offset-1">
                    <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/guardar.png"/>  Modificar </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    /* ============= DatePicker ============= */
    $.datepicker.regional['ca'] = {
        closeText: 'Tancar',
        prevText: '< Ant',
        nextText: 'Seg >',
        currentText: 'Avui',
        monthNames: ['Gener', 'Febrer', 'Març', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Setembre', 'Octubre', 'Novembre', 'Desembre'],
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Abr', 'Maig', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Des'],
        dayNames: ['Diumenge', 'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte'],
        dayNamesShort: ['Dg', 'Dl', 'Dt', 'Dm', 'Dj', 'Dv', 'Ds'],
        dayNamesMin: ['Dg', 'DL', 'Dt', 'Dm', 'Dj', 'Dv', 'Ds'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['ca']);
    $(function () {
        $("#datepicker-1").datepicker({dateFormat: 'dd/mm/yy'});
    });
    $(function () {
        $("#datepicker-2").datepicker({dateFormat: 'dd/mm/yy'});
    });
</script>