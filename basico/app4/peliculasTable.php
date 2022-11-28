<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from peliculas";
$resultado = $conn->query($sql);
?>
<html>

<head>
    <title>tables</title>
</head>

<body>
    <table border="1px solid black">
        <?php
        while ($row = $resultado->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row["isbn"] ?></td>
            <td><?= $row["titulo"] ?></td>
            <td><?= $row["director"] ?></td>
            <td><?= $row["duracion"] ?></td>
            <?php } ?>
        </tr>
    </table>
</body>

</html>
<?php $conn->close(); ?>