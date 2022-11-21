<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from facturas";
$resultado = $conn->query($sql);
?>

<html>

<body>
    <table border="1px solid black">
        <?php while ($fila = $resultado->fetch_assoc()) { ?>

        <tr>
            <td><?= $fila["numeros"] ?></td>
            <td><?= $fila["concepto"] ?></td>
            <td><?= $fila["importe"] ?></td>
            <td><?= $fila["empresa"] ?></td>
        </tr>
        <tr>

            <?php } ?>

    </table>
    <a href="formolarioFactura.html">nuevo</a>
    <a href="deleteFactura.html">delete</a>
    <a href="updateFactura.html">Update</a>
</body>

</html>
<?php $conn->close(); ?>