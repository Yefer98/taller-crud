<?php
include '../../db-conn/db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = "DELETE FROM info_proveedor WHERE id = $id";

    if (mysqli_query($connect, $delete)){
        $_SESSION['message'] = 'Registro borrado exitosamente';
        $_SESSION['message_type'] = 'danger';
        header('Location: ../../InfoProveedor.php');
    }else{
        echo "Error al borrar registro: " , mysqli_error($connect);
    }
}