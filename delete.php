<?php

//conexion - dsn
$dsn = "pgsql:host=localhost;dbname=postgres";
$conn = new PDO($dsn,"postgres","curso");
//var_dump($conn);
//prepare
$sql = 'CALL public.sp_delete_productos(?)';
$stmt = $conn->prepare($sql);

$id = $_POST['id'];
//bindParameter
$stmt->bindParam(1, $id);
//execute
$stmt->execute();
//mostrar
echo ("<p>REGISTRO ELIMINADO</p>");
header('location:index.php');