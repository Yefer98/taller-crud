<?php 
include '../../db-conn/db_conn.php';

if(isset($_POST{'addCliente'})){
    $id=$_POST['id'];
    $nombre=$_POST['nomCliente'];
    $documento = $_POST['docCliente'];
    $correo=$_POST['emailCliente'];
    $direccion=$_POST['dirCliente'];
    $telefono=$_POST['telCliente'];

    $create="INSERT INTO InfoCliente (id, nombre, direccion, telefono, correo) VALUES ('$id', '$nombre', '$direccion', '$telefono', '$correo')";

    if(mysqli_query($connection, $create)){
        header('Location: index.php');
    }
 }
