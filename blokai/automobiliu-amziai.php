<div class="block">
    <h2>Automobilių amžiai</h2>
    <p>Dabartiniai metai: <?php echo date('Y'); ?></p>
    <?php
    
        if (count($automobiliai) > 0) {
            ?>

                <table border="1">
                    <tr>
                        <th>Markė</th>
                        <th>Modelis</th>
                        <th>Gamybos metai</th>
                        <th>Amžius</th>
                    </tr>
                    <?php
                        foreach ($automobiliai as $auto) {
                            echo '<tr>';
                            echo '<td>' . $auto['marke'] . '</td>';
                            echo '<td>' . $auto['modelis'] . '</td>';
                            echo '<td>' . $auto['gamybos_metai'] . '</td>';
                            echo '<td>' . $auto['amzius'] . '</td>';
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
