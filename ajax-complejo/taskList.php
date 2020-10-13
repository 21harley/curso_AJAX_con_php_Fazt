<?php

include("database.php");

$query="SELECT * FROM `tabla`";
$resl=mysqli_query($connection,$query);

if(!$resl){
    die('Query failed'.mysqli_error($connection));
}
$json=array();
while($row=mysqli_fetch_array($resl)){
    $json[]=array(
        'name'=>$row['Nombre'],
        'description'=>$row['descripcion'],
        'id'=>$row['Id']
    );
}
if(sizeof($json)>0){
    $jsonstring=json_encode($json);
}else{
    $jsonstring="";
}

echo $jsonstring;

?>