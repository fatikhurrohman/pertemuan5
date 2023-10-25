<?php
echo "fatikhurrohman(4122042) \n";

 " /n ";
  " /n ";
 

// Mengambil input dari pengguna untuk hutang a dan b
echo "Masukkan jumlah Pemasukan: ";
$pemasukan = floatval(fgets(STDIN));

echo "Masukkan jumlah hutang a: ";
$hutang_a = floatval(fgets(STDIN));

echo "Masukkan bunga hutang a (dalam persen): ";
$bunga_a = floatval(fgets(STDIN)) / 100;

echo "Masukkan jumlah hutang b: ";
$hutang_b = floatval(fgets(STDIN));

echo "Masukkan bunga hutang b (dalam persen): ";
$bunga_b = floatval(fgets(STDIN)) / 100;


// Menghitung bunga hutang a
$bunga_hutang_a = $hutang_a * $bunga_a;

// Menghitung bunga hutang b
$bunga_hutang_b = $hutang_b * $bunga_b;

// Menghitung total hutang
$total_hutang = $hutang_a + $hutang_b;

// Menghitung sisa uang
$sisa_uang = $pemasukan - $total_hutang;

//mengitung total bungga hutang
$total_bunga = $bunga_hutang_a + $bunga_hutang_b;

// Menampilkan hasil
echo "Sisa Uang: " . number_format($sisa_uang, 0, ',', '.') . " IDR\n";
echo "Jumlah Total Bunga Hutang A: " . number_format($bunga_hutang_a, 0, ',', '.') . " IDR\n";
echo "Jumlah Total Bunga Hutang B: " . number_format($bunga_hutang_b, 0, ',', '.') . " IDR\n";
echo "Jumlah Total Hutang: " . number_format($total_hutang, 0, ',', '.') . " IDR\n";
echo "Jumlah Total bunga: " . number_format($total_bunga, 0, ',', '.') . " IDR\n";
?>