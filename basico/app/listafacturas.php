<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso2";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from facturas";
////////////filter
if (!empty($_GET["concepto"])) {
    echo $_GET["concepto"];
    $sql = $sql . " where concepto='" . $_GET["concepto"] . "' ";
}
////////////orden
if (!empty($_GET["orden"])) {
    echo $_GET["orden"];
    $sql = $sql . " order by " . $_GET["orden"];
}
echo "sql del listado :<b>" . $sql . "</b>";
$resultado = $conn->query($sql);

?>

<html>

<head>
    <link rel="stylesheet" href="styles/tableFactura.css">
</head>

<body>
    <table border="1px solid black">
        <tr>
            <form action="">
                <th colspan="3" style="background-color: aliceblue;">
                    Concepto:<?php if (!empty($_GET["concepto"])) { ?>
                    <input type="text" value="<?= $_Get["concepto"] ?>" name="concepto">
                    <?php } else { ?>
                    <input type="text" name="concepto"><?php } ?>
                </th>
                <th style="background-color: aliceblue;"><input type="submit" value="fitrar"></th>
            </form>

        </tr>
        <tr>
            <th style="background-color: aliceblue;"><a href="?orden=numeros">Numero</a></th>
            <th style="background-color: aliceblue;"><a href="?orden=concepto">Concepto</a> </th>
            <th style="background-color: aliceblue;"><a href="?orden=importe">Importe</a> </th>
        </tr>


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
        if (!empty($_GET["concepto"])) {
            echo $_GET["concepto"];
            $sql2 = $sql2 . " where concepto='" . $_GET["concepto"] . "' ";
        }
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