<?php include('../usuario/session.php');
session start
error_reporting(E_ALL ^ E_WARNING);?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>

<html>
<head>

  <meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../resources/style2.css" rel="stylesheet">
    <link href="../resources/bootstrap.min.css" rel="stylesheet">
    <link href="../resources/navbar-fixed-top.css" rel="stylesheet">
    <link rel="icon" href="../resources/fav.ico.jpg">
  <title>Perfil de usuario</title>
</head>
<body>
    <div class="fondo">
     <div class="jumbotron" >
               <form method="post" action="usuario/serverusuario.php">
      <?php
    $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
$correo=$_SESSION['correo'];

$q="select * from user_register where correo = '$correo';";
$result =mysqli_query($db, $q);
$row=mysqli_fetch_array($result);

$id = $row['id_usuario'];
      //  if (isset($_SESSION['admin_name'])) :
       ?>
   <h1>Perfil del usuario</h1>
                      <?php
           $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
                   
    <?php
        $qnombre="select * from usuario where user_register_id_usuario = $id;";
        $rnombre =mysqli_query($db, $qnombre);
        $rownombre=mysqli_fetch_array($rnombre);
        $vnombre = $rownombre['nombre'];
    ?>
                   
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="<?php  echo $vnombre  ?>" >
      </div>
                   
    <?php
        $qapellidop="select * from usuario where user_register_id_usuario = $id;";
        $rapellidop =mysqli_query($db, $qapellidop);
        $rowapellidop=mysqli_fetch_array($rapellidop);
        $vapellidop = $rowapellidop['apellido_paterno'];
    ?>
                   
      <div class="labelac">Apellido Paterno</div>
<div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1"></span>
 <input type="text" class="form-control" name="apellido_pat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidop  ?>">
     </div>
                   
    <?php
        $qapellidom="select * from usuario where user_register_id_usuario = $id;";
        $rapellidom =mysqli_query($db, $qapellidom);
        $rowapellidom=mysqli_fetch_array($rapellidom);
        $vapellidom = $rowapellidom['apellido_materno'];
    ?>
                   
   <div class="labelac">Apellido Materno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_mat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidom  ?>">
      </div>
                   
    <?php
        $qedad="select * from usuario where user_register_id_usuario = $id;";
        $redad =mysqli_query($db, $qedad);
        $rowedad=mysqli_fetch_array($redad);
        $vedad = $rowedad['edad'];
    ?>
                   
      <div class="labelac">Edad</div>
      <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1"></span>
      <input type="number" class="form-control" name="edad" ria-describedby="sizing-addon1" value="<?php  echo $vedad  ?>">
         </div>
                   
        <?php
        $qtelefono="select * from usuario where user_register_id_usuario = $id;";
        $rtelefono =mysqli_query($db, $qtelefono);
        $rowtelefono=mysqli_fetch_array($rtelefono);
        $vtelefono = $rowtelefono['telefono'];
        ?>

         <div class="labelac">Teléfono</div>
         <div class="input-group input-group-lg">
         <span class="input-group-addon" id="sizing-addon1"></span>
         <input type="text" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="<?php  echo $vtelefono  ?>">
            </div>
                   
            <?php
        $qcelular="select * from usuario where user_register_id_usuario = $id;";
        $rcelular =mysqli_query($db, $qcelular);
        $rowcelular=mysqli_fetch_array($rcelular);
        $vcelular = $rowcelular['celular'];
    ?>

            <div class="labelac">Celular</div>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"></span>
            <input type="text" class="form-control" name="celular" ria-describedby="sizing-addon1" value="<?php  echo $vcelular  ?>">
               </div>
                   
                   <?php
        $qlinkedin="select * from usuario where user_register_id_usuario = $id;";
        $rlinkedin =mysqli_query($db, $qlinkedin);
        $rowlinkedin=mysqli_fetch_array($rlinkedin);
        $vlinkedin = $rowlinkedin['linkedin'];
    ?>

               <div class="labelac">LinkedIn</div>
               <div class="input-group input-group-lg">
               <span class="input-group-addon" id="sizing-addon1"></span>
               <input type="text" class="form-control" name="linkedin" ria-describedby="sizing-addon1" value="<?php  echo $vlinkedin  ?>">
                  </div>
                   
                   
                   <?php
        $qsueldoa="select * from usuario where user_register_id_usuario = $id;";
        $rsueldoa =mysqli_query($db, $qsueldoa);
        $rowsueldoa=mysqli_fetch_array($rsueldoa);
        $vsueldoa = $rowsueldoa['sueldo_actual'];
    ?>

                  <div class="labelac">Sueldo Actual</div>
                  <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"></span>
                  <input type="number" class="form-control" name="sueldo_ac" ria-describedby="sizing-addon1" value="<?php  echo $vsueldoa  ?>">
                     </div>
                   
                   <?php
        $qsueldod="select * from usuario where user_register_id_usuario = $id;";
        $rsueldod =mysqli_query($db, $qsueldod);
        $rowsueldod=mysqli_fetch_array($rsueldod);
        $vsueldod = $rowsueldod['salario_deseado'];
    ?>

                     <div class="labelac">Sueldo deseado</div>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="number" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vsueldod  ?>">
                        </div>
                   
                    <?php
        $qdeschab="select * from usuario where user_register_id_usuario = $id;";
        $rdeschab =mysqli_query($db, $qdeschab);
        $rowdeschab=mysqli_fetch_array($rdeschab);
        $vdeschab = $rowdeschab['descripcion_habilidad'];
    ?>

                        <div class="labelac">Descipción Habilidades</div>
                        <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"></span>
                        <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionhab" ria-describedby="sizing-addon1" value="<?php  echo $vdeschab ?>">
                           </div>
                   
                   
                   <?php
        $qdescper="select * from usuario where user_register_id_usuario = $id;";
        $rdescper =mysqli_query($db, $qdescper);
        $rowdescper=mysqli_fetch_array($rdescper);
        $vdescper = $rowdescper['descripcion_persona'];
    ?>

                           <div class="labelac">Descripcion personal</div>
                           <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"></span>
                           <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionper" ria-describedby="sizing-addon1" value="<?php  echo $vdescper ?>">
                              </div>
                   
                    <?php
        $qeducacion="select * from usuario where user_register_id_usuario = $id;";
        $reducacion =mysqli_query($db, $qeducacion);
        $roweducacion=mysqli_fetch_array($reducacion);
        $veducacion = $roweducacion['educacion_ideducacion'];
        $qeducacion2="select * from educacion where ideducacion = $veducacion;";
        $reducacion2 =mysqli_query($db, $qeducacion2);
        $roweducacion2=mysqli_fetch_array($reducacion2);
        $veducacion2 = $roweducacion2['nombre'];
                                  
                                   
    ?>
                    
                    <div class="labelac">Educacion</div>
                       <select name="educacion" class="form-control dropd" value="<?php  echo $veducacion ?>">
                           
                         <option value="<?php  echo $veducacion ?>">
                             <?php  echo $veducacion2 ?>
                             </option>
                             <?php
                            $stedu="";
                           $query="select * from educacion";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                  
                                 while($row=mysqli_fetch_array($result)){
                                    
                                                                         
                                     echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
                                 }
                             }
                             ?>
                          </select>
                   
                   <?php
        $qhorario="select * from usuario where user_register_id_usuario = $id;";
        $rhorario =mysqli_query($db, $qhorario);
        $rowhorario=mysqli_fetch_array($rhorario);
        $vhorario = $rowhorario['horario_id_horario'];
        $qhorario2="select * from horario where id_horario = $vhorario;";
        $rhorario2 =mysqli_query($db, $qhorario2);
        $rowhorario2=mysqli_fetch_array($rhorario2);
        $vhorario2 = $rowhorario2['tipo'];
                                  
                                   
    ?>
                   
                    <div class="labelac">Horario</div>
                       <select name="horario" class="form-control dropd">
                         <!--<option>
                             Selecciona el correspondiente
                             </option>-->
                           
                           <option value="<?php  echo $vhorario ?>">
                             <?php  echo $vhorario2 ?>
                             </option>
                             <?php
                           $query="select * from horario";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                 while($row=mysqli_fetch_array($result)){
                                     echo'<option value="'.$row['id_horario'].'">'.$row['tipo'].'</option>';
                                 }
                             }
                             ?>
                          </select>


 <?php
        $qsexo="select * from usuario where user_register_id_usuario = $id;";
        $rsexo =mysqli_query($db, $qsexo);
        $rowsexo=mysqli_fetch_array($rsexo);
        $vsexo = $rowsexo['sexo_idsexo'];
        $qsexo2="select * from sexo where idsexo = $vsexo;";
        $rsexo2 =mysqli_query($db, $qsexo2);
        $rowsexo2=mysqli_fetch_array($rsexo2);
        $vsexo2 = $rowsexo2['nombre'];
                                  
                                   
    ?>


                              <div class="labelac">Sexo</div>
                       <select name="sexo" class="form-control dropd">
                         <option value="<?php  echo $vsexo ?>">
                             <?php  echo $vsexo2 ?>
                             </option>
                             <?php
                           $query="select * from sexo";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                 while($row=mysqli_fetch_array($result)){
                                     echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
                                 }
                             }
                             ?>
                          </select>

                   
                    <?php
        $qcategoria="select * from usuario where user_register_id_usuario = $id;";
        $rcategoria =mysqli_query($db, $qcategoria);
        $rowcategoria=mysqli_fetch_array($rcategoria);
        $vcategoria = $rowcategoria['categoria_idcategoria'];
        $qcategoria2="select * from categoria where idcategoria = $vcategoria;";
        $rcategoria2 =mysqli_query($db, $qcategoria2);
        $rowcategoria2=mysqli_fetch_array($rcategoria2);
        $vcategoria2 = $rowcategoria2['nombre'];
                                  
                                   
    ?>


                          <div class="labelac">Categoría</div>
                   <select name="categoria" class="form-control dropd">
                     <option value="<?php  echo $vcategoria ?>">
                             <?php  echo $vcategoria2 ?>
                             </option>
                         <?php
                         $query="select * from categoria";
                         $result= mysqli_query($db, $query);
                         if($result)
                         {
                             while($row=mysqli_fetch_array($result)){
                                 echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
                             }
                         }
                         ?>
                      </select>

  <?php
        $qsubcategoria="select * from usuario where user_register_id_usuario = $id;";
        $rsubcategoria =mysqli_query($db, $qsubcategoria);
        $rowsubcategoria=mysqli_fetch_array($rsubcategoria);
        $vsubcategoria = $rowsubcategoria['subcategoria_idsubcategoria'];
        $qsubcategoria2="select * from subcategoria where idsubcategoria = $vsubcategoria;";
        $rsubcategoria2 =mysqli_query($db, $qsubcategoria2);
        $rowsubcategoria2=mysqli_fetch_array($rsubcategoria2);
        $vsubcategoria2 = $rowsubcategoria2['nombre'];
                                  
                                   
    ?>

                      <div class="labelac">Subcategoría</div>
               <select name="subcategoria" class="form-control dropd">
                 <option value="<?php  echo $vsubcategoria ?>">
                             <?php  echo $vsubcategoria2 ?>
                             </option>
                     <?php
                     $query="select * from subcategoria";
                     $result= mysqli_query($db, $query);
                     if($result)
                     {
                         while($row=mysqli_fetch_array($result)){
                             echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
                         }
                     }
                     ?>
                  </select>

                   
                   <?php
        $qlocalidad="select * from usuario where user_register_id_usuario = $id;";
        $rlocalidad =mysqli_query($db,$qlocalidad);
        $rowlocalidad=mysqli_fetch_array($rlocalidad);
        $vlocalidad = $rowlocalidad['localidad_idlocalidad'];
        $qlocalidad2="select * from localidad where idlocalidad = $vlocalidad;";
        $rlocalidad2 =mysqli_query($db, $qlocalidad2);
        $rowlocalidad2=mysqli_fetch_array($rlocalidad2);
        $vlocalidad2 = $rowlocalidad2['nombrel'];
                                  
                                   
    ?>
                   

                  <div class="labelac">Localidad</div>
    <select required name="localidad" class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from localidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <?php
        $qingles="select * from usuario where user_register_id_usuario = $id;";
        $ringles =mysqli_query($db,$qingles);
        $rowingles=mysqli_fetch_array($ringles);
        $vingles = $rowingles['ingles_idingles'];
        $qingles2="select * from ingles where idingles = $vingles;";
        $ringles2 =mysqli_query($db, $qingles2);
        $rowingles2=mysqli_fetch_array($ringles2);
        $vingles2 = $rowingles2['nivel'];
                                  
                                   
    ?>

         <div class="labelac">Nivel de inglés</div>
 <select name="ingles" class="form-control dropd">
    <option value="<?php  echo $vingles ?>">
                             <?php  echo $vingles2 ?>
                             </option>
        <?php
        $query="select * from ingles";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>
     </select>

<!--         <div class="labelac">Años de experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
</div>-->


                  <!--  <div class="labelac">Competencia técnica 1</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
        <?php
      //  $query="select * from tecnica";
        //$result= mysqli_query($db, $query);
        //if($result)
   //     {
     //       while($row=mysqli_fetch_array($result)){
       //         echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
         //   }
      //  }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 2</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
        <?php
        //$query="select * from tecnica";
        //$result= mysqli_query($db, $query);
        //if($result)
        //{
          //  while($row=mysqli_fetch_array($result)){
            //    echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            //}
        //}
        ?>
     </select>
                    <div class="labelac">Competencia técnica 3</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
        <?php
        //$query="select * from tecnica";
        //$result= mysqli_query($db, $query);
        //if($result)
        //{
          //  while($row=mysqli_fetch_array($result)){
            //    echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            //}
       // }
        ?>
     </select>

        <div class="labelac">Habilidad 1</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
        <?php
 //       $query="select * from habilidad";
   //     $result= mysqli_query($db, $query);
     //   if($result)
       // {
         //   while($row=mysqli_fetch_array($result)){
           //     echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            //}
        //}
        ?>
     </select>
                   <div class="labelac">Habilidad 2</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
        <?php
        //$query="select * from habilidad";
      //  $result= mysqli_query($db, $query);
        //if($result)
//        {
  //          while($row=mysqli_fetch_array($result)){
    //            echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
      //      }
        //}
        ?>
     </select>
                   <div class="labelac">Habilidad 3</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>
     //   <?php
       // $query="select * from habilidad";
  //      $result= mysqli_query($db, $query);
    //    if($result)
      //  {
        //    while($row=mysqli_fetch_array($result)){
   //             echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
     //       }
       // }
        ?>
     </select>-->


    <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="registrar_usuario">Guardar</button>
  	</div>

         </form>

      </div>
    <div class="cuerpo">
</div>
    </div>
</body>
</html>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php// endif ?>



















































    <!-- logged in user information -->
<!--<div class="fondo">
     <div class="jumbotron">
        <h1><?php  //if (isset($_SESSION['correo'])) : ?>
    	<p>Hola <strong><?php //echo $_SESSION['correo']; ?></strong></p> </h1>
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Apellido Paterno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="apellido_paterno" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Apellido Materno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="apellido_materno" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Edad</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="edad" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Teléfono</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
      </div>
      </div>
    <div class="cuerpo">
</div>
    </div>
<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php //endif ?>
