<?php 
    require "header.php";
?>
    <link rel="stylesheet" href="css/contacto.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <br>
    <div class="buttons">
        <span class="bt-ba">Sede Barrio Chino</span>
        <span class="bt-mi">Sede Miraflores</span>
    </div>
    <div class="contact-wrap">
        <div class="contact-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8738791027977!2d-77.02771472410473!3d-12.052197642003664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ba7c6a41eb%3A0xe258c14ae6a4e626!2sChifa%20Wa%20Lok!5e0!3m2!1ses!2spe!4v1695415842582!5m2!1ses!2spe" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-in">
            <h1>Visítanos</h1>
            <p><i class="fa-solid fa-location-dot"></i>Jr. Paruro 878, Lima 15001</p>
            <p><i class="fa-regular fa-envelope"></i>correo@walok.com.pe</p>
            <p><i class="fa-solid fa-phone"></i>(01) 6845127</p>
            <p><i class="fa-brands fa-whatsapp"></i>(+51) 988888888 <b>- Sólo para delivery</b></p>
        </div>  
    </div>

    <div class="contact-wrap2">
        <div class="contact-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.977177895947!2d-77.03589699999999!3d-12.113714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c83dd69f7789%3A0xe38ca928b940b2ee!2sWa%20Lok!5e0!3m2!1ses-419!2spe!4v1696812079194!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-in">
            <h1>Visítanos</h1>
            <p><i class="fa-solid fa-location-dot"></i>Av. Angamos 700, Miraflores 15074</p>
            <p><i class="fa-regular fa-envelope"></i>correo@walok.com.pe</p>
            <p><i class="fa-solid fa-phone"></i>(01) 6845127</p>
            <p><i class="fa-brands fa-whatsapp"></i>(+51) 988888888 <b>- Sólo para delivery</b></p>
        </div>  
    </div>
    
    <h2 class="title-clients">Opinión de nuestros clientes</h2>
    <div class="wrapper">
        <div class="testimonial-container" id="testimonial-container"></div>
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
      </div><br>

      <div class="row staff">
            <div class="col" style="max-width: 500px; text-align:center; margin: 0 auto;">
            <h4 style="color: #fff;"><strong>Horario de atención</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label style="color: #fff;">Ingresa una fecha</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Consultar horario de apertura</button>
                        </div>
                    </form>     
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Fecha</th>
                    <th scope='col'>Hora de atención</th>
                    <th scope='col'>Hora de cierre</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Fecha</th>
                    <th scope='col'>Hora de atención</th>
                    <th scope='col'>Hora de cierre</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>09:15:00</td>
                    <td>22:00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //cerrar conexión
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>
      
    <script src="js/script.js"></script>
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
</body>
</html>
