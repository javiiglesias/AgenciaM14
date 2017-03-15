<div class="container">
    <div class="col-xs-12 col-md-12">
        <?php require_once 'view/menuEdicio.php'; ?>
    </div>
    <div class="col-xs-12 col-md-6 col-md-push-3">
        <form action="?ctl=llibre&act=cercar" method="post">
            <div class="form-group">
                Cercar per Categoria:
                <?php
                require_once 'model/categoria.class.php';
                $cat = new CategoriaDAO();

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
    <div class="table-responsive col-xs-12 col-md-12">
        <?php
        if (count($llibresArray) > 0) {
            ?>    
            <table cellspacing="3" cellpadding="0" class="table table-bordered text-center">
                <tr class="bg-primary text-th">
                    <th>Isbn</th>
                    <th>Nom</th>
                    <th>Num Pag </th>
                    <th>Autor </th>
                    <th>Genere</th>
                    <th>Cubierta</th>                    
                    <th>Editorial</th>
                    <th>Llengua</th>
                    <th>Resum</th>
                    <th>Preu</th>
                </tr>
                <?php foreach ($llibresArray as $data): ?>		
                    <tr>
                        <td><?php echo $data->isbn; ?></td>
                        <td><?php echo $data->nom; ?></td>
                        <td><?php echo $data->numPag; ?></td>
                        <td><?php echo $data->autor; ?></td>
                        <td><?php echo $data->categoria->descripcion; ?></td>
                        <td><?php echo $data->cubierta; ?></td>
                        <td><?php echo $data->editorial; ?></td>
                        <td><?php echo $data->llengua->nomIdioma; ?></td>
                        <td><?php echo $data->resumen; ?></td>
                        <td><?php echo $data->preu; ?>€</td>
                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                            <td><a href="?ctl=llibre&act=modificar&isbn=<?php echo $data->isbn; ?>"><img src="view/images/modificar.png" class="icon"/></a></td>
                            <td><a href="?ctl=llibre&act=eliminar&isbn=<?php echo $data->isbn; ?>" onclick="return confirm('Estas segur que vols eliminar aquest Llibre?')"><img src="view/images/eliminar.png" class="btn-icon"/></a></td>
                        <?php } ?>
                    </tr>
                <?php endforeach; ?>
            </table>

            <?php
        }
        ?>
    </div>
</div>

