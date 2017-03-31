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
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" name="nom" class="form-control" value="<?php echo $obraTrobada->getNomObra(); ?>" >
                </div>
                <div class="form-group">
                    <label>Descripcio: </label>
                    <textarea type="text" name="descripcio" rows="4" cols="4" class="form-control" ><?php echo $obraTrobada->getDescripcioObra(); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Data Inici:</label>
                    <input type="date" name="datainici" id="datepicker-1" class="form-control" value="<?php echo $obraTrobada->getDataIniciObra(); ?>" >               
                </div>       
                <div class="form-group">
                    <label>Data Fi:</label>
                    <input type="date" name="datafi" id="datepicker-2" class="form-control" value="<?php echo $obraTrobada->getDataFiObra(); ?>">               
                </div>   
                <div class="form-group">
                    <label>Tipus:</label>
                    <?php echo $tipusObraSeleccionat ?>
                </div>   
                <div class="form-group">
                    <label>Director:</label>
                    <?php echo $directorSeleccionat ?>
                </div>                  
                <div class="col-md-offset-3 col-xs-offset-2">
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
        dayNamesShort: ['Diu', 'Dill', 'Dima', 'Dime', 'Dijo', 'Dive', 'Diss'],
        dayNamesMin: ['Diu', 'Dill', 'Dimt', 'Dimc', 'Dij', 'Div', 'Dis'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['ca']);
    $(function () {
        $("#fecha").datepicker();
    });
   $(function () {
        $("#datepicker-1").datepicker({dateFormat: 'dd/mm/yy'});
    });
    $(function () {
        $("#datepicker-2").datepicker({dateFormat: 'dd/mm/yy'});
    });

    //BOTO AFEGIR ACTOR I PAPER
    document.getElementById('afegirActor').onclick = afegirActor;

    function afegirActor() {

        //Container Actor/Paper
        var divRow = document.createElement("div");
        divRow.setAttribute("id", "div-row");
        divRow.setAttribute("class", "row");
        document.getElementById("addActor").appendChild(divRow);
        var btn = document.getElementById("addActor-btn");
        btn.insertBefore(divRow, btn.childNodes[0]);

        /* ===== Actor ======= */

        var divActor = document.createElement("div");
        divActor.setAttribute("id", "div-actor");
        divActor.setAttribute("class", "col-xs-6");
        document.getElementById("div-row").appendChild(divActor);

        var inputActor = document.createElement("input");
        inputActor.setAttribute("class", "form-control");
        var label = document.createElement("label");
        var text = document.createTextNode(" Actor:");
        label.appendChild(text);
        document.getElementById("div-actor").appendChild(label);
        document.getElementById("div-actor").appendChild(inputActor);

        /* ===== Paper ======= */
        var divPaper = document.createElement("div");
        divPaper.setAttribute("id", "div-paper");
        divPaper.setAttribute("class", "col-xs-6");
        document.getElementById("div-row").appendChild(divPaper);

        var inputActor = document.createElement("input");
        inputActor.setAttribute("class", "form-control");
        var label2 = document.createElement("label");
        var text2 = document.createTextNode(" Paper:");
        label2.appendChild(text2);
        document.getElementById("div-paper").appendChild(label2);
        document.getElementById("div-paper").appendChild(inputActor);
    }

</script>