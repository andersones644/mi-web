<?php
include '../conexion/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Validación básica
    $nombre  = trim($_POST['nombre']);
    $email   = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);

    // Zona horaria Ecuador
    date_default_timezone_set('America/Guayaquil');
    $fecha = date("Y-m-d H:i:s");

    // Insertar en la base de datos
    $stmt = $conn->prepare("INSERT INTO mensajes (nombre, email, mensaje, fecha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $email, $mensaje, $fecha);

    if ($stmt->execute()) {
        echo "<script>
                alert('Mensaje enviado correctamente.');
                window.location='formulario_contacto.html';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Error al guardar en la base de datos.');
                history.back();
              </script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>