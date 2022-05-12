<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$conexion = mysqli_connect("localhost", "root", "", "perseo");

if (!$conexion) {
    echo '<script>alert("error al conectar con la base de datos");window.location.href="./"</script>';
}

$nombre = $_POST['nombre'];
$imagen = $_POST['imagen'];
$precio = $_POST['precio'];

$insert = "INSERT INTO cursos (nombre, imagen, precio) VALUES ('$nombre', '$imagen', '$precio')";

$resulSet = mysqli_query($conexion, $insert);

$filas = mysqli_num_rows($resultSet);

foreach ($filas as ['nombre'=>$nombre, 'imagen'=>$imagen, 'precio'=>$precio]) {
    ?>
    <body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Curso</th>
                <th scope="col">Imagen</th>
                <th scope="col">Precio</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $imagen; ?></td>
            <td><?php echo $precio; ?></td>
            <td>Editar</td>
            <td>Borrar</td>
            </tr>
        </tbody>
    </table>
<?php } ?>



</body>
</html>

