<?php include_once "headerHome.php"; ?>

<main>
    

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="adminCreate.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Nombre del curso" class="form-label">Nombre del curso:</label>
                    <input type="text" class="form-control" name="courseName">
                </div>
                <div class="mb-3">
                    <label for="Imagen" class="form-label" >Imagen:</label>
                    <input type="file" class="form-control-file" name="image">
                    <div class="form-text">Sube una imagen en formato JPG o PNG</div>
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">Precio:</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <button type="submit" class="btn btn-warning" name="save">Enviar</button>
            </form>
        </div>

        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Precio</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "perseo");
                    $query = "SELECT * from cursos";
                    $resultado = mysqli_query($conexion, $query);
                    while($row = mysqli_fetch_array($resultado)){ ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['imagen']; ?></td>
                            <td><?php echo $row['precio']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg></a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg></a></td>
                                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>    
</div>



</main>

    
    
<?php include_once 'footer.php';  ?>;