<?php
 //penulisan kode php
    echo "hello word";

//aturan dasar penulisan php
    Echo"ada";
    ECHO"ada";
    EcHo"ada";

    $andi="andi";
    echo $andi; 

//penulisan variabel php
    $i ;
    $nama ; 
    $umur;
    $lokasi_memory;
    $angka_maksimum;

//cara menampilkan nilai variabel
    $a= 'Saya sedang belajar';
    $b= 4;

    print $a;
    echo $b ;

    $a= 5;
    $b= "Saya sedang belajar $a";

    print $a;
    echo $b ;

//tipe data php integer
    $umur = 21;
    $harga = 15000;
    $rugi = 500000;

    echo $umur;
    echo "<br\n>";
    echo $harga;
    echo "<br\n>";
    echo $rugi; 

    $a=14;
    $b=16;
    $c= $a + $b;
    echo $c ; 

    $d=$a * $b;
    echo $d;

//Tipe Data PHP “Float”
    $angka_float1= 0.78;
    $angka_float2= 14.99;
    $angka_scientific1= 0.314E1;
    $angka_scientific2= 8.3365E-3;

    echo $angka_float1; // 8.78
    echo "<br />";
    echo $angka_float2; //14.99
    echo "<br />";
    echo $angka_scientific1; //3.14
    echo "<br />";
    echo $angka_scientific2; //0.0003365

    $a = 10.66;
    $b = 12.4;
    $c= $a + $b;
    echo $c; // 23.06
    $d = $a / $b;
    echo $d; // 0.85967741935484


//Tipe Data PHP “String”
    $string1 = 'Ini adalah string sederhana';
    $string2 = "Ini adalah string yang bisa memiliki beberapa baris";
    $string3 = 'Dia berkata :  i ll like ';

    echo $string1; echo "<br>";
    echo $string2; echo "<br>";
    echo $string3; echo "<br>";

$benar=true; 
$salah=false;

echo "benar = $benar, salah = $salah"; 
// hasil output: benar 1, salah=

//operator matematika
$hasil1 = -3;
$hasil2 = 3+5;
$hasil3 = 8-4.5;
$hasil4 = 2*5;
$hasil5 = 3+8/5-3;
$hasil6 = 10 % 4;

echo "$hasil1:"; var_dump($hasil1);
echo "<br\>";

echo "$hasil2:"; var_dump($hasil2);
echo "<br\>";

echo "$hasil3:"; var_dump($hasil3);
echo "<br\>";

echo "$hasil4:"; var_dump($hasil4);
echo "<br\>";

echo "$hasil5:"; var_dump($hasil5);
echo "<br\>";

echo "$hasil6:"; var_dump($hasil6);
echo "<br\>";

?>  