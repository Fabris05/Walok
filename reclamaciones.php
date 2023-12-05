<?php 
    require("header.php");
?>
    <link rel="stylesheet" href="css/reclamaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="body-container">
        <div class="container">
            <h1>Libro de Reclamaciones</h1>
            <p><strong>Libro de Reclamaciones en Wa Lok Restaurante</strong></p>

            <p>En Wa Lok, valoramos la satisfacción de nuestros clientes y nos esforzamos por ofrecer experiencias culinarias excepcionales. Si en algún momento consideras que no hemos cumplido con tus expectativas o tienes alguna preocupación, te invitamos a utilizar nuestro Libro de Reclamaciones. Este libro es una herramienta fundamental para mejorar nuestros servicios, y tu opinión es esencial. Puedes acceder al Libro de Reclamaciones en nuestro establecimiento o comunicarte con nosotros a través de [información de contacto] para expresar tus comentarios. Apreciamos tu retroalimentación, ya que nos ayuda a crecer y brindar un servicio de calidad.</p>
        </div>

        <div class="reserva-container">
                <div class="container-b">
                    <h2>Registre su Reclamo</h2>
                    <form class="reserva">
                        <div class="content">
                            <div class="input-text">
                                <label for="FormName">Ingrese su nombre</label>
                                <input type="text" class="formname" id="FormName" name="FormName">
                            </div>
            
                            <div class="input-text">
                                <label for="FormDNI">Ingrese su DNI</label>
                                <input type="text" class="formdni" id="FormDNI" name="FormDNI">
                            </div>
            
                            <div class="input-text">
                                <label for="FormEmail">Ingrese su correo electrónico</label>
                                <input type="text" class="input-a" id="FormEmail" name="FormEmail">
                            </div>
            
                            <div class="input-text">
                                <label for="Formnumber">Número de personas</label>
                                <input type="number" class="input-a" id="Formnumber" name="Formnumber">
                            </div>
            
                            <div class="input-text">
                                <label for="FormDate">Seleccione la fecha</label>
                                <input type="date" class="input-a" id="ForDate" name="ForDate">
                            </div>
            
                            <div class="input-text">
                                <label for="FormEmail">Ingrese su celular</label>
                                <input type="text" class="input-b" id="FormCell" name="FormCell">
                            </div>
                            
                            <div class="input-text">
                                <label for="FormEmail">Seleccione el Motivo</label>
                                <select name="tipoEvento" class="input-b">
                                    <option value="evento">Comida</option>
                                    <option value="evento1">Bebidas</option>
                                    <option value="evento2">Atención al Cliente</option>
                                    <option value="evento3">Reunión ejecutiva</option>
                                </select>
                            </div>
                            <div class="input-text">
                                <label for="FormEmail">Seleccione la hora</label>
                                <select name="tipoHora" class="input-b">
                                    <option value="hora">Hora deseada</option>
                                    <option value="hora1">11:00</option>
                                    <option value="hora2">12:30</option>
                                    <option value="hora3">14:00</option>
                                    <option value="hora4">15:30</option>
                                    <option value="hora5">17:00</option>
                                    <option value="hora6">18:30</option>
                                    <option value="hora7">20:00</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="button-container">
                            <button><a href="index.html">Enviar Reclamo</a></button>
                        </div>
                    </form>
                </div>

            </div>
            
        <div class="firma">
            <p>Atentamente,</p>
            <p>Área de Atención al Cliente<br></p>
            <p>Wa Lok - Salón Familiar</p>
        </div>
    </div>
    <?php require "walokbot.php"; ?>
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
                    <a href="/reclamaciones.php">
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
    </footer>
</body>
</html>
