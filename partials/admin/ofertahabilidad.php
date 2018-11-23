<?php include('../../admin/session-admin.php') ?>
     <div class="jumbotron">
               <form method="post" action="partials/admin/servertrabajo.php">
      <?php  if (isset($_SESSION['admin_name'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
                   <h2>Habilidades de la oferta de trabajo.</h2>
                  <div class="labelac">Id oferta de trabajo</div>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['idtrabajo'];
?>" placeholder="" readonly>
                   <div class="labelac">Habilidad 1</div>
  <select name="habilidad1" required class="form-control dropd">
    <option value="">
        Selecciona la habilidad correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
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
  <select name="habilidad2" required class="form-control dropd">
    <option value="">
        Selecciona la habilidad correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
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
  <select name="habilidad3" required class="form-control dropd">
    <option value="">
        Selecciona la habilidad correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="oferta_habilidad" value="">Siguiente</button>
  	</div>  
         </form>
        </div>
    <?php endif ?>