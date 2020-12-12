<?php
  include 'conexion.php';

  $conn = new mysqli($server, $usuario, $contra, $db);
  
  if($conn->connect_error){
    echo "Conexion fallida";
    exit();
  }
  
  $sql= 'SELECT * FROM tablanerdify';
  $res= $conn->query($sql);
  
  $array= array();
  
  while($row= $res->fetch_assoc()){
    $array[]= $row;
  }

  //objeto en el file verelements.php
  include_once "verelements.php";

?>