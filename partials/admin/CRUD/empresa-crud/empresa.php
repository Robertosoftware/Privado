<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CRUD</strong> EMPRESA</h1>
        <div class="row">
         <div class="col-md-2"></div>
            <div class="col-md-8">
        <div class="panel panel-primary">
         <div class="panel-heading">Insertar dato</div>
        <div class="panel-body">
          <form method="post" action="partials/admin/action.php">
            <table class="table table-hover">
              <tr>
                <td>Nombre de la empresa</td>
                <td><input type="text" name="nombre" class="form-control" placeholder="Nombre" required></td>
                </tr>
                <tr>
                <td>Descripción de la empresa</td>
                <td><input type="text" name="descripcion" class="form-control" placeholder="Descripción" required></td>
                </tr>
                <tr>
                <tr>
                <td>Email</td>
                <td><input type="email" name="correo" class="form-control" placeholder="Email" required></td>
                </tr>
                <tr>
                <tr>
                <td>Teléfono</td>
                <td><input type="text" name="telefono" class="form-control" placeholder="Teléfono" required></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary btn-md" name="empresa" value="Generar"></td>
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
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from empresa order by idempresa";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['idempresa'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['correo'].'</td>
                <td>'.$row['telefono'].'</td>
                 <td><a href="partials/admin/action.php?eempresa='.$row['idempresa'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dempresa='.$row['idempresa'].'" class="btn btn-danger">Eliminar</a></td>
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
            <div class="col-md-2"></div>
    </div>
</div>