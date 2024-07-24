<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar que el correo no se repita en la Base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM administradores WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../login_admins.php";
            </script>
        ';
        exit();
    }

    // Verificar que el usuario no se repita en la Base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM administradores WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location = "../login_admins.php";
            </script>
        ';
        exit();
    }

    // Insertar el registro si no hay duplicados
    $query = "INSERT INTO administradores(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Administrador registrado exitosamente");
                window.location = "../login_admins.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Inténtalo de nuevo, administrador no registrado exitosamente");
                window.location = "../login_admins.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>
