<head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
<?php
require "header.php";
?>

<br><br><br>
<div class="container">
    <h3 class="text-center"><br>Ver mesas<br></h3>     
        
<?php
    if(isset($_SESSION['user_id'])){
          
       if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center">Eliminado exitosamente</h5>';
        }
    }          
   require 'includes/view.tables.inc.php';   
}   
    else {
        echo '	<p class="text-center"><br>No tienes permiso<br><br></p>';  
    }
?>

</div>
<br><br>

<?php
require "footer.php";
?>