<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoclub";
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = $_GET["dni"];
    $con = $_GET["nombre"];
    $imp = $_GET["apellidos"];
    ?>factura numero <?php echo $num ?> <br>
    concepto es <?php echo $con ?><br>
    importe es <?php echo $imp ?><br>
    <?phP

    //$sql="insert into facturas values (1,'ordenador',200);"
    $sql = "insert into Clientes (dni,nombre,apellidos) values ("
        . $_GET["dni"] .
        ",'" . $_GET["nombre"] . "','" . $_GET["apellidos"] . "'" . ");";
    echo $sql;
    ?>
    <?php
    // Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_query($conn, $sql)) {
        header("location:clientesTable.php");
    } else {
        echo  "ha petado todo" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>