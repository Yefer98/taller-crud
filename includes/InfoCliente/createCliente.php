<?php 
include '../../db-conn/db_conn.php';

if(isset($_POST{'addCliente'})){
    $id=$_POST['id'];
    $nombre=$_POST['nomCliente'];
    $documento = $_POST['docCliente'];
    $correo=$_POST['emailCliente'];
    $direccion=$_POST['dirCliente'];
    $telefono=$_POST['telCliente'];

    $create="INSERT INTO info_cliente (id, Nom_Cliente,	Doc_Cliente, Email_Cliente,	Dir_Cliente, Tel_Cliente) VALUES ('$id', '$nombre', '$documento', '$correo', '$direccion', '$telefono')";

    if(mysqli_query($connect, $create)){
        header('Location: ../../InfoCliente.php');
    }
 }
