<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Perseo - Mi página personal</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-primary">
            <div>
                <h1>PERSEO</h1>
                <h3>Cursos online para profesionales</h3>
            </div>
            <div>
            <?php

$email = $_POST['email'];
$password1 = $_POST['password1'];


$conexion = mysqli_connect("localhost", "root", "", "perseo");
$consulta = "SELECT * FROM usuarios where email = '$email' and password1 = '$password1'";
$resultLogin = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultLogin);

if($filas>0){

    while($row=mysqli_fetch_row($resultLogin)){
    echo "Hola <Strong>" . $row[2] . "</strong>, estás en tu página personal<br>";
    echo "<a class='btn btn-warning' role='button' href='./index.php'>Finalizar sesión</a>";
    
    } 
    
}else{
         echo "Usuario o contraseña no coincide<br>"; 
         echo "<a class='btn btn-warning' role='button' href='./login.php'>Vuelve a intentarlo</a>";
     }
     
    




mysqli_free_result($resultLogin);
mysqli_close($conexion);
?>        

        </div>
    </nav>
</header>