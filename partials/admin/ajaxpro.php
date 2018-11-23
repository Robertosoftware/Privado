<?php


   require('db_config.php');


   $sql = "SELECT * FROM tecnica

         WHERE competencia_idcompetencia LIKE '%".$_GET['idcompetencia']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];

   while($row = $result->fetch_assoc()){

        $json[$row['idtecnica']] = $row['nombre'];

   }


   echo json_encode($json);

?>

