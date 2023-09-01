<?php

function operatorLogic($angkaPertama, $angkaKedua) {
    if ($angkaKedua === 0) {
        return "Tidak bisa dibagi dengan nol";
    }
    
    $quotient = 0;
    while ($angkaPertama >= $angkaKedua) {
        $angkaPertama -= $angkaKedua;
        $quotient++;
    }
    
    return $quotient;
}

$angkaPertama = 7;
$angkaKedua = 2;
$result = operatorLogic($angkaPertama, $angkaKedua);
echo "$angkaPertama : $angkaKedua menghasilkan output $result";

?>