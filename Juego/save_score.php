<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Deja el campo de contraseña vacío
$dbname = "game_scores";

// Obtener el puntaje del juego enviado por el cliente
$score = $_POST['score'];

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Preparar la consulta SQL para insertar el puntaje
$sql = "INSERT INTO scores (score) VALUES ($score)";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Puntaje guardado exitosamente";
} else {
    echo "Error al guardar el puntaje: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

