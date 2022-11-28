<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from clientes";
$resultado = $conn->query($sql);
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>tables</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-hover table-bordered table-responsive">
            <?php
            while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row["dni"] ?></td>
                <td><?= $row["nombre"] ?></td>
                <td><?= $row["apellidos"] ?></td>
                <td><a class="btn btn-primary" href="delete.php?dni=<?= $row["dni"] ?>">delete</a></td>
                <?php } ?>
            </tr>
        </table>
        <a href="formolarioFactura.html">Nuevo</a>
    </div>

</body>

</html>
<?php $conn->close(); ?>