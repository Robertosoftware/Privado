<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/action.php">
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from subcategoria where idsubcategoria='$numero'";
        $result= mysqli_query($db, $query);
        $nombre="";
        $number="";
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $nombre= $row['nombre'];            }
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
                    <label>Categoría</label>
  <select name="categoria2" class="form-control dropd">
    <?php
        $query="select idcategoria, categoria.nombre from categoria, subcategoria where idcategoria=categoria_idcategoria and idsubcategoria='$numero'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $number=$row['idcategoria'];
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from categoria where idcategoria!='$number'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="subcategoria_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Subcategoria">¿Deseas regresar?</a>
  	</p>
  </form>
</div>