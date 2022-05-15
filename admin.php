<?php

include "conexionBaseDatos.php";
$conexion = mysqli_connect("localhost", "root", "", "perseo");
$sql = "SELECT * FROM cursos";
$query = mysqli_query($conexion, $sql);
// $row = mysqli_array_fetch($query);

?>

<?php include_once "headerHome.php"; ?>

<main>
    <h2>Introduce el nombre del curso</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="curso" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label" >Imagen:</label>
            <input type="file" class="form-control-file" name="imagen">
            <div class="form-text">Sube una imagen en formato JPG o PNG</div>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" class="form-control" name="precio">
        </div>
        <button type="submit" class="btn btn-warning" name="guardar">Enviar</button>
    </form>

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
        
            <?php while($row=mysqli_fetch_row($query)){ ?> 
            <td><?php echo $row['curso']; ?></td>
            <td><?php echo $row['imagen']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <?php } ?>
            <td>Editar</td>
            <td>Borrar</td>
            </tr>
        </tbody>
    </table>



    </main>

    
    
<?php include_once 'footer.php';  ?>;