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

    <?phP

    //$sql="insert into facturas values (1,'ordenador',200);"
    $sql = "delete from facturas where numeros =" . $_GET["numeros"];
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