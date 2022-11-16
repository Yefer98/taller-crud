<?php
include '../../db-conn/db_conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM info_cliente WHERE id = $id";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $nombre = $row['Nom_Cliente'];
        $documento = $row['Doc_Cliente'];
        $correo = $row['Email_Cliente'];
        $direccion = $row['Dir_Cliente'];
        $telefono = $row['Tel_Cliente'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre = $_POST['nomCliente'];
    $documento = $_POST['docCliente'];
    $correo = $_POST['emailCliente'];
    $direccion = $_POST['dirCliente'];
    $telefono = $_POST['telCliente'];

    $update = "UPDATE info_cliente SET id = '$id',Nom_Cliente = '$nombre',Doc_Cliente = '$documento',Email_Cliente = '$correo',Dir_Cliente = '$direccion',Tel_Cliente = '$telefono' WHERE id = $id";
    mysqli_query($connect, $update);
    header('Location: ../../InfoCliente.php');
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
    <div class="title"><h1>Modificación Información Clientes</h1></div>
        <div class="container">
            <div class="form">
                <form name="form" action="updateCliente.php?id=<?= $_GET['id'] ?>" method="post">
                    <input id="nomCliente" name="nomCliente" type="text" placeholder="Nombre Cliente" value="<?php echo $nombre ?>">
                    <input id="docCliente" name="docCliente" type="text" placeholder="Documento Cliente" value="<?php echo $documento ?>">
                    <input id="emailCliente" name="emailCliente" type="text" placeholder="Correo Cliente" value="<?php echo $correo ?>">
                    <input id="dirCliente" name="dirCliente" type="text" placeholder="Dirección Cliente" value="<?php echo $direccion ?>">
                    <input id="telCliente" name="telCliente" type="text" placeholder="Telefono Cliente" value="<?php echo $telefono ?>">
                    <div class="tcont">
                    <input id="update" name="update" type="submit" value="Actualizar Cliente" class="b">
                    <a href="../../InfoCliente.php"><input class="b b2" type="button" value="Cancelar"></a>
                    </div>
                </form>
            </div>
        </div>    
</body>
</html>