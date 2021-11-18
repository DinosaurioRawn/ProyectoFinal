<?php
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'home';
echo "<br>";

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;

    case "login":
        require_once ('./views/login.php');
        break; 

    case "registro":
        require_once('./views/registro.php');
        break;

    case "podcast":
        require_once('./views/podcast.php');
        break;

    case "eventos":
        require_once('./views/eventos.php');
        break;
    
    case "acercade":
        require_once('./views/acercade.php');
        break;

    case "comunidad":
        require_once ('./views/comunidad.php');
        break;

    case "salir":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;
    
    default:
        require_once('./views/home.php');
}
?>

