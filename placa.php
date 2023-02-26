<?php
$placaAntiga = array ('');
$placaMercosul = array('');
$placa = 'PIA2A19';

if (strlen($placa) == 7){

    for ($i = 0; $i <= (strlen($placa)); $i++) {
        if(ctype_alpha($placa[$i])){
            $contLetra += 1;

        }
        if (ctype_digit($placa[$i])){
            $contNum += 1;
        }
    }


    if ($contLetra == 3 && $contNum == 4){
        echo("Placa antiga!");
    } else if ($contLetra == 4 && $contNum == 3) {
        echo ("Placa Mercosul");
    }

} else {
    echo ("Placa inválida!");
}

?>
