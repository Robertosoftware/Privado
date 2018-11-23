<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron ">
               <div class="container">
                       <h1><strong>CRUD</strong> TÉCNICA</h1>
        <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
        <div class="panel panel-primary">
         <div class="panel-heading">Insertar dato</div>
        <div class="panel-body">
          <form method="post" action="partials/admin/action.php">
            <table class="table table-hover">
              <tr>
                <td>Nombre de la técnica</td>
                <td><input type="text" name="nombre" class="form-control" placeholder="Nombre"></td>
                </tr>
                <tr>
                <td>Nombre de la competencia relacionada</td>
                <td><select required name="competencia4" class="form-control">
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
                    </td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary btn-md" name="tecnica2" value="Generar"></td>
                </tr>
              </table>
            </form>
    </div>
                </div>
            </div>
                   </div>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Técnica</th>
                    <th>Competencia</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from tecnica order by idtecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['idtecnica'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['competencia_idcompetencia'].'</td>
                 <td><a href="partials/admin/action.php?etecnica='.$row['idtecnica'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dtecnica='.$row['idtecnica'].'" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                ';
            }
        }
        ?>
                   <!-- <tr>
                    <td>1</td>
                    <td>Ingeneir</td>
                    <td>Nel</td>
                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    -->
                </table>
        </div>
    </div>
</div>
</div>