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
                <img class="grote-foto" id="grote-foto" src="img/sfeerfoto.jpeg" alt="Kamado Pro - Blue Edition foto 1">
                <div class="miniaturen">
                    <img class="miniatuur actief" src="img/sfeerfoto.jpeg" alt="Kamado Pro - Blue Edition foto 1">
                    <img class="miniatuur" src="img/logo.png" alt="Kamado Pro - Blue Edition foto 2">
                    <img class="miniatuur" src="img/sfeerfoto.jpeg" alt="Kamado Pro - Blue Edition foto 3">
                    <img class="miniatuur" src="img/logo.png" alt="Kamado Pro - Blue Edition foto 4">
                </div>
            </div>
            <div class="product-info">
                <h2>Kamado Pro - Blue Edition</h2>
                <p class="prijs">&euro; 1.299,-</p>
                <h3>Beschrijving:</h3>
                <p>Op maat gemaakte blauwe keramische barbecue voor ultieme hittebeheersing en authentieke rooksmaak.</p>
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
                    <div class="foto-plek">[ Productfoto ]</div>
                    <h3>Kamado Compact Blue</h3>
                    <p>Voor tuin &amp; balkon</p>
                    <p class="prijs">&euro; 699,-</p>
                </div>
                <div class="kaart">
                    <div class="foto-plek">[ Productfoto ]</div>
                    <h3>Kamado XL Pitmaster</h3>
                    <p>Voor catering &amp; feesten</p>
                    <p class="prijs">&euro; 1.799,-</p>
                </div>
                <div class="kaart">
                    <div class="foto-plek">[ Productfoto ]</div>
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
