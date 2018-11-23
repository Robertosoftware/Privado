<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h1><strong>CRUD</strong> HORARIO</h1>
        <div class="row">
             <div class="col-md-3"></div>
            <div class="col-md-6">
        <div class="panel panel-primary">
         <div class="panel-heading">Insertar dato</div>
        <div class="panel-body">
          <form method="post" action="partials/admin/action.php">
            <table class="table table-hover">
              <tr>
                <td>Tipo de horario</td>
                <td><input type="text" name="tipo" class="form-control" placeholder="Tipo de horario"></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="horario" value="Generar"></td>
                </tr>
              </table>
            </form>
    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
                   </div>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Tipo</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                            <?php
        $query="select * from horario order by id_horario";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<tr><td>'.$row['id_horario'].'</td>
                <td>'.$row['tipo'].'</td>
                 <td><a href="partials/admin/action.php?ehorario='.$row['id_horario'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dhorario='.$row['id_horario'].'" class="btn btn-danger">Eliminar</a></td>
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