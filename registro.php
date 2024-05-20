<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si el formulario de registro ha sido enviado
if (isset($_POST['register'])) {
    // Obtener los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_BCRYPT);

    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO Usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.history
?>