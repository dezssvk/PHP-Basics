<?php

// array
// variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adlaah index yang dimulai dari angka 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

//cara baru
$hari2 = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];



// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($hari2);

echo "<br>";
echo "<br>";
echo "<br>";

// menampilkan 1 elemen pada array
echo $hari[1];
echo "<br>";
echo $hari2[0];


// menambahkan elemen baru pada array
$hari[] = "Libur";
$hari2[] = "Libur";
?>