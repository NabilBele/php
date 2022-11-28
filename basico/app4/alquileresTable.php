<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from alquileres";

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
            <td><?= $row["numero"] ?></td>
            <td><?= $row["fecha"] ?></td>
            <td><?= $row["Cliente"] ?></td>
            <td><?= $row["peliculas"]  ?></td>
            <input type="button" value="Delete">
            <?php } ?>
        </tr>
    </table>
</body>

</html>
<?php $conn->close(); ?>