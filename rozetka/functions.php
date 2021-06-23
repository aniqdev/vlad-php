<?php if(!defined('ROOT'))  die('Direct request not allowed!'); ?>
<?php

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

function _get($key, $defaul = '')
{
    if(!empty($_GET[$key])){
        return $_GET[$key];
    }else{
        return $defaul;
    }
}

function is_tab_active($current_tab)
{
    if(isset($_GET['tab']) && $_GET['tab'] == $current_tab){
        return 'active';
    }else{
        return '';
    }
}

function tovarov($count)
{
    if($count === 0) return 'Ничего не найдено';

    if($count === 1) return 'Найден 1 товар';
    
    if($count < 5) return "Найдено $count товара";

    else return "Найдено $count товаров";
}


function get_product_params($product)
{
    return http_build_query($product) . '&tab=1';
}

function auth_check()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

function get_random_img_src()
{
    global $images_arr;
    $count = count($images_arr);
    $random_index = random_int(0, $count - 1);
    return $images_arr[$random_index];
}