<?php 
    require "header.php";
?>
    <link rel="stylesheet" href="css/carta.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<br><br>
<body style="background-color: #222222;">
    <div class="content">
        <div class="title-letter">
            <span class="title">Nuestra Carta</span>
        </div>
       <!--Inicio Carrusel Platillos-->
       <div class="carousel">
            <div class="carousel-dynamic">
                <div class="goback" id="gobackRight">
                    <img id="goBack" src="img/platillos/atras.webp" alt="retroceder">
                </div>
                <div class="info-platillo-carousel"><!--aqui-->
                    <div class="info-platillo-carousel-top">
                        <div class="imgn-platillo" id="imgnPlatillo">
                            <img src="img/platillos/arroz-chaufa-especial.webp" alt="ArrozChaufaEspecial" class="imgn">
                        </div>
                        <div class="info-platillo-carousel-individual" id="textPlatillo">
                            <h3 style="fon-wight: bold;">Arroz Chaufa Especial</h3>
                            <p>Arroz frito previamente mezclado con huevo y salteado con lomito de chancho, langostino, pollo y cebolla china</p>
                            <p style="font-style: italic; font-weight: bold;">Precio : S/. 25.00</p>
                        </div>
                    </div>
                    <!--<div class="pointers" id="pointer"></div>-->
                </div><!--aqui-->
                <div class="return" id="returnLefth">
                    <img src="img/platillos/adelante.webp" alt="volver" id="Return">
                </div>
            </div>
        </div>
        <!--Final Carrusel Platillos-->
        <!--Boton para observar menu completo-->
        <div class="buton-pdf">
            <button id="download">
                <a href="http://www.walok.com.pe/archivos/CARTA_WALOK_2021b_rojo.pdf" class="urlCartaWallok" target="_blank">
                    Ver Carta Walok Completa
                </a>
            </button>
        </div>

    <footer class="footer">
        <div class="g1">
            <div class="box">
                <h2>Síguenos</h2>
                <div class="social">
                    <a href="https://www.facebook.com/WalokMiraflores" target="_blank" class="fa-brands fa-facebook"></a>
                    <a href="https://www.instagram.com/restauranteorientalwalok/" target="_blank" class="fa-brands fa-instagram"></a>
                    <a href="#" class="fa-brands fa-whatsapp"></a>
                </div>
            </div>
            <div class="box">
                <figure>
                    <a href="./reclamaciones.php">
                        <img src="./img/libro-de-reclamaciones.webp" alt="libro-de-reclamaciones">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Info</h2>
                <a href="./politicas.php" class="info">Políticas y privacidad</a><br>
                <a href="./trabajo.php" class="info">Trabaja con nosotros</a>
            </div>
        </div>
        <div class="g2">
            <small>&copy; 2023 <b>Wa Lok</b> - Todos los derechos reservados.</small>
        </div>

    <script src="js/caruselCarta.js"></script>
</body>
</html>
