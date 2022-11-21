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

<head>
    <link rel="stylesheet" href="styles/tableFactura.css">
</head>

<body>
    <table border="1px solid black">
        <?php while ($fila = $resultado->fetch_assoc()) { ?>

        <tr>
            <td><?= $fila["numeros"] ?></td>
            <td><?= $fila["concepto"] ?></td>
            <td><?= $fila["importe"] ?></td>
            <td><a href="delete.php?numeros=<?= $fila["numeros"] ?>">Delete</a></td>
        </tr>


        <?php } ?>

    </table>
    <a href="formolarioFactura.html">nuevo</a>
    <a href="updateFactura.html">Update</a>


</body>

</html>
<?php $conn->close(); ?>