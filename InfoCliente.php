<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Clientes</h1></div>
    <div class="container">
        <div class="form">
            <form name="form" action="includes/InfoCliente/createCliente.php" method="post">
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            include 'db-conn/db_conn.php';
                            $read="SELECT *FROM info_cliente";
                            $resultado=mysqli_query($connect, $read);
                            while($row = mysqli_fetch_array($resultado)){
                                ?> 
                    <tr>
                        <td><?php echo $row['Nom_Cliente'] ?></td>
                        <td><?php echo $row['Doc_Cliente'] ?></td>
                        <td><?php echo $row['Email_Cliente'] ?></td>
                        <td><?php echo $row['Dir_Cliente'] ?></td>
                        <td><?php echo $row['Tel_Cliente'] ?></td>
                        <td><a href=""><i class="fa-solid fa-trash"></i></a><a href=""><i class="fa-solid fa-file-pen"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>