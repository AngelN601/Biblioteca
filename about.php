<!DOCTYPE html>
<html lang="en">

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
                    <li><a href="contact.html">Inicia SesiÃ³n</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div>
                <!-- End Search Form -->

            </div>

        </div>

    </header>
    <!-- End Header -->

    <main id="main">
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">ISBN</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h2 class="display-4">Comienza tu busqueda</h2>
                                <p>Coloca el ISBN del libro que deseas saber su disponibilidad.</p>
                                <form class="d-flex" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                    <input class="form-control me-2" type="search" placeholder="ISBN" aria-label="Search" name="isbn">
                                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // Incluir el archivo de conexión
		header('Content-Type: text/html; charset=utf-8');
                include 'conexion.php';

                // Configurar la conexión para usar UTF-8
                $conn->set_charset("utf8mb4");

                // Verificar si se envió un ISBN para buscar
                if (isset($_GET['isbn'])) {
                    // Obtener el ISBN de la solicitud GET
                    $isbn = $conn->real_escape_string($_GET['isbn']);

                    // Consulta SQL para obtener los datos del libro por su ISBN
                    $sql = "SELECT Titulo, Autor, Editorial, Categoria, Sinopsis, numCopiasDisponibles FROM Libros WHERE ISBN = '$isbn'";

                    // Ejecutar la consulta
                    $result = $conn->query($sql);

                    // Verificar si se encontró algún libro
                    if ($result->num_rows > 0) {
                        // Mostrar los resultados
                        while ($row = $result->fetch_assoc()) {
                            echo "<h2>Informacion del libro:</h2>";
                            echo "<p><strong>Titulo:</strong> " . htmlspecialchars($row["Titulo"], ENT_QUOTES, 'UTF-8') . "</p>";
                            echo "<p><strong>Autor:</strong> " . htmlspecialchars($row["Autor"], ENT_QUOTES, 'UTF-8') . "</p>";
                            echo "<p><strong>Editorial:</strong> " . htmlspecialchars($row["Editorial"], ENT_QUOTES, 'UTF-8') . "</p>";
                            echo "<p><strong>Categoria:</strong> " . htmlspecialchars($row["Categoria"], ENT_QUOTES, 'UTF-8') . "</p>";
                            echo "<p><strong>Sinopsis:</strong> " . htmlspecialchars($row["Sinopsis"], ENT_QUOTES, 'UTF-8') . "</p>";
                            echo "<p><strong>Copias disponibles:</strong> " . htmlspecialchars($row["numCopiasDisponibles"], ENT_QUOTES, 'UTF-8') . "</p>";
                        }
                    } else {
                        // Mostrar mensaje de que no se encontró ningún libro
                        echo "<p>No se encontró ningún libro con el ISBN proporcionado.</p>";
                    }
                }
                ?>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            Â© Copyright <strong><span>NexusBook</span></strong>. All Rights Reserved
                        </div>

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                            Designed by Sofia Navarrtete & Angel Mireles</a>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="https://twitter.com/NexxusBook" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61559235225312" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/nexusbook_official/" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

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


