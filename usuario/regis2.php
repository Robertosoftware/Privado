

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
    <div class="fondo" style="margin-right:20%;  margin-left:20%;">
     <div class="jumbotron" style="padding-left: 5%; padding-right: 5%;">
               <form method="post" action="#">
      <?php
      //  if (isset($_SESSION['admin_name'])) :
       ?>
   <h1>Perfil del usuario</h1>
                      <?php
           $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="">
      </div>
      <div class="labelac">Apellido Paterno</div>
<div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1"></span>
 <input type="text" class="form-control" name="apellido_pat" ria-describedby="sizing-addon1" value="">
     </div>
   <div class="labelac">Apellido Materno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_mat" ria-describedby="sizing-addon1" value="">
      </div>
      <div class="labelac">Edad</div>
      <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1"></span>
      <input type="number" class="form-control" name="edad" ria-describedby="sizing-addon1" value="">
         </div>

         <div class="labelac">Teléfono</div>
         <div class="input-group input-group-lg">
         <span class="input-group-addon" id="sizing-addon1"></span>
         <input type="text" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
            </div>

            <div class="labelac">Celuar</div>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"></span>
            <input type="text" class="form-control" name="celular" ria-describedby="sizing-addon1" value="">
               </div>

               <div class="labelac">LinkedIn</div>
               <div class="input-group input-group-lg">
               <span class="input-group-addon" id="sizing-addon1"></span>
               <input type="text" class="form-control" name="linkedin" ria-describedby="sizing-addon1" value="">
                  </div>

                  <div class="labelac">Sueldo Actual</div>
                  <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"></span>
                  <input type="number" class="form-control" name="sueldo_ac" ria-describedby="sizing-addon1" value="">
                     </div>

                     <div class="labelac">Sueldo deseado</div>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="number" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="">
                        </div>

                        <div class="labelac">Descipción Habilidades</div>
                        <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"></span>
                        <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionhab" ria-describedby="sizing-addon1" value="">
                           </div>

                           <div class="labelac">Descripcion personal</div>
                           <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"></span>
                           <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionper" ria-describedby="sizing-addon1" value="">
                              </div>




                              <div class="labelac">Horario</div>
                       <select class="form-control dropd">
                         <option>
                             Selecciona el correspondiente
                             </option>
                             <?php
                           $query="select * from horario";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                 while($row=mysqli_fetch_array($result)){
                                     echo'<option value="'.$row['idhorario'].'">'.$row['tipo'].'</option>';
                                 }
                             }
                             ?>
                          </select>



                          <div class="labelac">Categoría</div>
                   <select class="form-control dropd">
                     <option>
                         Selecciona el correspondiente
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



                      <div class="labelac">Subcategoría</div>
               <select class="form-control dropd">
                 <option>
                     Selecciona el correspondiente
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


                  <div class="labelac">Localidad</div>
      <select class="form-control dropd">
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

         <div class="labelac">Nivel de inglés</div>
 <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
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
    <button type="submit" class="btn btn2" name="reg_user_register">Guardar</button>
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
