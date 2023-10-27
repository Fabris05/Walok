<?php 
    require "header.php";
?><br><br>
        <link rel="stylesheet" href="css/reservation.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
<div class="container">
    <h3 class="text-center"><br>Realizar reserva<br></h3>   
    <div class="row">
        <div class="col-md-6 offset-md-3">   
        
        
<?php
if(isset($_SESSION['user_id'])){
    echo '<p class="text-white bg-dark text-center">Bienvenido(a) '. $_SESSION['username'] .', ¡Crea tu reserva aquí!</p>';
      
  //error handling:
    
    if(isset($_GET['error3'])){
        if($_GET['error3'] == "emptyfields") {
            echo '<h5 class="bg-danger text-center">Complete todos los campos. ¡Inténtelo de nuevo!</h5>';
        }
        else if($_GET['error3'] == "invalidfname") {   
            echo '<h5 class="bg-danger text-center">Nombre no válido. ¡Inténtelo de nuevo!</h5>';
        }
        else if($_GET['error3'] == "invalidlname") {   
            echo '<h5 class="bg-danger text-center">Apellido no válido, ¡inténtelo de nuevo!</h5>';
        }
        else if($_GET['error3'] == "invalidtele") {   
            echo '<h5 class="bg-danger text-center">Teléfono no válido, ¡inténtelo de nuevo!</h5>';
        }
        else if($_GET['error3'] == "invalidcomment") {   
            echo '<h5 class="bg-danger text-center">Comentario no válido, ¡inténtalo de nuevo!</h5>';
        }
        else if($_GET['error3'] == "invalidguests") {   
            echo '<h5 class="bg-danger text-center">Invitados inválidos, por favor intente de nuevo!</h5>';
        }
        else if($_GET['error3'] == "full") {   
            echo '<h5 class="bg-danger text-center">Las reservas están completas en esta fecha y zona horaria. ¡Inténtelo de nuevo!</h5>';
        }
    }
        if(isset($_GET['reservation'])) {   
           if($_GET['reservation'] == "success"){ 
            echo '<h5 class="bg-success text-center">¡Tu reserva fue creada exitosamente!</h5>';
        }
        }
        echo'<br>';

     //formulario de reserva 
    echo '  
        
    <div class="signup-form">
        <form action="includes/reservation.inc.php" method="post">
            <div class="form-group">
            <label>Nombres</label>
                <input type="text" class="form-control" name="fname" placeholder="Nombres" required="required">
                <small class="form-text text-muted">El nombre debe tener entre 2 y 20 caracteres</small>
            </div>
            <div class="form-group">
            <label>Apellidos</label>
                <input type="text" class="form-control" name="lname" placeholder="Apellidos" required="required">
                <small class="form-text text-muted">El apellido debe tener entre 2 y 20 caracteres</small>
            </div>   
            <div class="form-group">
            <label>Fecha de reserva</label>
        	<input type="date" class="form-control" name="date" placeholder="Date" required="required">
            </div>
            <div class="form-group">
		<label>Horario de reserva</label>
		<select class="form-control" name="time">
		<option>10:30 - 12:30</option>
		<option>12:30 - 14:30</option>
		<option>14:30 - 16:30</option>
		<option>16:30 - 18:30</option>
		<option>18:30 - 20:30</option>
		</select>
            </div>
            <div class="form-group">
            <label>Cantidad de invitados</label>
        	<input type="number" class="form-control" min="1" name="num_guests" placeholder="Invitados" required="required">
                <small class="form-text text-muted">El valor mínimo es 1 y el máximo 8 (incluyéndote)</small>
            </div>
            <div class="form-group">
            <label for="guests">Número de teléfono</label>
                <input type="telephone" class="form-control" name="tele" placeholder="Teléfono" required="required">
            </div>
            <div class="form-group">
            <label>Ingresa un comentario adicional</label>
                <textarea class="form-control" name="comments" placeholder="Ingresa un comentario adicional o la ocasión de la reserva" rows="3"></textarea>
                <small class="form-text text-muted">Los comentarios deben tener menos de 200 caracteres.</small>
            </div>        
            <div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> Acepto los <a href="#">Condiciones de uso</a> &amp; <a href="#">Políticas de privacidad.</a></label>
            </div>
            <div class="form-group">
            <button type="submit" name="reserv-submit" class="btn btn-dark btn-lg btn-block">Reservar</button>
            </div>
        </form>
        <br><br>
    </div>
    ';  
    }

    else {
        echo '	<p class="text-center text-danger"><br>¡No has iniciado sesión!<br></p>
       <p class="text-center">¡Para hacer una reserva tienes que crear una cuenta!<br><br><p>;
       <div style="display: flex; justify-content: center; align-items: center; padding-bottom: 20px; ">
       <img src="./img/wk.webp" alt="Walok" style="align-items:center;"> 
       </div>';
    }
    ?>

             
        </div>
    </div>
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
    </footer>
</body>
</html>