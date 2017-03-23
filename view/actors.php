<?php require_once 'view/menuEdicio.php'; ?>
<div class="col-lg-12">
    <div class="container">
        <div class="col-xs-12 col-md-6 col-md-push-3">
            <h1>PAGINA ACTORS</h1>
            <form action="?ctl=actors" method="post">
                <div class="form-group">
                    Cercar per Categoria:
                    <?php
                    
                    
                    $cat = new Sexedb();

                    $sel = $cat->createSelectCategories();
                    echo $sel;
                    ?> 
                    Quantitat de registres:
                    <select name="quantitat">
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
                    <button name="Submit" class="btn btn-info"><image class="btn-icon" src="view/images/cercar.png"/>  Cercar</button>
                </div>            
            </form>
        </div>
        <div class="row col-lg-8 col-lg-push-3 ">
            
            <?php if (count($arrayActors) > 0) { ?>        
                <?php foreach ( $arrayActors as  $data): ?>	
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="thumbnail col-lg-11 col-lg-pull-1 llibres text-center">
                            <img class="icon" src="<?php echo $data->getFoto(); ?>"></img>
                            <h5><strong><?php echo $data->getNom(); ?></strong></h5>
                            <h5><?php echo $data->getDni(); ?></h5>                        
                            <h5><strong>Sexe:</strong> <?php echo $data->getSexe(); ?> <a href="?ctl=veure_fitxa&id=<?php echo $data->getId(); ?>" class="btn btn-danger btn-sm"></span> Fitxa</a></h5>                        
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php } ?>
        </div> 
    </div>
</div>

