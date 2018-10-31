
            <div class ="row">
                <h3 style=" white-space: nowrap;" >Elige un nombre de usuario y una contraseña para registrarte</h3>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/>
                    
                    <br/>
                        <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                        <br/>
                        <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                        <br/>
                        <input id ="cajaPassword2" class="form-control" type="password" placeholder="Repite la contraseña">
                        <br/>                        
                        <button id="volver" class="btn btn-warning btn-block" type="submit">Cancelar</button>
                        <br/>
                        <button id="boton1" class="btn btn-success btn-block" type="submit">REGISTRA!</button>                        
                        <br/><br/>
                </div>
                <div class="col-4">
                </div>
            </div>

    <script> 
        $('#boton1').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();
            var _cajaPassword2 = $('#cajaPassword2').val();
            if (_cajaPassword != _cajaPassword2){
                alert('LAS CONTRASEÑAS NO COINCIDEN');
            }
            else{
                $('#principal').load("registra_2.php",{
                    cajaNombre : _cajaNombre,
                    cajaPassword : _cajaPassword
                });
            }
        });
    </script> 
