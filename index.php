<?php

$automobiliai = array(
    array(
        'marke' => 'audi',
        'modelis' => 'a4',
        'rida' => 124587,
        'darbinis_turis' => 1.6,
        'gamybos_metai' => 2010,
        'spalva' => 'pilka'
    ),
    array(
        'marke' => 'tesla',
        'modelis' => 's',
        'rida' => 14578,
        'darbinis_turis' => 1.2,
        'gamybos_metai' => 2016,
        'spalva' => 'raudona'
    ),
    array(
        'marke' => 'citroen',
        'modelis' => 'xsara',
        'rida' => 149787,
        'darbinis_turis' => 1.6,
        'gamybos_metai' => 2005,
        'spalva' => 'mėlyna'
    ),
    array(
        'marke' => 'wolswagen',
        'modelis' => 'polo',
        'rida' => 427683,
        'darbinis_turis' => 1.4,
        'gamybos_metai' => 2004,
        'spalva' => 'pilka'
    ),
    array(
        'marke' => 'bmw',
        'modelis' => 'e39',
        'rida' => 349784,
        'darbinis_turis' => 2.0,
        'gamybos_metai' => 2002,
        'spalva' => 'juoda'
    ),
    array(
        'marke' => 'audi',
        'modelis' => '80',
        'rida' => 350497,
        'darbinis_turis' => 1.6,
        'gamybos_metai' => 1999,
        'spalva' => 'juoda'
    ),
    array(
        'marke' => 'hyundai',
        'modelis' => 'i3',
        'rida' => 41878,
        'darbinis_turis' => 1.4,
        'gamybos_metai' => 2012,
        'spalva' => 'raudona'
    ),
    array(
        'marke' => 'seat',
        'modelis' => 'acorda',
        'rida' => 4578,
        'darbinis_turis' => 1.0,
        'gamybos_metai' => 2022,
        'spalva' => 'mėlyna'
    )
);

// naujausio automobilio paieska

$naujausias_auto = $automobiliai[0];

foreach ($automobiliai as $auto) {
    if ($auto['gamybos_metai'] > $naujausias_auto['gamybos_metai']) {
        $naujausias_auto = $auto;
    }
}

// seniausio automobilio paieska

$seniausias_auto = $automobiliai[0];

foreach ($automobiliai as $auto) {
    if ($auto['gamybos_metai'] < $seniausias_auto['gamybos_metai']) {
        $seniausias_auto = $auto;
    }
}

// visu automobiliu bendra rida (ridos suma)

$visu_ridu_suma = 0;

foreach ($automobiliai as $auto) {
    $visu_ridu_suma += $auto['rida'];
}

// metu vidurkio paieska

$metu_suma = 0;

foreach ($automobiliai as $auto) {
    $metu_suma += $auto['gamybos_metai'];
}

$metu_vidurkis = round( $metu_suma / count($automobiliai) );

?>

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

    <div class="block">
        <h2>Pradiniai duomenys lentelėje</h2>

        <?php

            if (count($automobiliai) > 0) {
                ?>

                    <table border="1">
                        <tr>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Gamybos metai</th>
                            <th>Rida</th>
                            <th>Darbinis tūris</th>
                            <th>Spalva</th>
                        </tr>
                        <?php
                            foreach ($automobiliai as $auto) {
                                echo '<tr>';
                                echo '<td>' . $auto['marke'] . '</td>';
                                echo '<td>' . $auto['modelis'] . '</td>';
                                echo '<td>' . $auto['gamybos_metai'] . '</td>';
                                echo '<td>' . $auto['rida'] . ' km</td>';
                                echo '<td>' . $auto['darbinis_turis'] . ' l</td>';
                                echo '<td>' . $auto['spalva'] . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>

                <?php
            } else {
                echo '<p>Šiuo metu nėra įvestos automobilių informacijos.</p>';
            }
        
        ?>
    </div>

    <div class="block">
        <h2>Pradiniai duomenys kortelėse</h2>

        <?php
        
            if (count($automobiliai) > 0) {
                echo '<div class="auto-blocks-list">';
                foreach ($automobiliai as $auto) {
                    $atributai = 'class="auto-block"';
                    $atributai .= ' data-marke="' . $auto['marke'] . '"';
                    $atributai .= ' data-modelis="' . $auto['modelis'] . '"';
                    $atributai .= ' data-rida="' . $auto['rida'] . '"';
                    $atributai .= ' data-darbinis_turis="' . $auto['darbinis_turis'] . '"';
                    $atributai .= ' data-gamybos_metai="' . $auto['gamybos_metai'] . '"';
                    $atributai .= ' data-spalva="' . $auto['spalva'] . '"';
    
                    echo '<div '. $atributai . '>';
                    echo '<h3>' . $auto['marke'] . ' ' . $auto['modelis'] . '</h3>';
                    echo '<p>Gamybos metai: ' . $auto['gamybos_metai'] . '</p>';
                    echo '<button class="more-info-about-car">Plačiau</button>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>Šiuo metu nėra įvestos automobilių informacijos.</p>';
            }
        
        ?>
    </div>

    <div class="block">
        <h2>Naujausias automobilis</h2>
        <div class="one-auto-block">
            <h3><?php echo $naujausias_auto['marke'] . ' ' . $naujausias_auto['modelis']; ?></h3>
            <p>Gamybos metai: <?php echo $naujausias_auto['gamybos_metai']; ?></p>
            <p>Rida: <?php echo $naujausias_auto['rida']; ?> km</p>
            <p>Darbinis tūris: <?php echo $naujausias_auto['darbinis_turis']; ?> l</p>
            <p>Spalva: <?php echo $naujausias_auto['spalva']; ?></p>
        </div>
    </div>

    <div class="block">
        <h2>Seniausias automobilis</h2>
        <div class="one-auto-block">
            <h3><?php echo $seniausias_auto['marke'] . ' ' . $seniausias_auto['modelis']; ?></h3>
            <p>Gamybos metai: <?php echo $seniausias_auto['gamybos_metai']; ?></p>
            <p>Rida: <?php echo $seniausias_auto['rida']; ?> km</p>
            <p>Darbinis tūris: <?php echo $seniausias_auto['darbinis_turis']; ?> l</p>
            <p>Spalva: <?php echo $seniausias_auto['spalva']; ?></p>
        </div>
    </div>

    <div class="block">
        <h2>Visų automobilių ridų suma</h2>
        <p><?php echo $visu_ridu_suma; ?> km</p>
    </div>

    <div class="block">
        <h2>Metų vidurkis</h2>
        <p><?php echo $metu_vidurkis; ?></p>
    </div>
    
    <div class="block">
        <h2>Kiek vidutiniškai per metus yra nuvažiavęs kiekvienas automobilis</h2>

        <?php

            if (count($automobiliai) > 0) {
                ?>

                    <table border="1">
                        <tr>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Gamybos metai</th>
                            <th>Rida</th>
                            <th>Vidutiniškai km per metus</th>
                        </tr>
                        <?php
                            foreach ($automobiliai as $auto) {
                                $auto_amzius = date("Y") - $auto['gamybos_metai'];
                                if ($auto_amzius == 0) {
                                    $auto_amzius++;
                                }
                                echo '<tr>';
                                echo '<td>' . $auto['marke'] . '</td>';
                                echo '<td>' . $auto['modelis'] . '</td>';
                                echo '<td>' . $auto['gamybos_metai'] . '</td>';
                                echo '<td>' . $auto['rida'] . ' km</td>';
                                echo '<td>' . ( round($auto['rida'] / $auto_amzius) ) . ' km</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>

                <?php
            } else {
                echo '<p>Šiuo metu nėra įvestos automobilių informacijos.</p>';
            }

        ?>
    </div>

    <div class="modal-wrapper">
        <div class="modal">
            <h2 class="title"></h2>
            <p class="metai">Gamybos metai: <span></span></p>
            <p class="rida">Rida: <span></span> km</p>
            <p class="darbinis">Darbinis tūris: <span></span> l</p>
            <p class="spalva">Spalva: <span></span></p>
        </div>
    </div>

    <script src="scripts.js"></script>

</body>
</html>
