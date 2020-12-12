<?php
  include 'conexion.php';

  $conn = new mysqli($server, $usuario, $contra, $db);
  
  if($conn->connect_error){
    echo "Conexion fallida";
    exit();
  }
  
  $id= $_POST['idelement'];
  
  $sql= 'DELETE FROM tablanerdify WHERE Id= "'.$id.'"';
  
  if(isset($_POST)){
    $res= $conn->query($sql);
  }

?>