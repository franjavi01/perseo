<?php include_once "headerHome.php"; ?>

<main>
    <h2>Introduce el nombre del curso</h2>
    <form action="./adminCrud.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="curso" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <input type="file" class="form-control">
            <div class="form-text">Sube una imagen en formato JPG o PNG</div>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning">Enviar</button>
    </form>
</main>

<?php require_once 'footer.php';  ?>
