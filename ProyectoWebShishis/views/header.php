<?php
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
    
}
if(isset($_SESSION['loggedUserName'])){
    ?>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper pink lighten-3">
        <a href="?menu=home" class="brand-logo"><img src="images/logo.png" width="60px" height="60px"/> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?menu=podcast">Podcast</a></li>
        <li><a href="?menu=eventos">Eventos</a></li>
        <li><a href="?menu=acercade">Acerca de</a></li>
        <li><a href="?menu=comunidad">Comunidad</a></li>
        <li><a href="?menu=salir">Salir</a></li>
      </ul>
    </div>
  </nav>
</div>

<?php   }else{
    ?>

<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper pink lighten-3">
        <a href="?menu=home" class="brand-logo"><img src="images/logo.png" width="60px" height="60px"/> </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?menu=login">Login</a></li>
        <li><a href="?menu=registro">Registro</a></li>
        <li><a href="?menu=podcast">Podcast</a></li>
        <li><a href="?menu=eventos">Eventos</a></li>
        <li><a href="?menu=acercade">Acerca de</a></li>
      </ul>
    </div>
  </nav>
</div>
<?php } ?>
          
         
