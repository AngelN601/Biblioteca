<?php
// Establecer el encabezado de contenido para UTF-8
header('Content-Type: text/html; charset=utf-8');

// Incluir el archivo de conexion
include 'conexion.php';

// Configurar la conexion para usar UTF-8
$conn->set_charset("utf8mb4");

// Obtener la consulta de busqueda
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Consulta SQL para obtener los datos de la tabla libros
$sql = "SELECT Titulo, Autor, Editorial, Categoria, Sinopsis, numCopiasDisponibles FROM Libros";

// Si hay una consulta de busqueda, añadirla a la consulta SQL
if (!empty($query)) {
    $sql .= " WHERE Titulo LIKE '%" . $conn->real_escape_string($query) . "%' OR Autor LIKE '%" . $conn->real_escape_string($query) . "%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NexusBook</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="./assets/img/logo.png" alt="">
                <h1>NexusBook</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="single-post.php">Libros</a></li>
                    <li class="dropdown"><a href="#"><span>Generos</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="./Drama.php">Drama</a></li>
                            <li><a href="./Ficcion.php">Ficcion</a></li>
                            <li><a href="./Clasico.php">Clasico</a></li>
                            <li><a href="./Fantasia.php">Fantasia</a></li>
                            <li><a href="./Horror.php">Horror</a></li>
                            <li><a href="./Aventura.php">Aventura</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">Consulta por ISBN</a></li>
                    <li><a href="contact.html">Inicia Sesion</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <div class="position-relative">
                <a href="https://www.facebook.com/profile.php?id=61559235225312" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="https://twitter.com/NexxusBook" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="https://www.instagram.com/nexusbook_official/" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="" method="GET" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" name="query" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div>
                <!-- End Search Form -->

            </div>

        </div>

    </header>
    <!-- End Header -->

    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                            <div class="post-meta"><span class="date">Consulta de Libros </span></div>
                            <h1 class="mb-5">Busqueda</h1>
                            <p>Por favor, proporciona el titulo o el autor del libro que estas buscando para que podamos ayudarte a encontrarlo.</p>

                            <div>
                                <form class="d-flex" action="" method="GET">
                                    <input class="form-control me-2" type="search" name="query" placeholder="Libro o Autor" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                            </div>

                            <!-- Aquí comienza el código PHP para mostrar los resultados de la búsqueda -->
                            <?php
                            if ($result->num_rows > 0) {
                                // Salida de datos de cada fila
                                echo "<div class='container mt-5'>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<div class='d-md-flex post-entry-2 half mb-4'>";
                                    echo "<div>";
                                    echo "<h3><a href='single-post.html'>" . $row["Titulo"] . "</a></h3>";
                                    echo "<p><strong>Autor:</strong> " . $row["Autor"] . "</p>";
                                    echo "<p><strong>Editorial:</strong> " . $row["Editorial"] . "</p>";
                                    echo "<p><strong>Categoria:</strong> " . $row["Categoria"] . "</p>";
                                    echo "<p>" . $row["Sinopsis"] . "</p>";
                                    echo "<p><strong>Copias disponibles:</strong> " . $row["numCopiasDisponibles"] . "</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                                echo "</div>";
                            } else {
                                echo "<p>No se encontraron resultados para tu busqueda.</p>";
                            }
                            ?>

                        </div>
                        <!-- End Single Post Content -->

                    </div>
                    <div class="col-md-3">

                        <div class="aside-block">
                            <h3 class="aside-title">Generos</h3>
                            <ul class="aside-links list-unstyled">
                                <li><a href="./Drama.php"><i class="bi bi-chevron-right"></i> Drama </a></li>
                                <li><a href="./Ficcion.php"><i class="bi bi-chevron-right"></i> Ficcion </a></li>
                                <li><a href="./Clasico.php"><i class="bi bi-chevron-right"></i> Clasico </a></li>
                                <li><a href="./Fantasia.php"><i class="bi bi-chevron-right"></i> Fantasia </a></li>
                                <li><a href="./Horror.php"><i class="bi bi-chevron-right"></i> Horror </a></li>
                                <li><a href="./Aventura.php"><i class="bi bi-chevron-right"></i> Aventura</a></li>
                            </ul>
                        </div>
                        <!-- End Categories -->

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>