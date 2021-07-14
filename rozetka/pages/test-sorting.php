<?php

// $similar_products

$arr = [7,79,5423,678,31,43,99,0];

$a = 'c';
$b = 'bb';
if($a > $b){
    echo 'a > b';
}else{
    echo 'a < b';
}

pa($similar_products);

usort($similar_products, function($a, $b)
{
    return strcmp($a['title'], $b['title']); // -1 , 0, 1
});

pa($similar_products);