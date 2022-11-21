<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Productos</h1></div>
    <div class="container">
        <div class="form">
            <h1>REGISTRO PRODUCTO</h1>
            <form id="form" name="form" action="includes/InfoProducto/createProducto.php" method="post">
                <input id="codRef" name="codRef" type="text" placeholder="Codigo de Referencia" required>
                <p id="pcod"></p>
                <input id="cantProd" name="cantProd" type="text" placeholder="Cantidad de Productos" required>
                <p id="pcant"></p>
                <input id="valProd" name="valProd" type="text" placeholder="Valor Productos" required>
                <p id="pval"></p>
                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre Producto" required>
                <p id="pnom"></p>
                <input id="addProd" name="addProd" type="submit" value="Agregar Producto" class="b">
                <p id="adv"></p>
            </form>
        </div>
        <div class="info">
            <table>
                <thead>
                    <tr>
                        <th>Codigo Referencia</th>
                        <th>Cantidad Productos</th>
                        <th>Valor Productos</th>
                        <th>Nombre Producto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            include 'db-conn/db_conn.php';
                            $read="SELECT *FROM info_producto";
                            $resultado=mysqli_query($connect, $read);
                            while($row = mysqli_fetch_array($resultado)){
                                ?> 
                    <tr>
                        <td><?php echo $row['Cod_Referencia'] ?></td>
                        <td><?php echo $row['Cant_Productos'] ?></td>
                        <td><?php echo $row['Valor_Productos'] ?></td>
                        <td><?php echo $row['Nom_Producto'] ?></td>
                        <td><a href="includes/InfoProducto/updateProducto.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-file-pen"></i></a><a href="includes/InfoProducto/deleteProducto.php?id=<?= $row['id'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="./js/validacionProducto.js"></script>
<?php include 'includes/footer.php' ?>