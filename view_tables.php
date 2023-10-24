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