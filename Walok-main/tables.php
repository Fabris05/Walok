<?php
require "header.php";
?>
<head>
        <link rel="stylesheet" href="css/reservation.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
<br><br>
<div class="container">
    <h3 class="text-center"><br>Editar mesas<br></h3>
    <div class="col-md-6 offset-md-3">

                           
<?php if(isset($_SESSION['user_id'])){
    if($_SESSION['role']==2){
        
        echo '<p class="text-white bg-dark text-center">Establecer el número de mesas para una fecha específica</p><br>';

        if(isset($_GET['error4'])){
        if($_GET['error4'] == "sqlerror1") {
            echo '<h5 class="bg-danger text-center">Error</h5>';
        }
        if($_GET['error4'] == "emptyfields") {  
            echo '<h5 class="bg-danger text-center">Error, campos vacíos</h5>';
        }
        }
        if(isset($_GET['tables'])){
        if($_GET['tables'] == "success") {   
            echo '<h5 class="bg-success text-center">Las mesas se enviaron correctamente</h5>';
        }
        }
        echo'
                                                 
<div class="signup-form">
        <form action="includes/tables.inc.php" method="post">
            <div class="form-group">
            <label>Ingresa fecha</label>
        	<input type="date" class="form-control" name="date_tables" placeholder="Date">
            </div>
            <div class="form-group">
            <label>Número de mesas</label>
            <input type="number" class="form-control" min="1" name="num_tables" required="required">
            <small class="form-text text-muted">El número predeterminado es 20</small>
            </div>
            <div class="form-group">
            <button type="submit" name="tables" class="btn btn-dark btn-lg btn-block">Guardar mesas</button>
            </div>
        </form>
        <br><br>
</div> ';
        
    }
}                
    else {
        echo '	<p class="text-center"><br>No tienes permiso<br><br></p>';          
    }      
?>
    </div>
</div>
<br><br>

<?php
require "footer.php";
?>