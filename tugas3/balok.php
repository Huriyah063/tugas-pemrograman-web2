<?php
// Fungsi untuk menghitung volume dan luas permukaan balok
function balok($panjang, $lebar, $tinggi) {
    $volume = $panjang * $lebar * $tinggi;
    $luasPermukaan = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
    
    return [
        'volume' => $volume,
        'luasPermukaan' => $luasPermukaan
    ];
}
?>