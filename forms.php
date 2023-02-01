<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exercise_Ninja</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            echo("Ton nom est : " . $_POST['firstname'] . "<br>");
            echo("Ta couleur est : " . $_POST['color'] . "<br>");
        ?>
    </body>
</html>