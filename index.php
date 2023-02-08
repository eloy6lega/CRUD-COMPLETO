<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>| MENÚ |</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form.html">Añadir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./views/consultar.php">Consultar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="update.html">Actualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="delete.html">Eliminar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>GESTIÓN DE PRODUCTOS</h1>


    <?php
    $dsn = "pgsql:host=localhost;dbname=postgres";
    $conn = new PDO($dsn,"postgres","curso");
    //consulta

    $consulta = "select * from public.productos";
    # Preparar sentencia e indicar que vamos a usar un cursor
    $sentencia = $conn->query($consulta);
    $arrDatos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table   class="table table-bordered">
    <th class="bg-primary" scope="col">Id</th>
    <th class="bg-primary" scope="col">producto</th>
    <th class="bg-primary" scope="col">Unidades</th>
    
    <?php

   /* var_dump($busqueda);*/
   foreach ($arrDatos as $muestra) {
    echo '<tr>';

    echo '<td >' . $muestra['id'] . '</td>';
    echo '<td >' . $muestra['nombre'] . '</td>';
    echo '<td >' . $muestra['unidades'] . '</td>';
    echo ' </tr>';

}
?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>