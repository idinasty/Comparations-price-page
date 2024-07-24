<?php
include 'conexion_be.php';

// Iniciar la sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        // Preparar y ejecutar la consulta para buscar al usuario
        $query = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
        $stmt = mysqli_prepare($conexion, $query);
        if (!$stmt) {
            die('Error en la preparación de la consulta: ' . mysqli_error($conexion));
        }

        mysqli_stmt_bind_param($stmt, 'ss', $correo, $contrasena);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // Usuario encontrado, iniciar sesión y redirigir a index
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['id']; // Asume que el campo 'id' es el identificador del usuario
            header("Location: ../index.php");
            exit;
        } else {
            // Usuario no encontrado o contraseña incorrecta
            echo '
                <script>
                    alert("Correo o contraseña incorrectos.");
                    window.location = "../login.php";
                </script>
            ';
            exit;
        }

        mysqli_stmt_close($stmt);
    } else {
        // Campos POST no definidos
        echo '
            <script>
                alert("Por favor, complete todos los campos.");
                window.location = "../login.php";
            </script>
        ';
    }
} else {
    // Método de solicitud no permitido
    echo '
        <script>
            alert("Método de solicitud no permitido");
            window.location = "../login.php";
        </script>
    ';
}

mysqli_close($conexion);
?>
