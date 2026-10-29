<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Kamado's | Kamado Breda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="kop">
            <h1>Onze Exclusieve Blauwe Kamado's</h1>
            <p>Ontdek handgemaakte perfectie voor jouw ultieme barbecue-ervaring.</p>
        </section>

        <section class="product">
            <div class="galerij">
                <img class="grote-foto" id="grote-foto" src="img/kamado-1.jpg" alt="Kamado foto 1">
                <div class="miniaturen">
                    <img class="miniatuur actief" src="img/kamado-1.jpg" alt="Kamado foto 1">
                    <img class="miniatuur" src="img/kamado-2.jpg" alt="Kamado foto 2">
                    <img class="miniatuur" src="img/kamado-3.jpg" alt="Kamado foto 3">
                    <img class="miniatuur" src="img/kamado-4.jpg" alt="Kamado foto 4">
                </div>
            </div>
            <div class="product-info">
                <h2>Onze Kamado's</h2>
                <p class="prijs">Vanaf &euro; 699,-</p>
                <h3>Beschrijving:</h3>
                <p>Handgemaakte keramische Kamado's voor ultieme hittebeheersing en authentieke rooksmaak. Verkrijgbaar in meerdere kleuren en maten.</p>
                <ul>
                    <li>Diameter rooster: 47 cm</li>
                    <li>Gietijzeren topventilatie</li>
                </ul>
            </div>
        </section>

        <section class="andere">
            <h2>Andere Modellen &amp; Gietijzeren Accessoires</h2>
            <div class="kaarten">
                <div class="kaart">
                    <img class="kaart-foto" src="img/kamado-compact.jpg" alt="Kamado Compact Blue">
                    <h3>Kamado Compact Blue</h3>
                    <p>Voor tuin &amp; balkon</p>
                    <p class="prijs">&euro; 699,-</p>
                </div>
                <div class="kaart">
                    <img class="kaart-foto" src="img/kamado-xl.jpg" alt="Kamado XL Pitmaster">
                    <h3>Kamado XL Pitmaster</h3>
                    <p>Voor catering &amp; feesten</p>
                    <p class="prijs">&euro; 1.799,-</p>
                </div>
                <div class="kaart">
                    <img class="kaart-foto" src="img/rooster.jpg" alt="Gietijzeren Rooster Set">
                    <h3>Gietijzeren Rooster Set</h3>
                    <p>Perfecte grillstrepen</p>
                    <p class="prijs">&euro; 89,-</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
