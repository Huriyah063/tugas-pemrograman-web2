<?php

// Fungsi untuk menghitung volume dan luas permukaan tabung
function tabung($jariJari, $tinggi) {
    $volume = pi() * pow($jariJari, 2) * $tinggi;
    $luasPermukaan = 2 * pi() * $jariJari * ($jariJari + $tinggi);
    
    return [
        'volume' => $volume,
        'luasPermukaan' => $luasPermukaan
    ];
}
?>