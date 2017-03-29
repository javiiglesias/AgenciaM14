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
                    <a class="navbar-brand" href="?ctl=inici"><img src="view/images/logo_icon.png" class="img-brand"/></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">                    
                    <ul class="nav navbar-nav">
                        <?php if ($titlePage == "Inici") { ?>
                            <li class="active"><a href="?ctl=inici">Inici</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=inici">Inici</a></li>
                        <?php } ?>

                        <?php if ($titlePage == "Agencia") { ?>
                            <li class="active"><a href="?ctl=agencia&act=detall">Agencia</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=agencia&act=detall">Agencia</a></li>
                        <?php } ?>

                        <?php if ($titlePage == "Qui som?") { ?>
                            <li class="active"><a href="?ctl=quisom">Qui som?</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=quisom">Qui som?</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Actors") { ?>
                            <li class="active"><a href="?ctl=actors">Actors</a></li> 
                        <?php } else { ?>
                            <li><a href="?ctl=actors">Actors</a></li> 
                        <?php } ?>
                        <?php if ($titlePage == "Obres") { ?>
                            <li class="active"><a href="?ctl=obres">Obres</a></li> 
                        <?php } else { ?>
                            <li><a href="?ctl=obres">Obres</a></li> 
                        <?php } ?>
                        <?php if ($titlePage == "Directors") { ?>
                            <li class="active"><a href="?ctl=directors">Directors</a></li> 
                        <?php } else { ?>
                            <li><a href="?ctl=directors">Directors</a></li> 
                        <?php } ?>
                        
                        <?php if ($titlePage == "Contacte") { ?>
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
