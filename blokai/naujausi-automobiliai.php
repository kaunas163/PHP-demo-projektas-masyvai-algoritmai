<div class="block">
    <h2>Automobiliai, kurių amžius yra 10 metų ar mažiau</h2>

    <?php
    
        if (count($naujausi_automobiliai) > 0) {
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
                        foreach ($naujausi_automobiliai as $auto) {
                            ?>
                                <tr>
                                    <td><?php echo $auto['marke']; ?></td>
                                    <td><?php echo $auto['modelis']; ?></td>
                                    <td><?php echo $auto['gamybos_metai']; ?></td>
                                    <td><?php echo $auto['rida']; ?> km</td>
                                    <td><?php echo $auto['darbinis_turis']; ?> l</td>
                                    <td><?php echo $auto['spalva']; ?></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>

            <?php
        } else {
            echo '<p>Tokių automobilių nebuvo surasta.</p>';
        }
    
    ?>
</div>
