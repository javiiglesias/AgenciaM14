<div class="container">  
    <br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4 formulari">        
        <form action="?ctl=tipusPaper&act=afegir" method="post">  
            <h1 class="text-center">Afegir Tipus Paper</h1>
            <small class="col-xs-offset-2 col-md-offset-1 col-sm-offset-1  col-lg-offset-3">Introdueix les dades del nou tipus de paper</small></br> 
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nomPaper" class="form-control" >
                <label>Tipus Paper:</label>
                <select name="tipusPaper" class="form-control">
                    <option value="option">- Escull tipus paper -</option>
                    <option value="1">Primari</option>
                    <option value="2">Secundari</option>
                    <option value="3">Extra</option>
                    <option value="4">Especialista</option>
                    <option value="5">Repartiment</option>
                </select>
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-primary btn-lg"><image class="btn-icon" src="view/images/afegir.png"/> Afegir </button>
            </div>
        </form>
    </div>
</div>
