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

        <?php
            include "./includes/database.php";
            
            $persons = getQuery("SELECT * FROM person");
            $likes = getQuery("SELECT * FROM person INNER JOIN likes ON person.person_id = likes.personLikedId WHERE likes.geliked = true");
            $didntlikes = getQuery("SELECT * FROM person INNER JOIN likes ON person.person_id = likes.personLikedId WHERE likes.geliked = false");
        ?>

        <div class="afbeelding">
            <img src="./afbeeldingen/love.jfif" width="400px" height="400px" id="hartjes"/>
        </div>
     
        <?php

            /*function likeOrdislike($personId, $personLikedId, $geliked)
            {
                if($personLikedId != 0)
                {
                    createQuery("INSERT INTO `likes` (`person_id`, `personLikedId`, `geliked`) VALUES ('$personId', '$personLikedId', '$geliked'); ");
                    echo "INSERT INTO `likes` (`person_id`, `personLikedId`, `geliked`) VALUES ('$personId', '$personLikedId', '$geliked');";
                }
            }*/

            // Als alle velden van de form zijn ingevuld, wordt er per persoon een overzicht getoont van zijn gegevens, een knop like en een knop dislike
            if (isset($_POST["firstname"]) && isset($_POST["gender"]) && isset($_POST["preferred_gender"])) 
            {
                $voornaam = $_POST["firstname"];
                $geslacht = $_POST["gender"];
                $gewenst_geslacht = $_POST["preferred_gender"];

                foreach($persons as $person) 
                {
                    if ($voornaam == $person['firstName'])
                    {
                        $personId = $person['person_id']; // Id van de persoon die de andere mensen disliked of liked
                    }
                    if ($voornaam != $person['firstName'] && $gewenst_geslacht == $person['gender'] && $geslacht == $person['preferred_gender']) 
                    {
                        $personLikedId = $person['person_id']; // De id's van de personen die geliked of gedisliked worden
                        ?>
                            <form method="post" id="personlike-<?php echo $personLikedId ?>">
                                <div class="person js-person">
                                    <h1>
                                        <?php
                                            echo $person['firstName'];
                                        ?>
                                    </h1>
                                    
                                    <blockquote>
                                        <?php
                                            echo $person['firstName'] . " " . $person['lastName'];
                                            echo "</br>";
                                            echo $person['gender'];
                                            echo "</br>";
                                            echo $person['age'] . " years old";
                                            echo "</br>";
                                            echo $person['interests'];
                                        ?>
                                    </blockquote>
                                    </br>
                                </div>
                                <input type="hidden" id="geliked" value="emptyString">
                                <button class="button" name="dislike" id="dislike" value="false" onclick="processMatch(<?php echo $personLikedId?>, false)">X</button>
                                <button class="button" name="like" id="like" value="true" onclick="processMatch(<?php echo $personLikedId?>, true)">✓</button>
                            </form>
                    <?php 
                    }
                }
                if(isset($_POST['geliked']))
                {
                    createQuery("INSERT INTO `likes` (`person_id`, `personLikedId`, `geliked`) VALUES ('$personId', '$personLikedId', '$geliked'); ");
                }
                /*if(isset($_POST['dislike']))
                {
                    disliken();
                }

                if(isset($_POST['like']))
                {s
                    liken();
                }*/
            }?>
                    <!-- Melding iedereen gerated -->
                    <div class="einde">
                        <p>That is it, <?php echo $voornaam . "." . "</br>" ?>You rated them all!</p>
                        <p>You like:
                                <?php
                                    foreach($likes as $like) 
                                    { 
                                        echo "<ul><li>" . $like['firstName'] . "</ul></li>";
                                        echo "</br>";
                                    }
                                ?>
                        </p>
                        <p>You didn't like:
                                <?php
                                    foreach($didntlikes as $didntlike) 
                                    { 
                                        echo "<ul><li>" . $didntlike['firstName'] . "</ul></li>";
                                        echo "</br>";
                                    }
                                ?>
                        </p>
                    </div>
                    
        <div id="footer">
            <?php
                include "./components/footer.php";
            ?>
        </div>
        <script src="./match.js">
        </script>
    </body>
</html>