<html>
    <body>
<?php 
$num1=$_GET["numero1"];
$num2=$_GET["numero2"];
$sum=$num1+$num2;

if($num1>$num2){
    echo "$num1 es el Mayor";
}else{
    echo "$num2 es el Mayor";
}
?>

</body>
</html> 