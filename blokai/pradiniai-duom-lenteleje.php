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
