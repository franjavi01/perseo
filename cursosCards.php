<div class="container-fluid">
    <div Class="row row-cols-1 row-cols-md-3 g-4">

        <?php
        include_once "conexionBaseDatos.php";
        $conexion = mysqli_connect("localhost", "root", "", "perseo");
        if (!$conexion) {
            echo "error al conectar con la base de datos";
        }
         $sql = "SELECT * FROM cursos";
         $resultSet = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($resultSet)){

         
        ?>
        <div class="card" style="width: 25em; margin-left: 2em; background-color: #47E84F;">
            
            <img class="card-img-top" style="height: 15em;" src="<?php echo $row[2] ?>" alt="<?php echo $row[1] ?>">
            <div class="card-body">
                <center><h1><strong><?php echo $row[1] ?></strong></h1></center>
                <center><h2><?php echo $row[3] ?>€</h2></center>
                <center><a class="btn btn-primary" role="button" href="" target="_blank" rel="noopener noreferrer">INSCRÍBETE</a></center>
            </div>
        </div>
        
            <?php } ?>
    </div>
</div>
<br>