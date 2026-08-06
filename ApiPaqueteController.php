<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "conexion.php";

$stmt = $conn->query("SELECT * FROM paquetes");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>