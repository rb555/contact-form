<?php
session_start();
session_destroy();
header("Location: clientes.php#contenido");
?>