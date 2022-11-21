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

    <?php while ($fila = $resultado->fetch_assoc()) { ?>


    <p><?= $fila["numeros"] ?>
        <?= $fila["concepto"] ?>
        <?= $fila["importe"] ?>
        <a href="delete.php?numeros=<?= $fila["numeros"] ?>">Delete</a>
    </p>


    <?php } ?>


    <div class="btnDiv"> <a class="add" href="formolarioFactura.html">nuevo</a>
        <a class="update" href="updateFactura.html">Update</a>
    </div>



</body>

</html>
<?php $conn->close(); ?>