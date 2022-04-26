<?php require_once 'headerHome.php';  ?>

<?php
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        
        
        $conexion = mysqli_connect("localhost", "root", "", "perseo");
        $consulta = "SELECT * FROM usuarios where email = '$email'  ";
        $resultLogin = mysqli_query($conexion, $consulta);
        $filas = mysqli_fetch_array($resultLogin);
        
        
        
        if($filas['rol_id']==1){
            require_once 'admin.php';
        } else if($filas['rol_id']==2){
            require_once 'client.php';
        }

        mysqli_free_result($resultLogin);
        mysqli_close($conexion);
    
                
            
            
    
?>

<?php require_once 'footer.php';  ?>



