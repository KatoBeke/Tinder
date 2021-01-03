<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create new profile</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    </head>

    <body class="account">
        <?php
            include_once "./includes/database.php";
            
            $persons = getQuery("SELECT * FROM person");

            // Als alle velden van de form zijn ingevuld, wordt de mySQL tabel person gevuld met de gegevens uit de form. Je krijgt ook een melding dat het account is toegevoegd aan de database.
            if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["interests"]) && isset($_POST["tel"]) && isset($_POST["preferred_gender"])) {
                $voornaam = $_POST["firstname"];
                $familienaam = $_POST["lastname"];
                $leeftijd = $_POST["age"];
                $geslacht = $_POST["gender"];
                $interesses = $_POST["interests"];
                $telefoon = $_POST["tel"];
                $gewenst_geslacht = $_POST["preferred_gender"];

                $query = createQuery("INSERT INTO `person` (`firstName`, `lastName`, `age`, `gender`, `interests`, `telephone`, `preferred_gender`) VALUES ('$voornaam', '$familienaam', '$leeftijd', '$geslacht', '$interesses', 
                '$telefoon', '$gewenst_geslacht'); ");
                ?>
                <p id="success">Profile added to our database!!</p>
                </br>
                </br>
                <a href="./rating.php" class="buttons" id="swiping">Get swiping</a>    
            <?php }
        ?>

        <div class="afbeelding">
            <img src="./afbeeldingen/love.jfif" width="400px" height="400px" id="hartjes"/>
        </div>

        <h1>Create account</h1>
        
        <!-- Form om account te creëren -->
        <div id="main">
            <form action="" method="post" onsubmit="return Validation();">
                <label for="firstname" class="labels" id="voornaam">
                    Your firstname
                </label>
                </br>
                <input type="text" id="firstname" name="firstname" class="invoer"/>
                <p class="error" id="firstname_error">This input field is empty</p>
                </br>
                </br>

                <label for="lastname" class="labels" id="achternaam">
                    Name
                </label>
                </br>
                <input type="text" id="lastname" name="lastname" class="invoer"/>
                <p class="error" id="lastname_error">This input field is empty</p>
                </br>
                </br>

                <label for="age" class="labels" id="leeftijd">
                    Age
                </label>
                </br>
                <input type="number" id="age" name="age" class="invoer"/>
                <p class="error" id="age_error">This input field is empty</p>
                </br>
                </br>

                <label for="gender" class="labels" id="geslacht">
                    Gender
                </label>
                </br>
                <input type="text" id="gender" name="gender" class="invoer"/>
                <p class="error" id="gender_error">This input field is empty</p>
                </br>
                </br>

                <label for="interests" class="labels" id="interesses">
                    Interests
                </label>
                </br>
                <textarea name="interests" id="interests" rows="3" cols="40"></textarea>
                <p class="error" id="interests_error">This input field is empty</p>
                </br>
                </br>

                <label for="tel" class="labels" id="telefoon">
                    Phone
                </label>
                </br>
                <input type="tel" id="tel" name="tel" class="invoer"/>
                <p class="error" id="phone_error">This input field is empty</p>
                </br>
                </br>

                <label for="preferred_gender" class="labels" id="gewenst_geslacht">
                    Preferred gender
                </label>
                </br>
                <input type="text" id="preferred_gender" name="preferred_gender"class="invoer" />
                <p class="error" id="preferred_gender_error">This input field is empty</p>
                </br>
                </br>

                <input type="submit" class="buttons" id="account" value="Create account"/>
            </form>
        </div>
        
        <div id="footer">
            <?php
                include "./components/footer.php";
            ?>
        </div>
        <script src="./account.js">
        </script>
    </body>
</html>