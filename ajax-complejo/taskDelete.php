<?php

include("database.php");

if(isset($_POST['id'])){
    $id= $_POST['id'];
    $query="DELETE FROM `tabla` WHERE `Id`='$id'";
    $resl=mysqli_query($connection,$query);
    if(!$resl){
       die("Error de consulta");
    }
    echo 'Task deleted Successfully';
}


?>