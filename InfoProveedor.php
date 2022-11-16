<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Proveedores</h1></div>
    <div class="container contain">
        <div class="form">
            <form name="form" action="" method="post">
                <input id="nomProv" name="nomProv" type="text" placeholder="Nombre Proveedor">
                <input id="docProv" name="docProv" type="text" placeholder="Documento Proveedor">
                <input id="emailProv" name="emailProv" type="text" placeholder="Correo Proveedor">
                <input id="dirProv" name="dirProv" type="text" placeholder="Dirección Proveedor">
                <input id="telProv" name="telProv" type="text" placeholder="Teléfono Proveedor">
                <input id="nitProv" name="nitProv" type="text" placeholder="Nit Proveedor">
                <input id="prodProv" name="prodProv" type="text" placeholder="Producto Proveedor">
                <textarea id="descEmp" name="descEmp" type="text" cols="40"
                rows="5" placeholder="Descripción Empresa"></textarea>
                <input id="nitProv" name="nitProv" type="submit" value="Agregar Proveedor" class="b">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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