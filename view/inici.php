<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- carousel -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide img-responsive" src="view/images/slide1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="paragraf col-xs-12 col-sm-6 col-md-3   col-sm-push-5 col-md-push-4 col-lg-push-4">
                        <img src="view/images/Logov2.png" class="img-responsive img-logoHeader">
                    </div>              
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide img-responsive" src="view/images/slide2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="paragraf col-xs-12 col-sm-6 col-md-3   col-sm-push-5 col-md-push-4 col-lg-push-4">
                        <img src="view/images/Logov2.png" class="img-responsive img-logoHeader">
                    </div>               
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide img-responsive" src="view/images/slide3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="paragraf col-xs-12 col-sm-6 col-md-3   col-sm-push-5 col-md-push-4 col-lg-push-4">
                        <img src="view/images/Logov2.png" class="img-responsive img-logoHeader">
                    </div>               
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- fi carousel -->
<div class="container">
    <h1>Tenim els millors llibres</h1>
    <hr class="featurette-divider">
    <div class="row col-lg-8 col-lg-push-2 ">
        <?php if (count($llibresArray) > 0) { ?>
            <?php foreach ($llibresArray as $data): ?>
                <div class="col-xs-12 col-lg-3 ">
                    <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                        <?php
                        $nomImg = $data->nom;
                        include 'imagenes.php';
                        ?>
                        <h4><?php echo $data->nom; ?></h4>
                        <h5><?php echo $data->autor; ?></h5>  
                        <p><strong>Preu:</strong> <?php echo $data->preu; ?> </p>                        
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } ?>

    </div>
    <div class="col-xs-12 col-md-7 col-md-push-2">
        <a href="?ctl=llibres"><button class="btn btn-primary btn-lg btn-block"> Ver més</button></a>
    </div>

    <div class="col-xs-12 col-lg-12">
        <img src="view/images/banner4.jpg" class="img-responsive"/>
    </div>

    <div class="col-xs-12 col-md-12 paragraf">
        <h1>Llibres amb Premis</h1>
        <hr class="featurette-divider">
        <div class="col-xs-12 col-lg-3">
            <img src="view/images/premiplaneta.jpg" class="img-responsive">
        </div>
        <div class="col-xs-12 col-lg-9">
            <h3>Todo Esto te Dare</h3>
            <p>Una mort inesperada. Un fosc secret familiar. La cerca de la veritat en el cor d'una terra llegendària. </p>
            <p ><span class="fa fa-trophy text-warning"></span> Premi Planeta de Novel·la 2016 </p>
            <Strong>Sinopsi</Strong>
            <p >En l'escenari majestuós de la Ribeira Sacra, Álvaro sofreix un accident que acabarà amb la seva vida.
                Quan Manuel, el seu marit, arriba a Galícia per reconèixer el cadàver, descobreix que la recerca 
                sobre el cas s'ha tancat amb massa rapidesa. El rebuig de la seva poderosa família política, els 
                Muñiz de Dávila, li impulsa a fugir però li reté l'al·legat contra la impunitat que Nogueira, un 
                guàrdia civil jubilat, esgrimeix contra la família d'Álvaro, nobles bressolats en els seus 
                privilegis, i la sospita que aquesta no és la primera mort del seu entorn que s'ha emmascarat com 
                a accidental. Lucas, un sacerdot amic de la infància d'Álvaro, s'uneix a Manuel i a Nogueira en 
                la reconstrucció de la vida secreta de qui creien conèixer bé.</p>

            <p>La inesperada amistat d'aquests tres homes sense cap afinitat aparent ajuda a Manuel a navegar entre l'amor per qui va anar el seu marit i el turment d'haver viscut d'esquena a la realitat, blindat després de la quimera del seu món d'escriptor. Començarà així la cerca de la veritat, en un lloc de fortes creences i arrelades costums en el qual la lògica mai acaba de lligar tots els caps.
            </p>
        </div>

        <div class="col-xs-12 col-lg-12">
            <img src="view/images/banner1.jpg" class="img-responsive"/>
        </div>

    </div>

</div>

