<div id="menu" style="color: white">
    <br>
    <p><a class="btn btn-block btn-dark disabled">Demuestra que estás listo para la EVAU</a></p>
    <p><a id="sigue1" class="btn btn-block btn-primary" onclick="sigue('1')">HISTORIA</a></p>
    <p><a id="sigue2" class="btn btn-block btn-primary" onclick="sigue('2')">ECONOMIA</a></p>
    <p><a id="sigue3" class="btn btn-block btn-primary" onclick="sigue('3')">FILOSOFIA</a></p>
    <p><a id="sigue4" class="btn btn-block btn-primary" onclick="sigue('4')">LENGUA Y LITERATURA</a></p>
    <p><a id="sigue5" class="btn btn-block btn-primary" onclick="sigue('5')">INGLÉS</a></p>
</div>

<script>
    function sigue(_tema){
        switch (_tema){
            case '1' : $("#menu").load("juego.php",{vidas:3, correctas:0, tema:"Historia"}); break;
                case '2' : $("#menu").load("juego.php",{vidas:3, correctas:0, tema:"Economia"}); break;
                     case '3' : $("#menu").load("juego.php",{vidas:3, correctas:0, tema:"Filosofia"}); break;
                         case '4' : $("#menu").load("juego.php",{vidas:3, correctas:0, tema:"Lengua"}); break;
                             case '5' : $("#menu").load("juego.php",{vidas:3, correctas:0, tema:"Ingles"}); break;
        }
    }
    
</script>
    <?php