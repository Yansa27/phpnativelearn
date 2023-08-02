<?php

// echo 'Hello world!';

// deklarasi variable
// $fruit = 'Apel';
// echo $fruit;

// ! Foreach
$fruits = [
    'Merah' => 'Apel',
    'Hijau' => 'Semangka',
    'Kuning' => 'Jeruk'
];

foreach($fruits as $key => $value){
    echo $key.': '.$value.' ';
}


//! Function
$str = 'String';

//* function strlen untuk mencari panjang nilai sebuah variale
echo strlen($str);

// * function count untuk melihat jumlah element sebuah array
echo count($fruits);

// * function rand untuk memilih nilai secara acak
echo rand(10, 12);
?>