<?php include('../../admin/session-admin.php') ?>
     <div class="jumbotron">
               <form method="post" action="partials/admin/servertrabajo.php">
      <?php  if (isset($_SESSION['admin_name'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
    <?php
         $competencia1 = $_SESSION['competencia1'];
         $competencia2 = $_SESSION['competencia2'];
         $competencia3 = $_SESSION['competencia3'];
          ?>
                   <h2>Competencia de la oferta de trabajo.</h2>
             <div class="labelac">Id oferta de trabajo</div>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['idoferta'];
?>" placeholder="" readonly>
                    <div class="labelac">Competencia técnica 1</div>
  <select name="competencia1" required class="form-control dropd">
    <option value="">
        Selecciona la competencia correspondiente
        </option>           
        <?php
         $query="select * from tecnica where competencia_idcompetencia='$competencia1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                       <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad1" ria-describedby="sizing-addon1" value="" required>
                   </div>
                      <div class="labelac">Competencia técnica 2</div>
  <select name="competencia2" required class="form-control dropd">
    <option value="">
        Selecciona la competencia correspondiente
        </option>           
        <?php
         $query="select * from tecnica where competencia_idcompetencia='$competencia2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad2" ria-describedby="sizing-addon1" value="" required>
                   </div>
        <div class="labelac">Competencia técnica 3</div>
  <select name="competencia3" required class="form-control dropd">
    <option value="">
        Selecciona la competencia correspondiente
        </option>           
        <?php
         $query="select * from tecnica where competencia_idcompetencia='$competencia3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="" required>
                   </div>   
    <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="oferta_competencia" value="">Siguiente</button>
  	</div>  
         </form>
        </div>
    <?php endif ?>