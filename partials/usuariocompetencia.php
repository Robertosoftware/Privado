<?php include('../usuario/session.php');
//error_reporting(E_ALL ^ E_WARNING);?>
<div class="jumbotron">
               <form method="post" action="usuario/serverusuario.php">
      <?php  if (isset($_SESSION['correo'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
    <?php
         $competencia1 = $_SESSION['competencia1'];
         $competencia2 = $_SESSION['competencia2'];
         $competencia3 = $_SESSION['competencia3'];


         $correo=$_SESSION['correo'];
         $q="select * from user_register where correo = '$correo';";
         $result =mysqli_query($db, $q);
         $row=mysqli_fetch_array($result);
         $id = $row['id_usuario'];
          ?>
                   <h2>Competencias técnicas del usuario.</h2>





             <div class="labelac">Id usuario</div>
  <input type="text" class="form-control" name="idusuario2" ria-describedby="sizing-addon1" value="<?php
echo $_SESSION['idusuario'];
?>" placeholder="" readonly>

<?php
$qcompetencia1="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
$rcompetencia1 =mysqli_query($db,$qcompetencia1);
//$rowcompetencia1=mysqli_fetch_array($rcompetencia1);
//$vcompetencia1 = $rowcompetencia1['tecnica_idtecnica'];

                   
                   $i=0;
                   $arreglo = array();
                   $otroarreglo = array();
                                 $arreglo2 = array();
                  
                   
                    while($res=mysqli_fetch_array($rcompetencia1)){
                        $i++;
                        $arreglo2[$i] = $res['tecnica_idtecnica'];
              
                           $cons=mysqli_query($db,"select * from tecnica where idtecnica = $arreglo2[$i];");
                  // $resultado = mysqli_fetch_array($cons);
                             
                           
                                 
                                 
    
                                 while($resultado=mysqli_fetch_array($cons)){
                                      
                                     $arreglo[$i] = $resultado['nombre'];
                                     $otroarreglo[$i] = $resultado['idtecnica'];
                                
                                     
                                 }
                    }
                   
                          ?>

                    <div class="labelac">Competencia técnica 1</div>
  <select name="competencia1" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[1]; ?>">
         <?php  echo $arreglo[1]; ?>
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
<?php
                                 
                                     ?>
     <?php
     $qpericidad1="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
     $rpericidad1 =mysqli_query($db,$qpericidad1);
     $rowpericidad1=mysqli_fetch_array($rpericidad1);
     $vpericidad1 = $rowpericidad1['pericidad'];
                                 
      ?>


                       <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad1" ria-describedby="sizing-addon1" value="<?php echo $vpericidad1 ?>" required>
                   </div>



<?php
$qcompetencia2="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
$rcompetencia2 =mysqli_query($db,$qcompetencia2);
$rowcompetencia2=mysqli_fetch_array($rcompetencia2);
$vcompetencia2 = $rowcompetencia2['tecnica_idtecnica'];
         
         
         

 ?>



                      <div class="labelac">Competencia técnica 2</div>
  <select name="competencia2" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[2]; ?>">
        <?php  echo $arreglo[2]; ?>
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

     <?php
     $qpericidad2="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
     $rpericidad2 =mysqli_query($db,$qpericidad2);
     $rowpericidad2=mysqli_fetch_array($rpericidad2);
     $vpericidad2 = $rowpericidad2['pericidad'];

      ?>
                   <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad2" ria-describedby="sizing-addon1" value="<?php echo $vpericidad2 ?>" required>
                   </div>

                   <?php
                   $qcompetencia3="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
                   $rcompetencia3 =mysqli_query($db,$qcompetencia3);
                   $rowcompetencia3=mysqli_fetch_array($rcompetencia3);
                   $vcompetencia3 = $rowcompetencia3['tecnica_idtecnica'];

                    ?>



        <div class="labelac">Competencia técnica 3</div>
  <select name="competencia3" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[3]; ?>">
        <?php  echo $arreglo[3]; ?>
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

     <?php
     $qpericidad3="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
     $rpericidad3 =mysqli_query($db,$qpericidad3);
     $rowpericidad3=mysqli_fetch_array($rpericidad3);
     $vpericidad3 = $rowpericidad3['pericidad'];
                                 
      ?>

                <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad2; ?>" required>
                   </div>
    <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="usuario_competencia" value="">Siguiente</button>
  	</div>
         </form>
        </div>
    <?php 
                   endif ?>
