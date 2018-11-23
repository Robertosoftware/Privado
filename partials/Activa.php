<?php include('../usuario/session.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
     <div class="jumbotron">
     <?php  if (isset($_SESSION['correo'])) : ?>
    	<?php
         echo $_SESSION['correo'];
         
         
?>
</div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
