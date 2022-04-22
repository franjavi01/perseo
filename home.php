<?php require_once 'headerHome.php';  ?>

<?php
        include_once "conexionBaseDatos.php";
        $conexion = mysqli_connect("localhost", "root", "", "perseo");
        if (!$conexion) {
            echo "error al conectar con la base de datos";
        }
         $sql = "SELECT * FROM usuarios";
         $resultSet = mysqli_query($conexion,$sql);
        if($row=mysqli_fetch_row($resultSet) && $row[7] = 1){
            require_once 'admin.php';
        }elseif ($row=mysqli_fetch_row($resultSet) && $row[7] = 2) {
            require_once 'client.php';
        }

   
    
                
            
            
    
?>

<?php require_once 'footer.php';  ?>



