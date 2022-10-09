
<?php
session_start();
$correo_session = $_POST['correo'];
$password_session = $_POST['pw'];

if($correo_session == 'cliente@gmail.com' && $password_session == 'phpintermedio'){
    $_SESSION['clientes']= $correo_session;
    header("Location: clientes.php#contenido");
} else {
    header("Location: clientes.php?error_s#contenido");
}
?>
