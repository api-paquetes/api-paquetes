<?php
header('Content-Type: texto/html; charset=UTF-8');

echo "<h1>API de Viajes funcionando</h1>";
echo "<a href='api.php'>Ver Paquetes en JSON</a>";

// Esto le dice a Render que si estamos vivos
$port = $_ENV['PORT'] ?? 8000;
error_log("API corriendo en puerto: " . $port);
?>
