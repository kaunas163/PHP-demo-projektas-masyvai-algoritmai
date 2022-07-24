<?php

$skirtingos_spalvos = array();

foreach ($automobiliai as $auto) {
    
    $spalva_yra = false;

    for ($i = 0; $i < count($skirtingos_spalvos); $i++) { 
        if ($auto['spalva'] == $skirtingos_spalvos[$i]['spalva']) {
            $spalva_yra = true;
            $skirtingos_spalvos[$i]['atsikartojimai']++;
            break;
        }
    }

    if (!$spalva_yra) {
        $spalva = array(
            'spalva' => $auto['spalva'],
            'atsikartojimai' => 1
        );
        array_push($skirtingos_spalvos, $spalva);
    }

}

?>

<div class="block">
    <h2>Kiek kokių skirtingų spalvų automobilių yra</h2>
    <?php
    
        if (count($skirtingos_spalvos) > 0) {
            ?>

                <table border="1">
                    <tr>
                        <th>Spalva</th>
                        <th>Atsikartojimai</th>
                    </tr>
                    <?php
                        foreach ($skirtingos_spalvos as $spalva) {
                            echo '<tr>';
                            echo '<td>' . $spalva['spalva'] . '</td>';
                            echo '<td>' . $spalva['atsikartojimai'] . '</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>

            <?php
        } else {
            echo '<p>Skirtingų spalvų nebuvo rasta.</p>';
        }
    
    ?>
</div>
