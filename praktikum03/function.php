<?php 


function hitungUmur($thn_lahir){
    $thn_sekarang = 2023;
    $umur = $thn_sekarang - $thn_lahir;

    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2002) . " tahun.";


?>