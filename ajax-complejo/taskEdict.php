<?php

include("database.php");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$query="UPDATE `tabla` SET `Nombre`='$name',`descripcion`='$description' WHERE `Id`='$id' ";
$result=mysqli_query($connection,$query);
if(!$result){
    die("Query Error".mysqli_error($connection));
}
/*
$json=array();
while($row=mysqli_fetch_array($result)){
    $json[]=array(
        'name'=>$row['Nombre'],
        'description'=>$row['descripcion'],
        'id'=>$row['Id']

    );
}
$jsonstring=json_encode($json);
*/
echo "Tarea ".$id." Cambio";

?>