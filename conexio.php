<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "sql302.infinityfree.com";
$user = "if0_42549498";
$pass = "TU_CONTRASEÑA_REAL_AQUI"; // NO OLVIDES CAMBIAR ESTO
$db   = "if0_42549498_agencia_v2";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(["error" => "Error de conexion: " . $e->getMessage()]);
    exit();
}
?>