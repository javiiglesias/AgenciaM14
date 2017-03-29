<html>
    <head>
        <title><?php echo $titlePage ?></title>
        <!-- JS -->
        <script src="view/js/jquery-3.2.0.min.js"></script>
        <script src="view/js/validateForm.js"></script>
        <!-- Estils -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css"/>-
        <link rel="stylesheet" type="text/css" href="view/css/estil.css"/>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
        <!-- Meta -->
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
            

