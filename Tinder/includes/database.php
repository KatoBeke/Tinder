<?php 
    function makeDbConnection() {
        // Referenties om te connecteren met een database
        $databaseHost = "ID328524_tinder.db.webhosting.be"; 
        $databaseGebruikersnaam = "ID328524_tinder";
        $databasePaswoord = "Tinder2021";
        $databaseNaam = "ID328524_tinder";

        // De connectie maken
        $connectie = mysqli_connect($databaseHost, $databaseGebruikersnaam, $databasePaswoord, $databaseNaam);

        // Als de connectie niet lukt, wordt er een melding getoont
        if ($connectie == false) {
            die("Connection failed");
        }
        return $connectie;
    }
    
    function closeConnection($connectie) {
        // Connectie met de database sluiten
        $connectie->close();
    }

    function getQuery($sqlQuery) {
        // De connectie maken
        $connectie = makeDbConnection();

        // Het sql-statement voorbereiden
        $result = mysqli_query($connectie, $sqlQuery);

        // Connectie met de database sluiten
        closeConnection($connectie);

        // Alle resultaten ophalen en teruggeven als een associatieve array
        return $result->fetch_all((MYSQLI_ASSOC));
    }

    function createQuery($sqlQuery) {
        // De connectie maken
        $connectie = makeDbConnection();

        // Het sql-statement voorbereiden
        $result = mysqli_query($connectie, $sqlQuery);

        // Connectie met de database sluiten
        closeConnection($connectie);

        return $result;
    }