<?php?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l4 offset-l4 offset-m3">
                <form action="" method="get">
                    <div class="row card-panel z-depth-4">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">face</i>
                            <input type="text" placeholder="Nombre" id="nombre" name="nombre" class="validate" required/>
                            <input type="text" placeholder="Apellido" id="apellido" name="apellido" class="validate" required/>
                        </div>                       
                        
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" placeholder="Usuario" id="usuario" name="usuario" class="validate" required/>
                        </div>
                        
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input type="password" placeholder="Password" id="password" name="password" class="validate" required/>
                        </div>
                        
                        <button class="btn purple darken-4 right"><i class="material-icons left">send</i>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

