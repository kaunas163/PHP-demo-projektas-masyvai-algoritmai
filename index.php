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
                    echo '<div class="auto-block">';
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

</body>
</html>
