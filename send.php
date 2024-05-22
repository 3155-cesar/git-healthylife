<?php

include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['cedula']) >= 1 &&
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['tiempo']) >= 1 &&
        strlen($_POST['doctor']) >= 1 &&
        strlen($_POST['estado']) >= 1 

    ){
      $cedula =trim($_POST['cedula']);
      $name =trim($_POST['name']);
      $phone =trim($_POST['phone']);
      $email =trim($_POST['email']);
      $tiempo =trim($_POST['tiempo']);
      $doctor =trim($_POST['doctor']);
      $estado =trim($_POST['estado']);
      $consulta = "INSERT INTO dato(cedula,nombre,telefono,email,tiempo,doctor,estado) 
      VALUES ('$cedula','$name','$phone','$email','$tiempo','$doctor','$estado')";
      $resultado = mysqli_query($conex,$consulta);
    }
}

?>