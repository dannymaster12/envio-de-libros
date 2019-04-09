<?php  
require_once 'conexion.php';

$user = $_POST['user_name'];
$Documento = $_POST ['user_Documento'];


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO formulario (Nombre_y_apellido, Documento) VALUES ('$user', '$Documento')";

    if (!mysqli_query($conn, $sql)) {
        $_SESSION['message'] = 'Usuario ya existe';
        $_SESSION['message_type'] = 'danger';

        header('Location: formulario.php');
       
    }else {

    $_SESSION['message'] = 'Datos enviados de forma exitosa';
    $_SESSION['message_type'] = 'success';
   

    header('Location: formulario.php');

}
}

?>

