<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/action.php">
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from empresa where idempresa='$numero'";
        $result= mysqli_query($db, $query);
        $nombre="";
        $descripcion="";
     $correo="";
        $telefono="";
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $nombre= $row['nombre'];
                $descripcion= $row['descripcion'];
                $correo= $row['correo'];
                $telefono = $row['telefono'];
            }
        }
          ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['id'];
?>" placeholder="" readonly>
</div>
                <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
                    <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="<?php
echo $descripcion;                                                                                                    
?>">
</div>
                        <label>Email</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo" aria-describedby="sizing-addon1" value="<?php
echo $correo;                                                                                                    
?>">
</div>
                        <label>Teléfono</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="telefono" aria-describedby="sizing-addon1" value="<?php
echo $telefono;                                                                                                    
?>">
</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="empresa_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Empresa">¿Deseas regresar?</a>
  	</p>
  </form>
</div>