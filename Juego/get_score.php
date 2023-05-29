<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Deja el campo de contraseña vacío
$dbname = "game_scores";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consultar el último puntaje guardado en la base de datos
$sql = "SELECT score FROM scores ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener el puntaje del resultado de la consulta
    $row = $result->fetch_assoc();
    $score = $row["score"];

    // Devolver el puntaje como respuesta
    echo $score;
} else {
    echo "No se encontraron puntajes guardados";
}

// Cerrar la conexión
$conn->close();
?>
