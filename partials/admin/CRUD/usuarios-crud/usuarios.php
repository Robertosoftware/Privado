<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CRUD</strong> USUARIOS</h1>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-1"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Correo</th>
                    <th>Fecha de registro</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from user_register order by id_usuario";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['id_usuario'].'</td>
                <td>'.$row['correo'].'</td>
                <td>'.$row['create_time'].'</td>
                 <td><a href="partials/admin/action.php?eusuario='.$row['id_usuario'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dusuario='.$row['id_usuario'].'" class="btn btn-danger">Eliminar</a></td>
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