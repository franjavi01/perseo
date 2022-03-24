<?php
        include_once "conexionBaseDatos.php";
        $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
        if (!$conexion) {
            echo "error al conectar con la base de datos";
        }
         $sql = "SELECT * FROM usuarios";
         $resultSet = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($resultSet)){

         
        ?>
<?php require_once 'header.php';  ?>
<p>Hola <?php echo $row[2] ?>, estes es tu perfil profesional</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse sint dolorum assumenda harum et ullam maiores, sunt praesentium fugit sed autem ad laborum in voluptas, consectetur maxime repellendus error quibusdam?</p>
<p>estos son los cursos en los que estas inscritos</p>
<?php require_once 'footer.php';  ?>

<?php } ?>