<?php

include("database.php");

if(isset($_POST['name'])){
    $name= $_POST['name'];
    $description=$_POST['description'];
    $query="INSERT INTO `tabla`(Nombre,descripcion) VALUES ('$name','$description')";
    $resl=mysqli_query($connection,$query);
    if(!$resl){
       die("Error de consulta");
    }
    echo 'Task added Successfully';
}

?>