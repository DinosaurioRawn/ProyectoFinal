<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'dbmycomunity';

$conexion = mysqli_connect($db_host, $db_user, $db_password, $db_db);

$mysqli = @new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
        );

if ($mysqli->connect_error) {
    echo 'La conexión a la base de datos de MYSQL No es correcta.';
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

return $mysqli;

?>

