<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Swipe</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    </head>

    <body class="rating">

        <div class="afbeelding">
            <img src="./afbeeldingen/love.jfif" width="400px" height="400px" id="hartjes"/>
        </div>

        <h1>Hello, who are you?</h1>
        </br>
        </br>
        </br>
        </br>
        
        <!-- Form om personen te beginnen liken en disliken -->
        <div id="main">
            <form action="match.php" method="POST" onsubmit="return Validation();">
                <label for="firstname">
                    Name
                </label>
                </br>
                <input type="text" id="firstname" name="firstname" class="invoer"/>
                </br>
                </br>

                <label for="gender">
                    Your gender
                </label>
                </br>
                <select id="gender" name="gender" class="invoer">
                    <option value="choose one"></option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
                </br>
                </br>

                <label for="preferred_gender">
                    Preferred gender
                </label>
                </br>
                <select id="preferred_gender" name="preferred_gender"class="invoer">
                    <option value="choose one"></option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
                </br>
                </br>
                </br>
                </br>

                <input type="submit" class="buttons" id="match" value="Find your match"/>
                </br>
                </br>
            </form>
        </div>
        
        <div id="footer">
            <?php
                include "./components/footer.php";
            ?>
        </div>
    </body>
</html>
