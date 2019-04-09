<?php  
require_once 'conexion.php';

$Username = $_POST ['Username'];
$Password = $_POST ['pass'];


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO libros (Username,Passwor) VALUES ('$Username', '$Password')";
   
    if (!mysqli_query($conn, $sql)) {
        $_SESSION['message'] = 'Error al enviar los datos';
        $_SESSION['message_type'] = 'danger';

        header('Location: libros.php');
       
    }else {

    $_SESSION['message'] = 'Datos enviados de forma exitosa';
    $_SESSION['message_type'] = 'success';
   

    header('Location: libros.php');

}
}
?>