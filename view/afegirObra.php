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
                <div class="form-group">
                    <label>Tipus:</label>
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
</script>
