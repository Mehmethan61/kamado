<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterclasses | Kamado Breda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <h1>Word een Echte Pitmaster!</h1>
            <p>Volg een exclusieve barbecue-masterclass van Joris in Breda.</p>
        </section>

        <section class="twee-kolommen">
            <div class="kolom">
                <h2>Wat ga je leren?</h2>
                <ul>
                    <li>Temperatuurbeheersing (Low &amp; Slow)</li>
                    <li>Direct vs. indirect grillen</li>
                    <li>Roken met houtsnippers en chunks</li>
                    <li>Onderhoud van je blauwe Kamado</li>
                </ul>

                <h2>Praktische Informatie:</h2>
                <p>Duur: 4 uur</p>
                <p>Kosten: &euro; 95,- per persoon</p>

                <img class="masterclass-foto" src="img/masterclass.jpg" alt="Barbecue masterclass">
            </div>

            <div class="kolom">
                <h2>Inschrijfformulier</h2>
                <form action="bevestiging.php" method="post">
                    <label for="naam">Naam en Achternaam:</label>
                    <input type="text" id="naam" name="naam" placeholder="Bijv. Jan Jansen">

                    <label for="email">E-mailadres:</label>
                    <input type="email" id="email" name="email" placeholder="naam@voorbeeld.nl">

                    <label for="telefoon">Telefoonnummer:</label>
                    <input type="text" id="telefoon" name="telefoon" placeholder="06 12345678">

                    <label for="datum">Kies een datum:</label>
                    <input type="date" id="datum" name="datum">

                    <label for="personen">Aantal personen:</label>
                    <select id="personen" name="personen">
                        <option>1 Persoon</option>
                        <option>2 Personen</option>
                        <option>3 Personen</option>
                        <option>4 Personen</option>
                    </select>

                    <label for="opmerkingen">Opmerkingen:</label>
                    <textarea id="opmerkingen" name="opmerkingen"></textarea>

                    <button type="submit" class="knop oranje">Bevestig Inschrijving</button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
