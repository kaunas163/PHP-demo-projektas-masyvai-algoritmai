<div class="block">
    <h2>Pradiniai duomenys kortelėse</h2>

    <?php
    
        if (count($automobiliai) > 0) {
            echo '<div class="auto-blocks-list">';
            foreach ($automobiliai as $auto) {
                $atributai = 'class="auto-block"';
                $atributai .= ' data-marke="' . $auto['marke'] . '"';
                $atributai .= ' data-modelis="' . $auto['modelis'] . '"';
                $atributai .= ' data-rida="' . $auto['rida'] . '"';
                $atributai .= ' data-darbinis_turis="' . $auto['darbinis_turis'] . '"';
                $atributai .= ' data-gamybos_metai="' . $auto['gamybos_metai'] . '"';
                $atributai .= ' data-spalva="' . $auto['spalva'] . '"';

                echo '<div '. $atributai . '>';
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

<div class="modal-wrapper">
    <div class="modal">
        <h2 class="title"></h2>
        <p class="metai">Gamybos metai: <span></span></p>
        <p class="rida">Rida: <span></span> km</p>
        <p class="darbinis">Darbinis tūris: <span></span> l</p>
        <p class="spalva">Spalva: <span></span></p>
    </div>
</div>
