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
