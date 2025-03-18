<?php
// Fungsi untuk menghitung volume dan luas permukaan kubus
function kubus($sisi) {
    $volume = pow($sisi, 3);
    $luasPermukaan = 6 * pow($sisi, 2);
    
    return [
        'volume' => $volume,
        'luasPermukaan' => $luasPermukaan
    ];
}
?>