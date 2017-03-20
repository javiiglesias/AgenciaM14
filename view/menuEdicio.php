<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-11 col-sm-5 col-md-5 col-lg-6 col-xs-push-1 col-sm-push-4 col-md-push-4 col-lg-push-4">
            <ul class="nav nav-pills">
                <?php if ($titlePage == "Llibres") { ?>
                    <li role="presentation" class="active"><a href="?ctl=llibres">Mostrar Llibres</a></li>
                <?php } else { ?>
                    <li role="presentation"><a href="?ctl=llibres">Mostrar Llibres</a></li>
                <?php } ?>
                <?php if ($titlePage == "Cercar Llibres") { ?>
                    <li role = "presentation"  class="active"><a href ="?ctl=cercarLlibre">Cercar Llibre</a></li>
                <?php } else { ?>
                    <li role = "presentation"><a href = "?ctl=cercarLlibre">Llista Llibres</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                    <?php if ($titlePage == "Afegir Llibres") { ?>
                        <li role = "presentation" class="active"><a href ="?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } else { ?>
                        <li role = "presentation"><a href = "?ctl=obra&act=afegir">Afegir nova Obra</a></li>
                    <?php } ?>
                <?php } ?> 
            </ul>
            <hr class="featurette-divider">
        </div>  
    </div>
</div>


