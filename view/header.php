<html>
    <head>
        <title><?php echo $titlePage ?></title>
        <!-- Estils -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--<link rel="stylesheet" type="text/css" href="view/css/tema.css"/>--->
        <link rel="stylesheet" type="text/css" href="view/css/estil.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css">
        <!-- Meta -->
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >
    </head>
    <body>
        <div class="container-fluid">
            <?php
                require_once 'menu.php';
            ?>
            <?php if ($titlePage != "Inici" && $titlePage != "Iniciar Sessio" && $titlePage != "Registrar-se") { ?>
                <header class="container-header">
                    <div class="container">
                        <h1><?php echo $titlePage ?></h1>
                        <hr class="featurette-divider">
                    </div>                
                </header>
            <?php } ?>
            

