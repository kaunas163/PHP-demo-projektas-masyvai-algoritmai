<?php

$seniausias_auto = $automobiliai[0];

foreach ($automobiliai as $auto) {
    if ($auto['gamybos_metai'] < $seniausias_auto['gamybos_metai']) {
        $seniausias_auto = $auto;
    }
}

?>

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
