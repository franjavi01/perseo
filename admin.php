<?php include_once "headerHome.php"; ?>

<main>
    <h2>Introduce el nombre del curso</h2>
    <?php
        // if(isset($_REQUEST['guardar'])){
        //     if(isset($_FILES['imagen']['nombre']['precio'])){
        //         $nombre=$_FILES['nombre']['imagen'];
        //         $precio=$_FILES['precio']['imagen'];
        //         $imagenSubida=fopen($_FILES['imagen']['tmp_name'],'r');
        //         $binariosImagen=fread($imagenSubida);
        //         include_once "conexionBaseDatos.php";
        //         $conexxion=mysqli_connect("localhost", "root", "", "perseo");
        //         $binariosImagen=mysqli_escape_string($conexion,$binariosImagen);
        //         $query="INSERT INTO cursos (nombre,imagen,precio) values '$nombre, '$imagen, '$precio'";
        //     }
        // }
    ?>
    <form action="./adminCrud.php" method="post" enctype="multipart/form-data">
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
</main>

<?php require_once 'footer.php';  ?>
