<?php 
include '../../db-conn/db_conn.php';

if(isset($_POST{'addProd'})){
    $id=$_POST['id'];
    $referencia=$_POST['codRef'];
    $cantidad=$_POST['cantProd'];
    $valor=$_POST['valProd'];
    $nombre=$_POST['nomProd'];


    $create="INSERT INTO info_producto (id, Cod_Referencia,	Cant_Productos, Valor_Productos, Nom_Producto) VALUES ('$id', '$referencia', '$cantidad', '$valor', '$nombre')";

    if(mysqli_query($connect, $create)){
        header('Location: ../../InfoProducto.php');
    }
 }
