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
        <?php
        $sql2 = "select sum(importe) as suma from facturas";
        $resultado2 = $conn->query($sql2);
        $filaResultado2 = $resultado2->fetch_assoc(); ?>
        <tr>
            <td colspan="2">total: </td>
            <td><?= $filaResultado2["suma"] ?></td>
            <td>Euros</td>
        </tr>


    </table>
    <div class="btnDiv"> <a class="add" href="formolarioFactura.html">nuevo</a>
        <a class="update" href="updateFactura.html">Update</a>
    </div>



</body>

</html>
<?php $conn->close(); ?>