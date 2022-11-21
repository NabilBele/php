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
    $sql = "delete from table1 where model =" . $_GET["model"];
    echo $sql;
    ?>
    <?php
    // Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_query($conn, $sql)) {
        header("location:table.php");
    } else {
        echo  "ha petado todo" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>