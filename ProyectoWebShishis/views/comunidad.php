<?php
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>

<div class="container section">
    <div class="row">
        <div class="col s11">
            <ul class="collection">
                
                <li class="collection-item avatar">
                    <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" alt="" class="circle">
                    <span class="title">Juana del arco</span>
                    <p>Episodio 150 <br>
                        Como mori de risa con el episodio!!
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                
                <li class="collection-item avatar">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/ce54bf11889067.562541ef7cde4.png" alt="" class="circle">
                    <span class="title">Sono Yoko</span>
                    <p>Episodio 150 <br>
                        La tia Yari con la tia paty, lo mejor!!
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>     
                <li class="collection-item avatar">
                    <img src="https://cdn-icons-png.flaticon.com/512/147/147144.png" alt="" class="circle">
                    <span class="title">MiguelFeliz</span>
                    <p>Episodio 149 <br>
                        Extrañaba los episodios en vivo
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>                    
                </li>
                
                <li class="collection-item avatar">
                    <img src="http://cemokalab.com/wp-content/uploads/2015/07/avatar-369-456321.png" alt="" class="circle">
                    <span class="title">DinosaurioRawn</span>
                        <div class="row">
                            <div class="input-field col s6">
                              <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                              <label for="icon_prefix2">Deja tu comentario</label>
                              <button class="btn purple darken-4 right"><i class="material-icons left">send</i>Enviar</button>   
                            </div>
                          </div>
                        </form>
                      </div>                 
                </li>                
            </ul>            
        </div>
    </div>
</div>




<?php
} else { ?>
  <?php include '401.php' ?>
<?php } ?>


