<?php

require '../../db/db.php';
$query = "SELECT * FROM  razas";
$ejecutar = mysqli_query($db,$query);
$data = $ejecutar->fetch_array();
$mensaje;
if ($data != null) {
    foreach ($data as $row) {
        echo $row["nombre"];
    }
}else {
    $mensaje = "no existe registro";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$mensaje?>
    <?= date("Y-m-d H:i:s")?>
</body>
</html>