<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/action.php">
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from trabajo where id_trabajo='$numero'";
        $result= mysqli_query($db, $query);
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $anos= $row['anos_exp'];
                $activo= $row['activo'];
                $nombre= $row['nombre'];
                $salario= $row['salario'];
                $fecha = $row['fecha_post'];
                $descripcion = $row['descripcion'];
                $telefono = $row['telefono'];
                $correo = $row['correo'];
                $horario = $row['horario_id_horario'];
                $subcategoria = $row['subcategoria_idsubcategoria'];
                $categoria = $row['categoria_idcategoria'];
                $localidad = $row['localidad_idlocalidad'];
                $ingles = $row['ingles_idingles'];
                $empresa = $row['empresa_idempresa'];
                $sexo = $row['sexo_idsexo'];
                $educacion = $row['educacion_ideducacion'];
                $edad = $row['edad_req'];
            }
        }
     $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad1= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad2= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad3= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia1= $row{'tecnica_idtecnica'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia2= $row{'tecnica_idtecnica'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia3= $row{'tecnica_idtecnica'};
          ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['id'];
?>" placeholder="" readonly>
</div>
    <label>Estatus</label>
    <select name="activot" class="form-control dropd">
    <?php
                echo'<option value="'.$activo.'">'.$activo.'</option>';
        ?>
<?php
          if($activo=="Activar"){
             echo'<option value="Desactivar">Desactivar</option>'; 
          }else{
              echo'<option value="Activar">Activar</option>';  
          }
          ?>
    </select>
        <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
    <label>Salario</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="salario" aria-describedby="sizing-addon1" value="<?php
echo $salario;        
?>">
</div>
    <label>Fecha de activación</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="date" class="form-control" name="fecha" aria-describedby="sizing-addon1" value="<?php
echo $fecha;        
?>">
</div>
                    <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="<?php
echo $descripcion;        
?>">
</div>
                        <label>Teléfono</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="telefono" class="form-control" name="telefono" aria-describedby="sizing-addon1" value="<?php
echo $telefono;                                         
?>">
</div>
                        <label>Correo electrónico de la oferta </label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo" aria-describedby="sizing-addon1" value="<?php
echo $correo;                                  
?>">
</div>
    <label>Años de experiencia necesarios</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="anos_expt" aria-describedby="sizing-addon1" value="<?php
echo $anos;        
?>">
</div>
    <label>Edad mínima requerida</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="edadt" aria-describedby="sizing-addon1" value="<?php
echo $edad;        
?>">
</div>
    <label>Horario</label>
  <select name="horariou" class="form-control dropd">
    <?php
        $query="select id_horario, nombre from horario where id_horario='$horario'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['id_horario'].'">'.$row['tipo'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from horario where id_horario!='$horario'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['id_horario'].'">'.$row['tipo'].'</option>';
            }
        }
        ?>
     </select>
     <label>Categoría</label>
  <select name="categoriau" class="form-control dropd">
    <?php
        $query="select idcategoria, nombre from categoria where idcategoria='$categoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from categoria where idcategoria!='$categoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <label>Subcategoría</label>
  <select name="subcategoriau" class="form-control dropd">
    <?php
        $query="select idsubcategoria, nombre from subcategoria where idsubcategoria='$subcategoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from subcategoria where idsubcategoria!='$subcategoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
     <label>Localidad</label>
  <select name="localidad" class="form-control dropd">
    <?php
        $query="select idlocalidad, nombre from localidad where idlocalidad='$localidad'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from localidad where idlocalidad!='$localidad'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
     <label>Nivel de inglés</label>
  <select name="inglest" class="form-control dropd">
    <?php
        $query="select idingles, nivel from ingles where idingles='$ingles'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from ingles where idingles!='$ingles'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>
     </select>
    <label>Empresa</label>
  <select name="inglest" class="form-control dropd">
    <?php
        $query="select idempresa, nivel from empresa where idempresa='$empresa'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idempresa'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from empresa where idempresa!='$empresa'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idempresa'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <label>Sexo</label>
  <select name="sexot" class="form-control dropd">
    <?php
        $query="select idsexo, nombre from sexo where idsexo='$sexo'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from sexo where idsexo!='$sexo'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <label>Educación necesaria</label>
  <select name="sexot" class="form-control dropd">
    <?php
        $query="select ideducacion, nombre from educacion where ideducacion='$educacion'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from educacion where ideducacion!='$educacion'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <label>Habilidad con importancia 1</label>
  <select name="habilidad1t" class="form-control dropd">
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
    <label>Habilidad con importancia 2</label>
  <select name="habilidad1t" class="form-control dropd">
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
    <label>Habilidad con importancia 3</label>
  <select name="habilidad1t" class="form-control dropd">
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
      <label>Competencia con importancia 1</label>
  <select name="tecnica1t" class="form-control dropd">
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from tecnica where idtecnica!='$competencia1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <label>Competencia con importancia 2</label>
  <select name="tecnica2t" class="form-control dropd">
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from tecnica where idtecnica!='$competencia2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
     <label>Competencia con importancia 3</label>
  <select name="tecnica3t" class="form-control dropd">
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from tecnica where idtecnica!='$competencia3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="empresa_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Empresa">¿Deseas regresar?</a>
  	</p>
  </form>
</div>