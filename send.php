<?php

include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['cedula']) >= 1 &&
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['tiempo']) >= 1 &&
        strlen($_POST['estado']) >= 1 

    ){
      $cedula =trim($_POST['cedula']);
      $name =trim($_POST['name']);
      $phone =trim($_POST['phone']);
      $email =trim($_POST['email']);
      $tiempo =trim($_POST['tiempo']);
      $estado =trim($_POST['estado']);
      $consulta = "INSERT INTO datos(cedula,nombre,telefono,email,tiempo,estado) 
      VALUES ('$cedula','$name','$phone','$email','$tiempo','$estado')";
      $resultado = mysqli_query($conex,$consulta);
    }
}

?>