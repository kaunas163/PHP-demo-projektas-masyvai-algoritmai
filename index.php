<?php require_once('duomenys.php'); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobiliai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="block">
        <h1>Automobiliai</h1>
        <p>Projektas apie automobilius.</p>
    </div>

    <?php
    
        include('blokai/pradiniai-duom-lenteleje.php');
        include('blokai/pradiniai-duom-kortelese.php');
        include('blokai/naujausias-automobilis.php');
        include('blokai/seniausias-automobilis.php');
        include('blokai/ridu-suma.php');
        include('blokai/metu-vidurkis.php');
        include('blokai/vidutiniskai-per-metus-km.php');
        include('blokai/automobiliu-amziai.php');
        include('blokai/skirtingos-spalvos.php');
        include('blokai/naujausi-automobiliai.php');
    
    ?>

    <script src="scripts.js"></script>

</body>
</html>
