<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$cantidadEnPesos = floatval($_POST["pesos"]);
$valorDolar=40;
$cantidadTotalDolares= $cantidadEnpesos / $valorDolar;
echo "<h2>Resultado de la Conversión</h2>";
echo "<p`>$cantidadEnPesos pesos uruguayos equivalen a " . $cantidadTotalDolares ."dólares";




}else{
    echo "Error en la solicitud";

    

}


?>