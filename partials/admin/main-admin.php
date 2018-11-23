<?php include('../../admin/session-admin.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron">
             <div class="presentacion">
        <h2><?php  if (isset($_SESSION['admin_name'])) : ?>
    	<p>Bienvenido administrador <strong><?php echo $_SESSION['admin_name']; ?></strong></p> </h2>
         <p>
         Somos una empresa dedicada a la más alta satisfacción de nuestros clientes. Orientados a relaciones de largo plazo.</p><p>Basados en la búsqueda constante de mejoras en la operación de tecnología de nuestros clientes.
        </p><center><img src="admin/Man.jpg" class="img-responsive img-rounded" alt="mandra"></center>
      </div>
    </div>
    </div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
