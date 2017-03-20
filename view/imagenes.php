<!-- Imatge mostra-->
<?php if (strpos($nomImg, "Monde") ||strpos($nomImg, "Sonetos") || strpos($nomImg, "Heredero") || strpos($nomImg, "Arte") || strpos($nomImg, "Romanov") ||strpos($nomImg, "dare") ||strpos($nomImg, "viento") || strpos($nomImg, "Sabio") || strpos($nomImg, "Silencio") || strpos($nomImg, "Deseo") || strpos($nomImg, "Maga") || strpos($nomImg, "Princess")) {?>
    <?php if (strpos($nomImg, "viento")) {?>
    <img src="view/images/nombredelviento.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Sabio")) {?>
    <img src="view/images/hombreSabio.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Silencio")) {?>
    <img src="view/images/musicadelsilencio.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Deseo")) {?>
    <img src="view/images/ultimodeseo.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Maga")) {?>
    <img src="view/images/lamaga.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Princess")) {?>
    <img src="view/images/littleprincess.jpg" class="img-responsive img-mostra">
    <?php } ?>
     <?php if (strpos($nomImg, "dare")) {?>
    <img src="view/images/premiplaneta.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Romanov")) {?>
    <img src="view/images/losromanov.jpg" class="img-responsive img-mostra">
    <?php } ?>
    <?php if (strpos($nomImg, "Arte")) {?>
    <img src="view/images/historiaarte.jpg" class="img-responsive img-mostra">
    <?php } ?>
     <?php if (strpos($nomImg, "Heredero")) {?>
    <img src="view/images/herederosdelatierra.jpg" class="img-responsive img-mostra">
    <?php } ?>
     <?php if (strpos($nomImg, "Sonetos")) {?>
    <img src="view/images/ciensonetosdeamor.jpg" class="img-responsive img-mostra">
    <?php } ?>
     <?php if (strpos($nomImg, "Monde")) {?>
    <img src="view/images/letourdumonde.jpg" class="img-responsive img-mostra">
    <?php } ?>
<?php } else{?>
    <img src="view/images/llibredefault.png" class="img-responsive img-mostra">
<?php }?>
    
