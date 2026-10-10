<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Kamado Breda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <img class="hero-foto" src="img/sfeerfoto.jpeg" alt="Joris voor zijn winkel Kamado Breda">
            <h1>Exclusieve blauwe Kamado barbecues in Breda</h1>
            <a class="knop" href="onze-kamados.php">Bekijk Collectie</a>
        </section>

        <section class="over">
            <div class="foto-plek">[ Foto: Joris voor winkel ]</div>
            <div class="over-tekst">
                <h2>Over Kamado Breda</h2>
                <p>Joris is onlangs gestart met zijn speciaalzaak in Breda met exclusieve blauwe Kamado's en gietijzeren accessoires.</p>
                <p>Kom langs voor advies of volg een masterclass!</p>
            </div>
        </section>

        <section class="voordelen">
            <div class="kaart">
                <h3>Uniek Blauw</h3>
                <p>Handgemaakt &amp; keramisch</p>
            </div>
            <div class="kaart">
                <h3>Masterclasses</h3>
                <p>Leer koken van een pitmaster</p>
            </div>
            <div class="kaart">
                <h3>Accessoires</h3>
                <p>Duurzaam gietijzer &amp; uitbreidingen</p>
            </div>
        </section>

        <section class="oproep">
            <div>
                <h2>Wil je leren grillen als een echte pitmaster?</h2>
                <p>Schrijf je direct in voor onze aankomende workshops.</p>
            </div>
            <a class="knop oranje" href="masterclasses.php">Naar Masterclasses</a>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
