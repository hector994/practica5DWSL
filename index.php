<?php
    require 'constantes.php';
    $css = CDN_BS_CSS;
    $js = CDN_BS_JS;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $css ?>
    <?php $js ?>
</head>
<body>
    <div class="row p-5">
        <div class="col-md-6">
            <h3>Ingrese la especie</h3>
            <form action="views/especies/index.php" method="post">
                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Ingrese la especie</h3>
            <form action="views/razas/index.php" method="post">
                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>