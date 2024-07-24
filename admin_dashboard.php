<?php
// Asegúrate de que solo los administradores puedan acceder a esta página
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login_admins.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aquí deberías agregar validaciones y sanitización de datos
    $nombre = $_POST['nombre'];
    $precio_olimpica = $_POST['precio_olimpica'];
    $precio_confimax = $_POST['precio_confimax'];
    $precio_d1 = $_POST['precio_d1'];
    $imagen = $_FILES['imagen']['name'];
    $categoria = $_POST['categoria'];
    
    // Mueve la imagen a la carpeta de imágenes
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
    
    // Conecta a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'login_register_db');
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Inserta el producto en la base de datos
    $sql = "INSERT INTO productos (nombre, precio_olimpica, precio_confimax, precio_d1, imagen, categoria) 
            VALUES ('$nombre', '$precio_olimpica', '$precio_confimax', '$precio_d1', '$imagen', '$categoria')";
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo producto agregado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style_dashboard1.css">
    <link rel="icon" type="image/png" sizes="16x16" href=images/logo.png>
</head>
<body>
    <header>
        <h1>Dashboard de Administrador</h1>
        <a href="login_admins.php">Cerrar sesión</a>
    </header>
    
    <main>
        <form action="admin_dashboard.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="precio_olimpica">Precio Olimpica:</label>
            <input type="number" id="precio_olimpica" name="precio_olimpica" required>
            
            <label for="precio_confimax">Precio Confimax:</label>
            <input type="number" id="precio_confimax" name="precio_confimax" required>
            
            <label for="precio_d1">Precio D1:</label>
            <input type="number" id="precio_d1" name="precio_d1" required>
            
            <label for="imagen">Imagen del Producto:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>
            
            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="bebidas">Bebidas</option>
                <option value="licores">Licores</option>
                <option value="aseo">Aseo</option>
                <option value="despensa">Despensa</option>
                <option value="mascotas">Mascotas</option>
            </select>
            
            <button type="submit">Agregar Producto</button>
        </form>
    </main>
</body>
</html>
