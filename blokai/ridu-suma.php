<?php

$visu_ridu_suma = 0;

foreach ($automobiliai as $auto) {
    $visu_ridu_suma += $auto['rida'];
}

?>

<div class="block">
    <h2>Visų automobilių ridų suma</h2>
    <p><?php echo $visu_ridu_suma; ?> km</p>
</div>
