<?php

// naujausio automobilio paieska

$naujausias_auto = $automobiliai[0];

foreach ($automobiliai as $auto) {
    if ($auto['gamybos_metai'] > $naujausias_auto['gamybos_metai']) {
        $naujausias_auto = $auto;
    }
}

// seniausio automobilio paieska

$seniausias_auto = $automobiliai[0];

foreach ($automobiliai as $auto) {
    if ($auto['gamybos_metai'] < $seniausias_auto['gamybos_metai']) {
        $seniausias_auto = $auto;
    }
}

// visu automobiliu bendra rida (ridos suma)

$visu_ridu_suma = 0;

foreach ($automobiliai as $auto) {
    $visu_ridu_suma += $auto['rida'];
}

// metu vidurkio paieska

$metu_suma = 0;

foreach ($automobiliai as $auto) {
    $metu_suma += $auto['gamybos_metai'];
}

$metu_vidurkis = round( $metu_suma / count($automobiliai) );

// automobilio amziaus pridejimas

for ($i = 0; $i < count($automobiliai); $i++) {
    $automobiliai[$i]['amzius'] = date('Y') - $automobiliai[$i]['gamybos_metai'];
}

// kiek kokiu skirtingu spalvu yra

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

// automobiliai kurie naujesni nei 10 metu

$dabartiniai_metai = date('Y');

$naujausi_automobiliai = array();

foreach ($automobiliai as $auto) {
    if ($dabartiniai_metai - $auto['gamybos_metai'] <= 10) {
        array_push($naujausi_automobiliai, $auto);
    }
}
