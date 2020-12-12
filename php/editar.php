<?php
  include 'conexion.php';

  $conn = new mysqli($server, $usuario, $contra, $db);
  
  if($conn->connect_error){
    echo "Conexion fallida";
    exit();
  }
  
  if(isset($_POST)){
    $id= $_POST['idelement'];
    $texto= $_POST['texto'];
    $descp= $_POST['descp'];
  
    $sql= 'UPDATE tablanerdify SET texto= "'.$texto.'", Descripcion= "'.$descp.'" WHERE Id= "'.$id.'"';
    
    $resl= $conn->query($sql);
  }
  
?>