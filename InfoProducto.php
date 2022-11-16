<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Productos</h1></div>
    <div class="container">
        <div class="form">
            <form name="form" action="" method="post">
                <input id="codRef" name="codRef" type="text" placeholder="Codigo de Referencia">
                <input id="cantProd" name="cantProd" type="text" placeholder="Cantidad de Productos">
                <input id="valProd" name="valProd" type="text" placeholder="Valor Productos">
                <input id="nomProd" name="nomProd" type="text" placeholder="Nombre Producto">
                <input id="addProd" name="addProd" type="submit" value="Agregar Producto" class="b">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a><a href=""><i class="fa-solid fa-file-pen"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>