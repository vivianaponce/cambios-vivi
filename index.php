<?php session_start();
include('conexion.php');
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <title>Home</title>
</head>

<body>
    <div class="container showcase">
        <?php

        include("header.php");
        require_once("loginVerification.php");
        require_once("CCarousel.php");

        echo '
        <main class="main-principal">
            <section class="movies-container movies" id="movies-container movies">';

            $titles = array("Películas más valoradas", "Recientes", "Ver más tarde", "Ver de nuevo");

            $carouseles = new CCarousel($conexion);
            
            if (!verification()) {
                for ($i = 0; $i < count($titles); $i++) {
                    if ($i < count($titles) - 2) {
                        $carouseles->generateMovieSection($conexion, $titles[$i]);
                    }
                }
            } else {
                foreach ($titles as $title) {
                    $carouseles->generateMovieSection($conexion, $title);
                }
            }
          
        echo '
            </section>
        </main>
        ';



        ?>
        <script src="script/jquery.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="script/script.js"></script>
        <script src="script/botonTop.js"></script>
    </div>
    <footer>
        <p>&copy; CineFlow 2024</p>
    </footer>
</body>

</html>