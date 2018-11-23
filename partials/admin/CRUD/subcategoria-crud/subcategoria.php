<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron ">
               <div class="container">
                       <h1><strong>CRUD</strong> SUBCATEGORÍA</h1>
        <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
        <div class="panel panel-primary">
         <div class="panel-heading">Insertar dato</div>
        <div class="panel-body">
          <form method="post" action="partials/admin/action.php">
            <table class="table table-hover">
              <tr>
                <td>Nombre de la subcategoría</td>
                <td><input type="text" name="nombre" class="form-control" placeholder="Nombre"></td>
                </tr>
                <tr>
                <td>Nombre de la categoría relacionada</td>
                <td><select required name="categoria2" class="form-control">
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
                    </td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary btn-md" name="subcategoria" value="Generar"></td>
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
                    <th>Subcategoría</th>
                    <th>Categoría</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from subcategoria order by idsubcategoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['idsubcategoria'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['categoria_idcategoria'].'</td>
                 <td><a href="partials/admin/action.php?esubcategoria='.$row['idsubcategoria'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dsubcategoria='.$row['idsubcategoria'].'" class="btn btn-danger">Eliminar</a></td>
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