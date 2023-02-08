<?php

//conexion - dsn
$dsn = "pgsql:host=localhost;dbname=postgres";
$conn = new PDO($dsn,"postgres","curso");
//var_dump($conn);
//prepare
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$unidades = $_POST['unidades'];

$sql = 'CALL public.sp_update_productos(?,?,?)';
$stmt = $conn->prepare($sql);
//bindParameter
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $nombre);
$stmt->bindParam(3, $unidades);
//execute
$stmt->execute();
//mostrar
echo ("<p>REGISTRO ACTUALIZADO</p>");
header('location:index.php');