<?php

include_once 'conectaDB.php';

class listado{

    public static function login($_usuario, $_password) {
        $mysqli = conectadb::dbmyslq();
        $stmt = $mysqli->prepare('SELECT usuario, password FROM registro WHERE usuario=? and password=?');
        $stmt->bind_param('ss', $_usuario, $_password);
        $stmt->execute();
        $resultado = $stmt->get_result();

        while ($filasql = mysqli_fetch_array($resultado)) {
            session_start();
            $_SESSION['loggedUserName'] = $filasql['usuario'];
        }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
            $acceso = true;
        }
        $mysqli->close();
        return $acceso;
    }
    
    public static function update($_nombre, $_apellido, $_usuario, $_password) {
        
        
    }

}

?>

