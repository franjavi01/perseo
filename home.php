<?php require_once 'headerHome.php';  ?>

<?php

$email = $_POST['email'];
$password1 = $_POST['password1'];

$conexion = mysqli_connect("localhost", "root", "", "perseo");
$consulta = "SELECT * FROM usuarios WHERE email = '$email' and password1= '$password1'";
$resultLogin = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultLogin);

if ($filas>0)
{
    echo "Hola <strong>" . $nombre . "</strong>, estás en tu página personalizada<br>"
?>
<a href='./index.php'>Finalizar sesión</a>
<?php
    echo  "<hr>";
    echo  "<p>estos son los cursos en los que estas inscritos</p>";
} else {
    echo "Email o contraseña no coincide<br>" 
?>
    <a href='./login.php'>Vuelve a intentarlo</a>
<?php } 

mysqli_free_result($resultLogin);
mysqli_close($conexion);
?>



<?php require_once 'footer.php';  ?>



