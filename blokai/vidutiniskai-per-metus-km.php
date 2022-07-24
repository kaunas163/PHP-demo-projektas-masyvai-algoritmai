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
