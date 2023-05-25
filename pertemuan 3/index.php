<?php
// PENGULANGAN
// for
// do
// do.. while
// foreach : pengulangan khusus array

//LOOPING
// CONTOH PENGGUNAAN FOR

for($i=0; $i <= 10; $i++){
    echo"LOREM IPSUM <br>";
}

for($a=1; $a <= 2; $a++ ){
    echo"<br>";
}

for($u=2; $u <= 12; $u++){
    echo"DOLOR SIT AMET 
    <br>";
}

//CONTOH PENGGUNAAN WHILE
$a=0;
$a2=0;

while($a <= 2){
   echo"<br>";
   $a++; 
}

while($a2 < 10){
    echo"INI ADALAH CONTOH PENGGUNAAN WHILE<br>";
    $a2++;
}

//CONTOH PENGGUNAAN DO WHILE
$i=0;
$i2=0;

do{
    echo"<br>";
    $i2++;
} while($i2 <= 2);

do{
    echo"INI ADALAH CONTOH PENGGUNAAN DO WHILE <br>";
    $i++;
} while($i < 10)

?>