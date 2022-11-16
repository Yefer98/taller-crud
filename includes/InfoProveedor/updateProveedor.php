<?php
include '../../db-conn/db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM info_proveedor WHERE id = $id";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $nombre = $row['Nom_Proveedor'];
        $documento = $row['Doc_Proveedor'];
        $correo = $row['Email_Proveedor'];
        $direccion = $row['Dir_Proveedor'];
        $telefono = $row['Tel_Proveedor'];
        $nit = $row['Nit_Proveedor'];
        $prod = $row['Producto_Proveedor'];
        $desc = $row['Desc_Empresa'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre = $_POST['nomProv'];
    $documento = $_POST['docProv'];
    $correo = $_POST['emailProv'];
    $direccion = $_POST['dirProv'];
    $telefono = $_POST['telProv'];
    $nit=$_POST['nitProv'];
    $prod=$_POST['prodProv'];
    $desc=$_POST['descEmp'];

    $update = "UPDATE info_proveedor SET id = '$id',Nom_Proveedor = '$nombre',Doc_Proveedor = '$documento',Email_Proveedor = '$correo',Dir_Proveedor = '$direccion',Tel_Proveedor = '$telefono', Nit_Proveedor = '$nit', Producto_Proveedor = '$prod', Desc_Empresa = '$desc' WHERE id = $id";
    mysqli_query($connect, $update);
    header('Location: ../../InfoProveedor.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
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
    <div class="title"><h1>Modificación Información Proveedores</h1></div>
        <div class="container">
            <div class="form">
                <form name="form" action="updateProveedor.php?id=<?= $_GET['id'] ?>" method="post">
                    <input id="nomProv" name="nomProv" type="text" placeholder="Nombre Proveedor" value="<?php echo $nombre ?>">
                    <input id="docProv" name="docProv" type="text" placeholder="Documento Proveedor" value="<?php echo $documento ?>">
                    <input id="emailProv" name="emailProv" type="text" placeholder="Correo Proveedor" value="<?php echo $correo ?>">
                    <input id="dirProv" name="dirProv" type="text" placeholder="Dirección Proveedor" value="<?php echo $direccion ?>">
                    <input id="telProv" name="telProv" type="text" placeholder="Teléfono Proveedor" value="<?php echo $telefono ?>">
                    <input id="nitProv" name="nitProv" type="text" placeholder="Nit Proveedor" value="<?php echo $nit ?>">
                    <input id="prodProv" name="prodProv" type="text" placeholder="Producto Proveedor" value="<?php echo $prod ?>">
                    <textarea id="descEmp" name="descEmp" type="text" cols="40"
                    rows="5" placeholder="Descripción Empresa"><?php echo $desc ?></textarea>
                    <div class="tcont">
                    <input id="update" name="update" type="submit" value="Actualizar Proveedor" class="b">
                    <a href="../../InfoProveedor.php"><input class="b b2" type="button" value="Cancelar"></a>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
