<?php



$string = 'Hello!';

echo $string;

$num = 45;

echo '<hr>';

echo $num;

$i_am_old = false;

echo '<hr>';

var_dump($string);

echo '<hr>';
$i_am_old = [];
if($i_am_old){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

// 'hi' -> true
// '' -> false
// ' ' -> true
// 0 -> false
// '0' -> false
// '1,2..' -> true
// 1,2,... -> true
// [] -> false
// [0,''] -> true

$arr = [
    'Anna',
    'Sveta',
    'Kirill',
    'Max',
    'Anton',
    'Katya',
];

// echo '<hr>';
// echo $arr[0];

foreach($arr as $key => $name){
    echo '<hr>';
    echo $name;
    if($key > 3) break;
}

// for ($i=0; $i < 5; $i = $i + 1) { 
//     echo '<hr>';
//     echo $arr[$i];
// }
