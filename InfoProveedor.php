<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Proveedores</h1></div>
    <div class="container contain">
        <div class="form">
            <form name="form" action="includes/InfoProveedor/createProveedor.php" method="post">
                <input id="nomProv" name="nomProv" type="text" placeholder="Nombre Proveedor">
                <input id="docProv" name="docProv" type="text" placeholder="Documento Proveedor">
                <input id="emailProv" name="emailProv" type="text" placeholder="Correo Proveedor">
                <input id="dirProv" name="dirProv" type="text" placeholder="Dirección Proveedor">
                <input id="telProv" name="telProv" type="text" placeholder="Teléfono Proveedor">
                <input id="nitProv" name="nitProv" type="text" placeholder="Nit Proveedor">
                <input id="prodProv" name="prodProv" type="text" placeholder="Producto Proveedor">
                <textarea id="descEmp" name="descEmp" type="text" cols="40"
                rows="5" placeholder="Descripción Empresa"></textarea>
                <input id="addProveedor" name="addProveedor" type="submit" value="Agregar Proveedor" class="b">
            </form>
        </div>
        <div class="info2">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Nit</th>
                        <th>Producto</th>
                        <th>Descripción empresa</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            include 'db-conn/db_conn.php';
                            $read="SELECT *FROM info_proveedor";
                            $resultado=mysqli_query($connect, $read);
                            while($row = mysqli_fetch_array($resultado)){
                                ?> 
                    <tr>
                        <td><?php echo $row['Nom_Proveedor'] ?></td>
                        <td><?php echo $row['Doc_Proveedor'] ?></td>
                        <td><?php echo $row['Email_Proveedor'] ?></td>
                        <td><?php echo $row['Dir_Proveedor'] ?></td>
                        <td><?php echo $row['Tel_Proveedor'] ?></td>
                        <td><?php echo $row['Nit_Proveedor'] ?></td>
                        <td><?php echo $row['Producto_Proveedor'] ?></td>
                        <td><?php echo $row['Desc_Empresa'] ?></td>
                        <td><a href=""><i class="fa-solid fa-file-pen"></i></a><a href="includes/InfoProveedor/deleteProveedor.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>