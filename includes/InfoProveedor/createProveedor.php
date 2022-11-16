<?php 
include '../../db-conn/db_conn.php';

if(isset($_POST{'addProveedor'})){
    $id=$_POST['id'];
    $nombre=$_POST['nomProv'];
    $documento = $_POST['docProv'];
    $correo=$_POST['emailProv'];
    $direccion=$_POST['dirProv'];
    $telefono=$_POST['telProv'];
    $nit=$_POST['nitProv'];
    $prod=$_POST['prodProv'];
    $desc=$_POST['descEmp'];

    $create="INSERT INTO info_proveedor (id, Nom_Proveedor,	Doc_Proveedor, Email_Proveedor,	Dir_Proveedor, Tel_Proveedor, Nit_Proveedor, Producto_Proveedor, Desc_Empresa) VALUES ('$id', '$nombre', '$documento', '$correo', '$direccion', '$telefono', '$nit', '$prod', '$desc')";

    if(mysqli_query($connect, $create)){
        header('Location: ../../InfoProveedor.php');
    }
 }
