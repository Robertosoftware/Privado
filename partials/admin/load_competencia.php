<?php  


	 $connect = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');


	 $output = array();  


	 $query = "SELECT * FROM  competencia";  


	 $result = mysqli_query($connect, $query);  


	 while($row = mysqli_fetch_array($result))  

	 {  

	      $output[] = $row;  

	 }  


	 echo json_encode($output);  


?>  