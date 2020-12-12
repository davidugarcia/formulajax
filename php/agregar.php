<?php
  include 'conexion.php';

  $conn = new mysqli($server, $usuario, $contra, $db);
  
  if($conn->connect_error){
    echo "Conexion fallida";
    exit();
  }
  
  $sql= 'INSERT INTO tablanerdify (texto, Descripcion) VALUES 
         ("'.$_POST['texto'].'", "'.$_POST['descp'].'")';
  
  if(isset($_POST)){
    $res= $conn->query($sql);
  }

?>