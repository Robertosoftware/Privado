<?php
class Database
{
    public $con;
    public function_construct(){
        $this->con = mysqli_connect("localhost","root","254088Ma!","mandra");
        if($this->con){
            echo "Connected";
        }else{
            echo "Not Connected";
        }
    }
}
?>