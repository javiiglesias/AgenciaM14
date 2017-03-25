<footer class="footer">  
    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3 col-md-push-2 col-lg-push-2">
            <h4>Explora la web</h4>
            <ul>
                <li><a href="?ctl=inici">Inici</a></li>
                <li><a href="?ctl=quisom">Qui som?</a></li>
                <li><a href="?ctl=llibres">Llibres</a></li> 
                <li><a href="?ctl=contacte">Contacte</a></li> 
            </ul>
        </div>
        <div class="col-xs-6 col-sm-3  col-md-4 col-lg-2 col-md-push-1 col-lg-push-1">
            <h4>Categories</h4>
            <?php
            require_once 'model/categoria.class.php';
            $cat = new CategoriaDAO();

            $sel = $cat->llistaCategoria();
            echo $sel;
            ?> 
        </div>
        <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3  col-lg-push-1">
            <h4>Subscriure</h4>
            <p>Rebi nostres últimes notícies</p>
            <form>
                <input class="suscripcion" type="email" name="Ingrese su dirección de e-mail">
                <button class="btn btn-primary">Subscriure</button>				
            </form>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-3  col-lg-push-1" >
            <h4>Social networks</h4>
            <div id="fd" class="col-xs-6 col-sm-3 col-md-2">
                <a href="#"><span class="fa fa-facebook fa-2x"></span></a>
            </div>
            <div id="twitter" class="col-xs-6 col-sm-3 col-md-2">
                <a href="#"><span class="fa fa-twitter fa-2x "></span></a>
            </div>
        </div>
    </div>
    <div class="container">        
        <hr/>
        <p>Copyright © 2017 | Creat per Yaritza Aburdene</p>
    </div>    
</footer>
</div><!-- end: container-fluid -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).on("click", ".delete", function () {
        var data_id = "";
        if (typeof $(this).data('id') !== undefined) {
            data_id = $(this).data('id');
        }
        $('#idobra').val(data_id);
    });
</script>
</body>
</html>


