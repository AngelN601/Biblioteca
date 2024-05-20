<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NexusBook - Registro de Usuarios</title>
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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <h1>NexusBook</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="single-post.html">Libros</a></li>
                    <li class="dropdown"><a href="#"><span>Géneros</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="Drama.html">Drama</a></li>
                            <li><a href="Ficcion.html">Ficción</a></li>
                            <li><a href="Clasico.html">Clásico</a></li>
                            <li><a href="Fantasia.html">Fantasía</a></li>
                            <li><a href="Horror.html">Horror</a></li>
                            <li><a href="Aventura.html">Aventura</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">Consulta por ISBN</a></li>
                    <li><a href="contact.html">Inicia Sesión</a></li>
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
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Buscar" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div>
                <!-- End Search Form -->

            </div>

        </div>

    </header>
    <!-- End Header -->

    <main id="main" style="margin-top: 100px;">
        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Regístrate</h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="display-4 text-center">Crear una cuenta</h2>
                        <form action="registro.php" method="post" class="php-email-form">
                            <div class="form-group">
                                <input type="text" nombre="nombre" class="form-control" id="nombre" placeholder="Nombre completo" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                            </div>
                            <div class="text-center"><button type="submit" name="register">Registrarse</button></div>
                        </form>
                    </div>
                </div>

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
                            © Copyright <strong><span>NexusBook</span></strong>. All Rights Reserved
                        </div>

                        <div class="credits">
                            Designed by Sofia Navarrete & Angel
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
