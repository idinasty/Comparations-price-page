<?php
session_start(); // Iniciar la sesión

// Conecta a la base de datos
$conn = new mysqli('localhost', 'root', '', 'login_register_db');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para mostrar productos según la categoría
function displayProducts($conn, $categoria) {
    $query = "SELECT * FROM productos WHERE categoria = '$categoria'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product-card">';
        echo '<div class="front">';
        echo '<img src="images/' . $row['imagen'] . '" alt="' . $row['nombre'] . '">';
        echo '<h3>' . $row['nombre'] . '</h3>';
        echo '</div>';
        echo '<div class="back">';
        echo '<div class="store">';
        echo '<h4>Olimpica</h4>';
        echo '<button>Precio: $' . $row['precio_olimpica'] . '</button>';
        echo '</div>';
        echo '<div class="store">';
        echo '<h4>Confimax</h4>';
        echo '<button>Precio: $' . ($row['precio_confimax'] + 10) . '</button>';
        echo '</div>';
        echo '<div class="store">';
        echo '<h4>D1</h4>';
        echo '<button>Precio: $' . ($row['precio_d1'] + 5) . '</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style catalogo1.css">
    <title>PF CATALOGO</title>
    <link rel="icon" type="image/png" sizes="16x16" href=images/logo.png>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <a href="logout.php">Cerrar sesión</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?>
                    </li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>  
            </nav>
        </div>
        <div class="header-content container">
            <h1>PRECIO FÁCIL<br>CATÁLOGO</h1>
            <p class="esloganp">¡COMPARAR PRECIOS NUNCA FUE TAN FÁCIL!<br>LA MEJOR OPCIÓN PARA TU BOLSILLO</p>
        </div>
        
    </header>

    <section class="coffee">
        <h2>BEBIDAS</h2 class="titulosesion">
        <div class="product-container">
            <?php displayProducts($conn, 'bebidas'); ?>
        </div>
    </section>

    <section class="coffee1">
        <h2>LICORES</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'licores'); ?>
        </div>
    </section>

    <section class="coffee2">
        <h2>ASEO</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'aseo'); ?>
        </div>
    </section>

    <section class="coffee3">
        <h2>DESPENSA</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'despensa'); ?>
        </div>
    </section>

    <section class="coffee4">
        <h2>MASCOTAS</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'mascotas'); ?>
        </div>
    </section>

    <!-- Puedes eliminar las siguientes secciones si no son necesarias -->
    <section class="coffee5">
        <h2>LICORES</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'licores'); ?>
        </div>
    </section>

    <section class="coffee6">
        <h2>LICORES</h2>
        <div class="product-container">
            <?php displayProducts($conn, 'licores'); ?>
        </div>
    </section>

</body>
</html>

<?php $conn->close(); ?>
