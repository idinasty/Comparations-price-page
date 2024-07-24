<?php
include 'conexion_be.php';

// Inicia la sesión
session_start();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Depuración: Verifica los datos recibidos
echo "Correo: $correo<br>";
echo "Contraseña: $contrasena<br>";

// Verificar si el administrador existe
$validar_login = mysqli_query($conexion, "SELECT * FROM administradores WHERE correo = '$correo' AND contrasena = '$contrasena'");

// Depuración: Verifica el resultado de la consulta
if (!$validar_login) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['admin_id'] = $correo; // Guardar la sesión del administrador
    
    // Redirigir al dashboard
    header("Location: ../admin_dashboard.php");
    exit;
} else {
    // Si el inicio de sesión falla, redirige de nuevo al login
    echo '
    <script>
        alert("Correo o contraseña incorrectos");
        window.location = "../login_admins.php";
    </script>
    ';
    exit;
}

mysqli_close($conexion);
?>
