<div class="navbar-container">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?ctl=inici"><img src="view/images/icon-logo.png" class="img-brand"/></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">                    
                    <ul class="nav navbar-nav">
                        <?php if ($titlePage == "Inici") { ?>
                            <li class="active"><a href="?ctl=inici">Inici</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=inici">Inici</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Qui som?") { ?>
                            <li class="active"><a href="?ctl=quisom">Qui som?</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=quisom">Qui som?</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Llibres") { ?>
                            <li class="active"><a href="?ctl=llibres">Llibres</a></li> 
                        <?php } else { ?>
                            <li><a href="?ctl=llibres">Llibres</a></li> 
                        <?php } ?>
                        <?php if ($titlePage == "Categories") { ?>
                            <li class="dropdown">
                                <?php
                                require_once 'model/categoria.class.php';
                                $cat = new CategoriaDAO();

                                $sel = $cat->llistaCategoria();
                                echo $sel;
                                ?> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li><a href="?ctl=llibres">Categories</a></li> 
                        <?php } ?>
                        <?php if ($titlePage == "contacte") { ?>
                            <li class="active"><a href="?ctl=contacte">Contacte</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=contacte">Contacte</a></li> 
                        <?php } ?>
                    </ul>
                    <?php if ($titlePage != "Iniciar Sessio" && $titlePage != "Registrar-se") { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <?php
                                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                                    if (isset($_SESSION['usuari'])) {
                                        $user = $_SESSION['usuari'];
                                    }
                                    ?> 
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> <?php echo $user; ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <?php } else { ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> Usuari  <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                        <?php } ?> 
                                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                            <li><a href="?ctl=usuari&act=sortir">Tancar Sessio</a></li>   
                                        <?php } else { ?>
                                            <li><a href="?ctl=usuari&act=login">Iniciar Sessio</a></li>
                                            <li><a href="?ctl=usuari&act=registre">Registrar-se</a></li>
                                        <?php } ?>                                                         
                                    </ul>
                            </li>
                        </ul>
                    <?php } ?> 
                </div>
            </div>
        </nav>
    </div>
</div>
