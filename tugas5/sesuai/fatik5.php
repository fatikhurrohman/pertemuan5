<?php
// Deklarasi variabel
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05;
$hutang_b = 9500000;
$bunga_b = 0.045;

// Menghitung bunga hutang a
$bunga_hutang_a = $hutang_a * $bunga_a;

// Menghitung bunga hutang b
$bunga_hutang_b = $hutang_b * $bunga_b;

// Menghitung total bunga hutang
$total_bunga = $bunga_hutang_a + $bunga_hutang_b;

// Menghitung total hutang
$total_hutang = $hutang_a + $hutang_b;

// Menghitung sisa uang
$sisa_uang = $pemasukan - $total_hutang;

// Menampilkan hasil
echo "Sisa Uang: " . number_format($sisa_uang, 0, ',', '.') . " IDR\n";
echo "Jumlah Total Bunga Hutang: " . number_format($total_bunga, 0, ',', '.') . " IDR\n";
echo "Jumlah Total Hutang: " . number_format($total_hutang, 0, ',', '.') . " IDR\n";
?>