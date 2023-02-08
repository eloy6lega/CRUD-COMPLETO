<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Consultas</title>

    <style>
        body{
           
        }
        .tabla{
            background-color: lightgreen;
            margin: 0 auto;
            text-align: center;
            line-height: 50px;
            margin-top: 30px;
        }
        a{
        border-radius: 5px;
        padding: 10px 7px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        margin: 47%;
        }
    </style>

</head>
<body>
    
<a href="index.html" target="_blank">INICIO</a>

<?php
    $dsn = "pgsql:host=localhost;dbname=postgres";
    $conn = new PDO($dsn,"postgres","curso");
    //consulta
    $consulta="select * from public.productos"; 
    $resultados->prepare($conn,$consulta);
    //var_dump($resultado);
    echo ('<div class="tabla">');
    echo ('<table class="table table-bordered border-primary">');
    echo ('<thead>');
    echo("<th>NOMBRE</th>");
    echo("<th>UNIDADES</th>");
    echo ('</thead>');
    while($row = pg_fetch_object($resultados)){
        echo ('<tr>');
        echo("<td>".$row->nombre."</td>");
        echo("<td>".$row->unidades."</td>");
        echo ('</tr>');
    }
    echo ('</table>');
    echo ('</div>');
?>
</body>
</html>