<?php

$conexion = mysqli_connect("localhost", "root", "", "perseo");

if (isset(($_POST['save']))){
    $courseName = $_POST['courseName'];
    $image = $_FILES['image'];
    $price = $_POST['price'];
    
    $query = "INSERT INTO cursos (nombre, imagen, precio) VALUES ('$courseName', '$image', '$price')";
    $resultado = mysqli_query ($conexion, $query);

    if(isset($conexion)){
        echo "Conectado a la base de datos";
    }

    if(!$resultado){
        echo " pero no esta guardando los datos";
    }else{
        header ("Location: home.php");
    }

}


