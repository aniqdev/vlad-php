<pre>
<?php

$num = 12;

echo $num;

echo '<hr>';

$str = '12';

echo $str;

echo '<hr>';

$booleeee = false;

var_dump($booleeee);

echo '<hr>';

if($num == $str && $num > 5){ // > < >= <= == === && ||
    echo 'I sad true'; // true
}else{
    echo 'I sad false';
}
my_function();
echo '<hr>';

if($num == $str && $num < 5){ // > < >= <= == === && ||
    echo 'I sad true';
}else{
    echo 'I sad false'; // false
}

echo '<hr>';

if($num == $str || $num < 5){ // > < >= <= == === && ||
    echo 'I sad true'; // true
}else{
    echo 'I sad false';
}

echo '<hr>';

$arr = array();

$arr = [1,2,3,4,5];

print_r($arr);

$products = include '../rozetka/data/similar-products.php';

foreach($products as $key => $product){
    echo '<hr>';
    echo 'Hello';
    echo $key;
    echo '<br>';
    echo $product['title'];
}

my_function();

// print_r($products[2]['title']);

$human = [
    'Test',
    'name' => 'Tomas',
    'gender' => 'male',
    'age' => 34,
    'has_kids' => true,
    'kids' => [
        'Katya',
        'Anton',
        'Petya'
    ]
];

print_r($human);


function my_function()
{
    echo '<hr>';
    echo 'Hello from funcion <br>';
    print_r([
        'qwerty', 'asdfg'
    ]);
}

my_function();
my_function();
my_function();


?>
</pre>
