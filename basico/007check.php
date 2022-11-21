<!DOCTYPE html>

<html>

<body>
    Soy informatico ?
    <?php if (!empty($_GET["informacion"])  and $_GET["informacion"] =="on"){?>
    Si soy informatico
    <?php } else { ?>
    no lo se
    <?php } ?>
</body>

</html>