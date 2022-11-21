<html>

<body>
    <table border="1px solid black">
        <tr>
            <th>multiplicacion</th>
        </tr>

        <?php for($i=1;$i<=10;$i++) {?>
        <tr>
            <td style="padding: 5px;"><?=($i*$_GET["numero1"])?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>