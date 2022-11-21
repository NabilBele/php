<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso2";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from phones";
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
            <td><?= $fila["company"] ?></td>
            <td><?= $fila["price"] ?></td>
            <td><?= $fila["model"] ?></td>
            <td><a href="delete.php?model=<?= $fila["model"] ?>">Delete</a></td>
        </tr>


        <?php } ?>

    </table>
    <div class="btnDiv"> <a class="add" href="formolarioFactura.html">nuevo</a>
        <a class="update" href="updateFactura.html">Update</a>
    </div>



</body>

</html>
<?php $conn->close(); ?>