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

function buscarDestinoPorNombre($nombreDestino) {
    $destinos = obtenerDestinos();

    foreach ($destinos as $destino) {
        if (strcasecmp($destino["destino"], $nombreDestino) == 0) {
            return $destino;
        }
    }

    return "Destino no encontrado";
}

function calcularPrecioConDescuento($nombreDestino, $porcentajeDescuento) {
    $destino = buscarDestinoPorNombre($nombreDestino);

    if (is_array($destino)) {
        $precioOriginal = $destino["precio"];
        $descuento = ($precioOriginal * $porcentajeDescuento) / 100;
        $precioConDescuento = $precioOriginal - $descuento;

        return $precioConDescuento;
    } else {
        return $destino;
    }
}

$destinos = obtenerDestinos();
foreach ($destinos as $destino) {
    echo "Destino: " . $destino["destino"] . ", País: " . $destino["país"] . ", Precio: $" . $destino["precio"] . ", Duración: " . $destino["duración"] . " días\n";
}

echo "\n";

$nombreDestino = "Tokio";
$resultado = buscarDestinoPorNombre($nombreDestino);

if (is_array($resultado)) {
    echo "Destino encontrado: ";
    echo "Destino: " . $resultado["destino"] . ", País: " . $resultado["país"] . ", Precio: $" . $resultado["precio"] . ", Duración: " . $resultado["duración"] . " días\n";
} else {
    echo $resultado . "\n";
}

echo "\n";

$nombreDestino = "Tokio";
$porcentajeDescuento = 10;
$precioConDescuento = calcularPrecioConDescuento($nombreDestino, $porcentajeDescuento);

if (is_numeric($precioConDescuento)) {
    echo "El precio con un descuento del $porcentajeDescuento% para $nombreDestino es: $" . $precioConDescuento . "\n";
} else {
    echo $precioConDescuento . "\n";
}