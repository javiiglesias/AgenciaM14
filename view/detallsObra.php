<div class="container">      
    </br>
    <div class="row">
        <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
            <h1 class="text-center">Detalls Obra</h1>
            <h5><strong>Nom:</strong>  <?php echo $obraTrobada->getNomObra();?></h5>
            <h5><strong>Detalles:</strong> <?php echo $obraTrobada->getDescripcioObra();?></h5>
            <h5><strong>Data Inici:</strong> <?php echo $obraTrobada->getDataIniciObra();?></h5>
            <h5><strong>Data Fi:</strong> <?php echo $obraTrobada->getDataFiObra();?></h5>
            <h5><strong>Tipus Obra:</strong> <?php echo $obraTrobada->getTipusObra();?></h5>
            <h5><strong>Director:</strong> <?php echo $obraTrobada->getDirectorObra();?></h5>
        </div>
    </div>    
</div>
