<?php include('../../admin/session-admin.php') ?>
    <div class="fondo">
     <div class="jumbotron">
               <form method="post" action="partials/admin/servertrabajo.php">
      <?php  if (isset($_SESSION['admin_name'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
    <h2>Nueva oferta de trabajo</h2>
       <div class="labelac">Nombre de la vacante</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="" required>
      </div>    
   <div class="labelac">Salario</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="salario" ria-describedby="sizing-addon1" value="" required>
      </div>
   <div class="labelac">Empresa</div>
    <select required name="empresa" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from empresa";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idempresa'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
   <div class="labelac">Fecha</div>
  <input type="date" class="form-control dropd" name="fecha" value="" required>
   <div class="labelac">Teléfono</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="" required>
      </div>
         <div class="labelac">Correo</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo" ria-describedby="sizing-addon1" value="" required>
      </div>
         <div class="labelac">Años de experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="experiencia" ria-describedby="sizing-addon1" value="" required>
      </div>
         <div class="labelac">Horario</div>
  <select required name="horario" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
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
         <div class="labelac">Categoría</div>
  <select required name="categoria" class="form-control dropd">
    <option value="">
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
  <select required name="subcategoria" class="form-control dropd">
    <option value="">
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
                    <div class="labelac">Competencia 1</div>
  <select required name="competencia1" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from competencia";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Competencia 2</div>
  <select required name="competencia2"  class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from competencia";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Competencia 3</div>
  <select required name="competencia3" class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from competencia";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <!-- <div class="labelac">Competencia técnica 2</div>
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
        //}
        ?>
     </select>
                    <div class="labelac">Competencia técnica 4</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
      //  $query="select * from tecnica";
        //$result= mysqli_query($db, $query);
        //if($result)
 //       {
   //         while($row=mysqli_fetch_array($result)){
     //           echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
       //     }
        //}
        ?>
     </select>
                    <div class="labelac">Competencia técnica 5</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
//        $query="select * from tecnica";
  //      $result= mysqli_query($db, $query);
    //    if($result)
      //  {
        //    while($row=mysqli_fetch_array($result)){
          //      echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            //}
        //}
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
   //         }
     //   }
        ?>
     </select>
                   <div class="labelac">Habilidad 2</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
//        $query="select * from habilidad";
  //      $result= mysqli_query($db, $query);
    //    if($result)
      //  {
        //    while($row=mysqli_fetch_array($result)){
          //      echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
  //          }
    //    }
        ?>
     </select>
                   <div class="labelac">Habilidad 3</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
//        $query="select * from habilidad";
  //      $result= mysqli_query($db, $query);
   //     if($result)
 //       {
   //         while($row=mysqli_fetch_array($result)){
     //           echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
    //        }
      //  }
        ?>
     </select>
                   <div class="labelac">Habilidad 4</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
  //      $query="select * from habilidad";
    //    $result= mysqli_query($db, $query);
      //  if($result)
        //{
 //           while($row=mysqli_fetch_array($result)){
   //             echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
     //       }
       // }
        ?>
     </select>
                   <div class="labelac">Habilidad 5</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
  //      $query="select * from habilidad";
    //    $result= mysqli_query($db, $query);
      //  if($result)
        //{
 //           while($row=mysqli_fetch_array($result)){
   //             echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
     //       }
      //  }
        ?>
     </select>--> 
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
         <div class="labelac">Nivel de inglés</div>
 <select required name="ingles" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option >           
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
                   
                   
         <div class="labelac">Educación</div>
 <select required name="educacion" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>           
        <?php
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
        
        <div class="labelac">Sexo</div>
 <select required name="sexo" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
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
                   
                   
     <div class="labelac">Edad requerida</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="edad_req" ria-describedby="sizing-addon1" value="" required>
                   </div>
    <div class="labelac">Descripcion</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input style="height:100px" type="text" class="form-control" name="descripcion" ria-describedby="sizing-addon1" value="" >
      </div>   
    <div class="labelac">Activo</div>
 <select required name="activo" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>  
     <option value="Activar">Activar</option> 
     <option value="Desactivar" >Desactivar</option> 
                   </select>
    <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="oferta_register">Siguiente</button>
  	</div>
    
         </form>
   <!-- <script>
   $("select[name='competencia']").change(function(){
       var competenciaID = $(this).val();
       if(competenciaID){
                  $.ajax({
            url: "ajax.php",
            dataType: 'Json',
            data: {'id':competenciaID},
            success: function(data) {
                $('select[name="tecnica"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="tecnica"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }else{
        $('select[name="tecnica"]').empty();
    }
});                      }
                   </script>
         
      </div>
    </div>
    
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
