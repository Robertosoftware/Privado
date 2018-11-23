<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CRUD</strong> TRABAJO</h1>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Activo</th>
                    <th>Fecha de oferta</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from trabajo order by id_trabajo";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['id_trabajo'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['activo'].'</td>
                <td>'.$row['fecha_post'].'</td>
                 <td><a href="partials/admin/action.php?etrabajo='.$row['id_trabajo'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dtrabajo='.$row['id_trabajo'].'" class="btn btn-danger">Eliminar</a></td>
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