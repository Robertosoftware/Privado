<?php include('../usuario/session.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
     <div class="jumbotron">
     <?php  if (isset($_SESSION['correo'])) : ?>
    	<?php
      ?><h3><?php   echo "Bienvenid@ ", $_SESSION['correo'];?></h3>

       <form method="post" action="partials/activadesactiva.php">

         <div class="labelac">¿Qué quieres hacer con tu usuario?</div>
 <select name="activa" class="form-control dropd">
   <option>Selecciona una opción</option>
    <option value=1>Activar</option>
    <option value=0>Desactivar</option>

     </select>

     <div class="input-group">
     <button type="submit" class="btn btn-success btn-lg" name="activar_usr">Siguiente</button>
   	</div>

          </form>







</div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
