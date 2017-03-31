<div class="container">  
    <br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=tipusPaper&act=modificar" method="post">  
            <h1 class="text-center">Modificar Tipus Paper</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou tipus de paper</small></br> 
            <div class="form-group">
                <input type="text" name="id" hidden value="<?php echo $arrayTipusPaper->getId(); ?>">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $arrayTipusPaper->getNom(); ?>">
                <label>Principal:</label>
                <input type="text" name="principal" class="form-control" value="<?php echo $arrayTipusPaper->getPrimari(); ?>">
                <label>Secundari:</label>
                <input type="text" name="secundari" class="form-control" value="<?php echo $arrayTipusPaper->getSecundari(); ?>">
                <label>Extra:</label>
                <input type="text" name="extra" class="form-control" value="<?php echo $arrayTipusPaper->getExtra(); ?>">
                <label>Especialista:</label>
                <input type="text" name="especialista" class="form-control" value="<?php echo $arrayTipusPaper->getEspecialista(); ?>">
                <label>Repartiment:</label>
                <input type="text" name="repartiment" class="form-control" value="<?php echo $arrayTipusPaper->getRepartiment(); ?>">
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/guardar.png"/> Modificar </button>
            </div>
        </form>
    </div>
</div>
