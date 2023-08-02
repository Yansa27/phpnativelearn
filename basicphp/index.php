<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn - Php</title>
</head>
<body>
<?php 
echo 'Hello , world!';
?>

<br>

<?php 
echo 7 * 8 ;
?>

<!-- mendeklarasi kan varibel -->
<?php 
$fruit = 'Apel';
echo "Buah : {$fruit}";
?>

<br>
<!-- if statement -->
<?php
$age = 18;

if ($age < 17){
    echo "Age : {$age}";
    echo 'skip masih bocil';
}elseif ($age > 17) {
    echo "Age : {$age}";
    echo 'Umur Oke';
}
?>
<br>
<!-- switch statement -->
<?php
$num = 20;
$remainder = $num % 3;

switch($remainder) {
    case 0 :
        echo 'Sangat beruntung';
        break;
    case 1 : 
        echo 'beruntung';
        break;
    case 2 : 
        echo 'Sedikit beruntung';
        break;
    default :
        echo 'Kurang beruntung';
        break;            
}
?>

<br>

<!-- Array in php -->
<?php

$colors = ['Merah', 'Biru', 'Kuning'];
echo $colors[0];
// menambahkan data pada array
$colors[] = 'Putih';
echo $colors[3];

?>

<br>
<!-- array asociative -->
<?php
    $scores = [
      'Matematika' => 70,
      'Bahasa' => 90,
      'Sains' => 80
      
      ];
    $scores['Sains'] += 5  ;
    
    echo $scores['Sains'];
?>
</body>
</html>

