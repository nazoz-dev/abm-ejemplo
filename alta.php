<?php
  // 1) Conexion
  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "escuela");

  // 2) Almacenamos los datos del envío POST
  $dni = $_POST['dni'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];

  // 3) Preparar la orden SQL
  $consulta = "INSERT INTO alumno (id,dni,nombre,apellido) VALUES ('','$dni','$nombre','$apellido')";

  // 4) Ejecutar la orden y ingresamos datos
  mysqli_query($conexion, $consulta);
  header('Location: index.php');
?>
