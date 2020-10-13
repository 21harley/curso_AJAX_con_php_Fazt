<?php

include("database.php");

if(isset($_POST['id'])){
    $id= $_POST['id'];
    $query="SELECT * FROM `tabla` WHERE `Id`='$id'";
    $resl=mysqli_query($connection,$query);
    if(!$resl){
       die("Error de consulta");
    }
    //echo 'Task deleted Successfully';
    $json=array();
    while($row=mysqli_fetch_array($resl)){
    $json[]=array(
        'name'=>$row['Nombre'],
        'description'=>$row['descripcion'],
        'id'=>$row['Id']
    );
    }

    if(sizeof($json)>0){
        $jsonstring=json_encode($json[0]);
    }else{
        $jsonstring="";
    }

    echo $jsonstring;
}

?>