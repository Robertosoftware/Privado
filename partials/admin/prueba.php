<!DOCTYPE html>

<html>

<head>

    <title>PHP - How to make dependent dropdown list using jquery Ajax?</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

</head>

<body>


<div class="container">

    <div class="panel panel-default">

      <div class="panel-heading">Select State and get bellow Related City</div>

      <div class="panel-body">

            <div class="form-group">

                <label for="title">Select Competencia:</label>

                <select name="competencia" class="form-control">

                    <option value="">--- Select State ---</option>


                    <?php

                        require('db_config.php');

                        $sql = "SELECT * FROM competencia"; 

                        $result = $mysqli->query($sql);

                        while($row = $result->fetch_assoc()){

                            echo "<option value='".$row['idcompetencia']."'>".$row['nombre']."</option>";

                        }

                    ?>


                </select>

            </div>


            <div class="form-group">

                <label for="title">Select Tecnica:</label>

                <select name="tecnica" class="form-control" style="width:350px">

                </select>

            </div>


      </div>

    </div>

</div>


<script>

$( "select[name='competencia']" ).change(function () {

    var competenciaID = $(this).val();


    if(competenciaID) {


        $.ajax({

            url: "ajaxpro.php",

            dataType: 'Json',

            data: {'idcompetencia':competenciaID},

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

});

</script>


</body>

</html>