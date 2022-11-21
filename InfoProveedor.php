<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Proveedores</h1></div>
    <div class="container contain">
        <div class="form">
            <h1>REGISTRO PROVEEDOR</h1>
            <form id="form" name="form" action="includes/InfoProveedor/createProveedor.php" method="post">
                <input id="nomProv" name="nomProv" type="text" placeholder="Nombre Proveedor" required>
                <p id="pnom"></p>
                <input id="docProv" name="docProv" type="text" placeholder="Documento Proveedor" required>
                <p id="pdoc"></p>
                <input id="emailProv" name="emailProv" type="text" placeholder="Correo Proveedor" required>
                <p id="pemail"></p>
                <input id="dirProv" name="dirProv" type="text" placeholder="Dirección Proveedor">
                <p id="pdir"></p>
                <input id="telProv" name="telProv" type="text" placeholder="Teléfono Proveedor">
                <p id="ptel"></p>
                <input id="nitProv" name="nitProv" type="text" placeholder="Nit Proveedor" required>
                <p id="pnit"></p>
                <input id="prodProv" name="prodProv" type="text" placeholder="Producto Proveedor" required>
                <p id="pprod"></p>
                <textarea id="descEmp" name="descEmp" type="text" cols="40"
                rows="5" placeholder="Descripción Empresa"></textarea>
                <p id="pdesc"></p>
                <input id="addProveedor" name="addProveedor" type="submit" value="Agregar Proveedor" class="b">
                <p id="adv"></p>
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
                        <td><a href="includes/InfoProveedor/updateProveedor.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-file-pen"></i></a><a href="includes/InfoProveedor/deleteProveedor.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="js/validacionProveedor.js"></script>
<?php include 'includes/footer.php' ?>