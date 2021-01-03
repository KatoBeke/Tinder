<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoofdpagina Tinder</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    </head>
    <body class="Homepage">

        <?php
            include_once "./includes/database.php";
        ?>
        <div class="afbeelding">
            <img src="./afbeeldingen/liefde.jpeg" width="50%" height="100%"/>
        </div>
        </br>

        <nav>
            <a href="./account.php" class="buttons" id="account">Create account</a>
            </br>
            </br>
            </br>
            </br>
            <a href="./rating.php" class="buttons" id="rating">Rating/matching</a>
        </nav>

        <div id="footer">
            <?php
                include "./components/footer.php";
            ?>
        </div>
    </body>
</html>
