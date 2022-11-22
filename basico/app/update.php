<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curso2";
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
    $num = $_GET["numero"];
    $con = $_GET["concepto"];
    $imp = $_GET["importe"];
    ?>factura numero <?php echo $num ?> <br>
    concepto es <?php echo $con ?><br>
    importe es <?php echo $imp ?><br>
    <?phP

    //$sql="Update"
    $sql = "update facturas set concepto = '$con',importe = '$imp'  where numeros = $num;";
    echo $sql;
    ?>
    <?php
    // Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_query($conn, $sql)) {
        header("location:listafacturas.php");
    } else {
        echo  "ha petado todo" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>