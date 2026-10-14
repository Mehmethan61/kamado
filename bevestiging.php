<?php
$naam = $_POST['naam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$datum = $_POST['datum'];
$personen = $_POST['personen'];
$opmerkingen = $_POST['opmerkingen'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestiging | Kamado Breda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero">
            <h1>Bedankt, <?php echo htmlspecialchars($naam); ?>!</h1>
            <p>Je inschrijving voor de masterclass is ontvangen.</p>
        </section>

        <section class="kolom">
            <h2>Jouw gegevens</h2>
            <p>Datum: <?php echo htmlspecialchars($datum); ?></p>
            <p>Aantal personen: <?php echo htmlspecialchars($personen); ?></p>
            <p>E-mailadres: <?php echo htmlspecialchars($email); ?></p>
            <p>Telefoonnummer: <?php echo htmlspecialchars($telefoon); ?></p>
            <p>Opmerkingen: <?php echo htmlspecialchars($opmerkingen); ?></p>
            <a class="knop" href="index.php">Terug naar home</a>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>