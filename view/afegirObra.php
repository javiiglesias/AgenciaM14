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
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <form action="?ctl=obra&act=afegir" method="post">  
                <h1 class="text-center">Afegir Obra</h1>
                <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades de la nova Obra</small></br>             
                <div class="form-group">
                    <label>Nom:</label>
                    <input type="text" name="nom" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Descripcio: </label>
                    <textarea type="text" name="descripcio" rows="4" cols="4" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label>Data Inici:</label>
                    <input type="text" name="datainici" id="datepicker-1" class="form-control" >               
                </div>       
                <div class="form-group">
                    <label>Data Fi:</label>
                    <input type="text" name="datafi" id="datepicker-2" class="form-control" >               
                </div> 
                <div class="form-group" id="addActor">
                    <label>Actor:</label>
                    <div class="col-sm-12" id="addActor-btn"><br>                        
                        <div class="col-xs-6">
                            <p><button  type="button" class="btn btn-primary btn-sm" id="afegirActor"><span class="fa fa-plus"></span>Afegir Actor A Obra</button></p>                        
                        </div>
                        <!--                        <div class="col-xs-6">
                                                    <p><button  type="button" class="btn btn-primary btn-sm" id="afegirActor"><span class="fa fa-plus"></span>Afegir nou Actor</button></p>
                                                </div>-->
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label>Tipus d'Obra:</label>
                    <?php echo $selectTipusObra; ?>
                </div>   
                <div class="form-group">
                    <label>Director:</label>
                    <?php echo $selectDirector; ?>
                </div>                  
                <div class="col-md-offset-3 col-xs-offset-2">
                    <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/>  Afegir </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script>
    $(function () {
        $("#datepicker-1").datepicker();
    });
    $(function () {
        $("#datepicker-2").datepicker();
    });

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
