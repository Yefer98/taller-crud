<?php
include '../../db-conn/db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM info_producto WHERE id = $id";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $referencia = $row['Cod_Referencia'];
        $cantidad = $row['Cant_Productos'];
        $valor = $row['Valor_Productos'];
        $nombre = $row['Nom_Producto'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $referencia = $_POST['codRef'];
    $cantidad = $_POST['cantProd'];
    $valor = $_POST['valProd'];
    $nombre = $_POST['nomProd'];

    $update = "UPDATE info_producto SET id = '$id',Cod_Referencia = '$referencia',Cant_Productos = '$cantidad',Valor_Productos = '$valor',Nom_Producto = '$nombre' WHERE id = $id";
    mysqli_query($connect, $update);
    header('Location: ../../InfoProducto.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://kit.fontawesome.com/b3cf50ed6d.js" crossorigin="anonymous"></script>
    <title>Taller-CRUD_php</title>
</head>
<body>
    <nav class="menu">
        <h1>Lociones Angelica</h1>
        <div class="link">
            <a href="../../index.php">Inicio</a>
            <a href="../../InfoCliente.php">Información Clientes</a>
            <a href="../../InfoProducto.php">Información Productos</a>
            <a href="../../InfoProveedor.php">Información Proveedores</a>
        </div>
    </nav>
    <div class="title"><h1>Modificación Información Productos</h1></div>
    <div class="container">
        <div class="form">
            <form name="form" action="updateProducto.php?id=<?= $_GET['id'] ?>" method="post">
                <input id="codRef" name="codRef" type="text" placeholder="Codigo de Referencia" value="<?php echo $referencia ?>">
                <input id="cantProd" name="cantProd" type="text" placeholder="Cantidad de Productos" value="<?php echo $cantidad ?>">
                <input id="valProd" name="valProd" type="text" placeholder="Valor Productos" value="<?php echo $valor ?>">
                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre Producto" value="<?php echo $nombre ?>">
                <div class="tcont">
                <input id="update" name="update" type="submit" value="Actualizar Producto" class="b">
                <a href="../../InfoProducto.php"><input class="b b2" type="button" value="Cancelar"></a>
                </div>
            </form>
        </div>
    </div>   
</body>
</html>