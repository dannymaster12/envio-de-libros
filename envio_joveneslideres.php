<?php  
require_once 'conexion.php';

$user = $_POST['user_name'];
$Cedula = $_POST ['user_cedula'];
$Edad = $_POST ['user_Edad'];
$telefono = $_POST ['user_Telefono'];
$Email = $_POST ['user_Email'];
$Ciudad = $_POST ['user_Ciudad'];
$lider = $_POST ['user_lideres'];


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO joveneslideres (Nombre_y_apellido, cedula, Edad, telefono, Email, ciudad, lider) VALUES ('$user', '$cedula','$Edad','$Email','$telefono','$Ciudad','$lider')";

    if (!mysqli_query($conn, $sql)) {
        $_SESSION['message'] = 'Error al enviar los datos';
        $_SESSION['message_type'] = 'danger';

        header('Location: joveneslideres.php');
       
    }else {

    $_SESSION['message'] = 'Datos enviados de forma exitosa';
    $_SESSION['message_type'] = 'success';
   

    header('Location: joveneslideres.php');

}
}

?>

