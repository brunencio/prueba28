<?php
    function obtenerDestinos() {
        $destinos = array(
            array(
                "destino" => "París",
                "país" => "Francia",
                "precio" => 1200,
                "duración" => 7
            ),
            array(
                "destino" => "Tokio",
                "país" => "Japón",
                "precio" => 1500,
                "duración" => 10
            ),
            array(
                "destino" => "Nueva York",
                "país" => "Estados Unidos",
                "precio" => 1000,
                "duración" => 5
            ),
            array(
                "destino" => "Sídney",
                "país" => "Australia",
                "precio" => 2000,
                "duración" => 14
            ),
            array(
                "destino" => "Río de Janeiro",
                "país" => "Brasil",
                "precio" => 900,
                "duración" => 8
            )
        );
    
        return $destinos;
    }
    
    $destinos = obtenerDestinos();
    foreach ($destinos as $destino) {
        echo "Destino: " . $destino["destino"] . ", País: " . $destino["país"] . ", Precio: $" . $destino["precio"] . ", Duración: " . $destino["duración"] . " días\n";
    }
?>