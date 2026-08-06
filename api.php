<?php
header('Content-Type: application/json; charset=UTF-8');

$paquetes = [
    [
        "id" => 1,
        "destino" => "Punta Cana",
        "precio" => 15000,
        "dias" => 3,
        "hotel" => "5 Estrellas"
    ],
    [
        "id" => 2,
        "destino" => "Santiago",
        "precio" => 5000,
        "dias" => 2,
        "hotel" => "4 Estrellas"
    ]
];

echo json_encode($paquetes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
