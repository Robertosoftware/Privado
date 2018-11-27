<?php include('../usuario/session.php');
error_reporting(E_ALL ^ E_WARNING);?>
<div class="jumbotron">
               <form method="post" action="usuario/serverusuario.php">
      <?php  if (isset($_SESSION['correo'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8');
                $numero = $_SESSION['idusuario'];
                     $query="select * from usuario_has_habilidad where user_register_id_usuario='$numero' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad1= $row{'habilidad_idhabilidad'};
    $query="select * from usuario_has_habilidad where user_register_id_usuario='$numero' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad2= $row{'habilidad_idhabilidad'};
    $query="select * from usuario_has_habilidad where user_register_id_usuario='$numero' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad3= $row{'habilidad_idhabilidad'};
                   ?>
                   <h2>Habilidades del usuario.</h2>
                  <div class="labelac">Id del usuario</div>
  <input type="text" class="form-control" name="idusuario2" ria-describedby="sizing-addon1" value="<?php
echo $_SESSION['idusuario'];
?>" placeholder="" readonly>
                   <div class="labelac">Habilidad 1</div>
 <select name="habilidad1" class="form-control dropd">
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 2</div>
  <select name="habilidad2" class="form-control dropd">
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 3</div>
   <select name="habilidad3" class="form-control dropd">
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Activo</div>
 <select required name="activo" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>
     <option value="Activar">Activar</option>
     <option value="Desactivar" >Desactivar</option>
                   </select>
                <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="usuario_habilidad" value="">Activación</button>
  	</div>
         </form>
        </div>
    <?php endif ?>
