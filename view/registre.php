<html>
    <head>
        <title><?php echo $titlePage ?></title>
        <!-- Estils -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--<link rel="stylesheet" type="text/css" href="view/css/tema.css"/>--->
        <link rel="stylesheet" type="text/css" href="view/css/estil.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- Meta -->
        <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="body-login">
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
                    <img src="view/images/Logo.png" class="img-responsive img-Logologin">
                </div>
                <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">                    
                    <div class="container-login">                        
                        <form action="?ctl=usuari&act=registre" method="post">  
                            <h1 class="text-center">Registrar-se</h1>
                            <small class="col-md-offset-1">Si us plau, ompliu tots els camps. </small>
                            <div class="form-group space-top">
                                <label>Nom d'usuari:</label>
                                <input type="text" name="nou_usuari" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Introdueix Contrasenya:</label>
                                <input type="password" name="pass" class="form-control">
                            </div>
                            <p><a href="?ctl=usuari&act=login">Iniciar Sessió</a></p>
                            <div class="col-md-offset-3 col-xs-offset-2">
                                <button name="Submit" class="btn btn-info">  Registrar-se    <image class="btn-icon" src="view/images/registre.png"/></button>
                            </div> 
                        </form>
                    </div>                    
                </div>
            </div>