<?php
include ('conectaDB.php');

$consulta = "SELECT * FROM registro";
echo ('<br>');
echo ($consulta);
$resultado = mysqli_query($mysqli, $consulta);
if (!$resultado){
    echo 'No se pudo seleccionar la base de datos';
    exit();
}

echo ('<br>');
echo ('Primer recorrido');

while ($filasql = mysqli_fetch_array($resultado)){
    echo ('<br>');
    echo $filasql[0].'';
    echo $filasql[1].'';
    echo $filasql[2].'';
    echo '-';
    
    echo $filasql['id'].'';
    echo $filasql['nombre'].'';
    echo $filasql['apellido'].'';
}
mysqli_close($mysqli);
?>

