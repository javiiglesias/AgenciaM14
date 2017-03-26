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
                <?php if ($titlePage == "Cercar Directors") { ?>
                    <li role = "presentation"  class="active"><a href ="?ctl=directors&act=cercar2">Llista Director</a></li>
                <?php } else { ?>
                    <li role = "presentation"><a href = "?ctl=directors&act=cercar2">Llista Director</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Directors") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=director&act=afegir">Afegir nou director</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=director&act=afegir">Por modificar</a></li>
                    <?php } ?>
                <?php } ?> 
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
</div>


