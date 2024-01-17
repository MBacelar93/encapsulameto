<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'ControleRemoto.php';
        $controle = new ControleRemoto();
        $controle->ligar();
        $controle->maisVolume();
        $controle->maisVolume();
        echo '<br>';
        print_r($controle->mostrarVolume());
    ?>
    
</body>
</html>