<?php include 'includes/header.php' ?>
<section>
    <div class="title"><h1>Información Clientes</h1></div>
    <div class="container">
        <div class="form">
            <h1>REGISTRO CLIENTE</h1>
            <form id="form" name="form" action="includes/InfoCliente/createCliente.php" method="post">
                <input id="nomCliente" name="nomCliente" type="text" placeholder="Nombre Cliente" required>
                <p id="nom"></p>
                <input id="docCliente" name="docCliente" type="text" placeholder="Documento Cliente" required>
                <p id="doc"></p>
                <input id="emailCliente" name="emailCliente" type="text" placeholder="Correo Cliente" required>
                <p id="email"></p>
                <input id="dirCliente" name="dirCliente" type="text" placeholder="Dirección Cliente">
                <p id="dir"></p>
                <input id="telCliente" name="telCliente" type="text" placeholder="Telefono Cliente">
                <p id="tel"></p>
                <input id="addCliente" name="addCliente" type="submit" value="Agregar Cliente" class="b">
                <p id="adv"></p>
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
                        <td><a href="includes/InfoCliente/updateCliente.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-file-pen"></i></a><a href="includes/InfoCliente/deleteCliente.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="js/validacionCliente.js"></script>
<?php include 'includes/footer.php' ?>