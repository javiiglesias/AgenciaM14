<?php
/**
 * Created by PhpStorm.
 * User: javi
 * Date: 23/03/17
 * Time: 16:15
 */


?>
<div class="container">
    <br>
    <div  class="col-xs-12 col-md-3 col-lg-4 col-lg-push-4">
        <form action="?ctl=directors&act=cercar" method="post">
            <h1 class="text-center">Filtrar Director</h1>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $nom ?>" >
            </div>
            <div class="col-md-offset-3 col-xs-offset-2">
                <button name="Submit" class="btn btn-success btn-lg"><span class="fa fa-pencil"></span>  Filtrar </button>
            </div>
        </form>
    </div>
</div>
<?php
require_once 'view/header.php';
require_once 'view/directors.php';
require_once 'view/footer.php';
?>