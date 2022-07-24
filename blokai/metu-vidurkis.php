<?php

$metu_suma = 0;

foreach ($automobiliai as $auto) {
    $metu_suma += $auto['gamybos_metai'];
}

$metu_vidurkis = round( $metu_suma / count($automobiliai) );

?>

<div class="block">
    <h2>Metų vidurkis</h2>
    <p><?php echo $metu_vidurkis; ?></p>
</div>
