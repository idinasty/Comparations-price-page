<?php
session_start(); // Iniciar la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>PRECIO FÁCIL</title>
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
                    <li><a href="catalogo.php">Productos</a></li>
                    <li><a href="#" id="cart-button">Contacto</a></li>
                </ul>  
            </nav>
        </div>

        <div class="header-content container">
            <h1>PRECIO FÁCIL</h1>
            <p class="esloganp">
                ¡COMPARAR PRECIOS NUNCA FUE TAN FÁCIL!
                <br>
                LA MEJOR OPCIÓN PARA TU BOLSILLO
            </p>
            <a href="catalogo.php" class="btn-1">VER CATALOGO</a>
        </div>
    </header>

    <section class="coffee">
        <img class="coffee-img" src="images/bg2.png" alt="">
        <div class="coffee-container">
            <h2>MARCAS CON LAS QUE TRABAJAMOS</h2>
            <p class="txt-p">
                Planeamos seguir aumentando el convenio con diferentes supermercados de la ciudad
                para garantizar la mayor cobertura de precios y que la gente tenga todos los precios en la palma de su mano.
                <p>MANTENTE EN SINTONÍA PARA NO PERDERTE LOS NUEVOS CONVENIOS</p>
            </p>

            <div class="coffee-group">
                <div class="coffee-1">
                    <img src="images/c1.png" alt="">
                    <h3>OLÍMPICA</h3>
                    <p>Olímpica, fundada en 1953, es una destacada cadena de supermercados en Colombia. Ofrece una amplia variedad de productos y es conocida por su excelente servicio y promociones frecuentes, siendo la elección favorita de muchas familias colombianas.</p>
                </div>
                <div class="coffee-1">
                    <img src="images/c2.png" alt="">
                    <h3>D1</h3>
                    <p>D1 es una popular cadena de tiendas de descuento en Colombia, reconocida por sus precios bajos y productos de alta calidad. En Quibdó, D1 ha ganado popularidad por su accesibilidad y ahorro en las compras diarias.</p>
                </div>
                <div class="coffee-1">
                    <img class="c3img" src="images/c3.png" alt="">
                    <h3>CONFIMAX</h3>
                    <p>ConfiMax es un supermercado local en Quibdó, conocido por su variedad de productos y atención personalizada. Ofrece desde alimentos frescos hasta artículos del hogar, convirtiéndose en una opción preferida para los residentes que buscan conveniencia y buenos precios.</p>
                </div>
            </div>
        </div>
    </section>

    <main class="services-main" id="services-main">
        <div class="services-content container">
            <h2>NUESTRO OBJETIVO</h2>
        </div>
        <p class="objetivop">
            Permitir a los residentes de Quibdó realizar comparaciones sobre los diferentes precios de los productos de supermercado, permitiéndole a la comunidad un mayor ahorro de su economía y tiempo, promoviendo la competencia sana entre los comercios, beneficiando al consumidor y a la población de la ciudad.
        </p>
    </main>

    <section class="general">
        <div class="general-1">
            <h2>Acerca de Nosotros</h2>
            <p>Somos Jhosser Rentería Chalá y Andrés Daniel Jojoa Vergara, estudiantes de quinto semestre de Ingeniería de Telecomunicaciones e Informática en la Universidad Tecnológica del Chocó. Apasionados por la tecnología y el desarrollo de soluciones innovadoras, hemos creado esta plataforma para FÁCILitar la comparación de precios de productos de supermercado en Quibdó.</p>
        </div>
        <div class="general-2"></div>
    </section>

    <section class="general">
        <div class="general-3"></div>
        <div class="general-1">
            <h2></h2>
            <p>Nuestro proyecto nace de la necesidad de ofrecer a la comunidad una herramienta práctica y útil para mejorar sus hábitos de compra. Con esta plataforma, buscamos contribuir al bienestar económico de las familias y fomentar la competencia justa entre los supermercados locales. Estamos comprometidos con la excelencia y la mejora continua, y esperamos que nuestra iniciativa tenga un impacto positivo en la vida de los residentes de Quibdó.</p>
        </div>
    </section>

    <section class="blog container">
        <div class="blog-content">
            <div class="blog-1">
                <img src="images/1.jpg" alt="">
                <h3>Compara fácil</h3>
                <p>Compara precios reales de productos de los supermercados más visitados en la ciudad de Quibdó.</p>
            </div>
            <div class="blog-1">
                <img src="images/2.jpg" alt="">
                <h3>Ahorra a lo grande</h3>
                <p>Descubre los mejores precios posibles para el producto que estés buscando y ahorra el mayor dinero posible.</p>
            </div>
            <div class="blog-1">
                <img src="images/111.jpg" alt="">
                <h3>Compra inteligente</h3>
                <p>Organiza tu compra de la mejor manera obteniendo los mismos productos con los mejores precios posibles.</p>
            </div>
        </div>
        <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjG8rad8LmHAxWxr4QIHdQGAhoQFnoECBQQAw&url=https%3A%2F%2Fhelp.palbin.com%2Fknowledge-base%2Fque-son-los-comparadores-de-precios-que-herramientas-existen%2F%23%3A~%3Atext%3DLos%2520comparadores%2520de%2520precios%2520son%2Cventa%2520(de%2520corto%2520plazo).&usg=AOvVaw0vm7oyNqvX8nXAlKkA0p0A&opi=89978449" class="btn-1">Información</a>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="#services-main">Presentación</a></li>
                    <li><a href="#">Prensa</a></li>
                    <li><a href="https://www.youtube.com">Youtube</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="https://cdn.discordapp.com/attachments/1020502994174877779/1264811642626117733/08c02ce91ff241ca15982d6504cdf5b4d5f61a5er1-1080-1034v2_uhq.jpg?ex=669f3b22&is=669de9a2&hm=63be6e285167d9ba7c4bddd3d57dbdf8e3eedd7142ea9a7d12888c06bb367bff&">Ayuda</a></li>
                    <li><a href="login_admins.php">Cyber Security</a></li>
                    <li><a href="#">Información legal</a></li>
                    <li><a href="#">Preferencias de cookies</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://www.instagram.com/jhosser.vip/">Instagram</a></li>
                    <li><a href="https://x.com">Twitter</a></li>
                    <li><a href="https://discord.com">Discord</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
