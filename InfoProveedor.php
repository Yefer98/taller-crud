<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Proveedores</h1></div>
    <div class="container">
        <div class="form">
            <form name="form" action="" method="post">
                <input id="nomCliente" name="nomCliente" type="text" placeholder="Nombre Cliente">
                <input id="docCliente" name="docCliente" type="text" placeholder="Documento Cliente">
                <input id="emailCliente" name="emailCliente" type="text" placeholder="Correo Cliente">
                <input id="dirCliente" name="dirCliente" type="text" placeholder="Dirección Cliente">
                <input id="telCliente" name="telCliente" type="text" placeholder="Telefono Cliente">
                <input id="addCliente" name="addCliente" type="submit" value="Agregar Cliente" class="b">
            </form>
        </div>
        <div class="info">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>