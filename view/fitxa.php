<?php require_once 'view/menuEdicio.php'; ?>
<div class="col-lg-12">
    <div class="container">
        <div class="col-xs-12 col-md-6 col-md-push-3">
            <h1>Fitxa <?php echo $actor->getNom(); ?></h1>

        </div>
        <div class="row col-lg-8 col-lg-push-3 ">
            <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                <img class="icon" src="<?php echo $actor->getFoto(); ?>"></img>
                <h5><strong><?php echo $actor->getNom(); ?></strong></h5>
                <h5><?php echo $actor->getDni(); ?></h5>                        
                <h5><strong>Sexe:</strong> <?php echo $actor->getSexe(); ?> <a  href="?clt=veure_fitxa&id=<?php echo $actor->getId(); ?>" class="btn btn-danger btn-sm"></span> Fitxa</a></h5>                        
            </div>
        </div> 
    </div>
</div>

