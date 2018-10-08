<?php
//capturo los valores de los parámetros que me han sido pasados
//desde app.php
$vidas = $_POST['vidas'];
$correctas = $_POST['correctas'];
$tema = $_POST['tema'];

?>

<div>
    <p></p>
    <p><a class="btn btn-block btn-dark disabled">Demuestra que estás listo para la EVAU</a></p>
    <p><a class="btn btn-block btn-warning" onclick="volver();">Volver al Menú</a></p>
    <p><a id="sigue1" class="btn btn-block btn-primary"><?php echo $tema;?></a></p>
    
</div>

<script>
    function volver(){
       $('#principal').load('app.php');
    }    
</script>