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

function sklonenie($count, $p1, $p2, $p3)
{
    // $count = 234
    $last_digit = $count % 10; // 1 % 10 = 0.[1]
    if ($last_digit === 1) {
        return $p1;
    }
    if ($last_digit === 2 || $last_digit === 3 || $last_digit === 4) {
        return $p2;
    }
    // if (in_array($last_digit, [2, 3, 4])) {
    //     return $p2;
    // }
    return $p3;
}

function my_pagination($offset, $limit, $total_count)
{
    if($total_count < $limit) return '';
    $action = $_GET['action'];
    $new_offset = in_range($offset - $limit, 0, $total_count - 1);
    $prev_link = "?action=$action&offset=$new_offset&limit=$limit";
?>
<div class="pagination">
    <?php if($offset > 0): ?>
        <a href="<?= $prev_link ?>" class="prev active"><i class="bi bi-arrow-left"></i></a>
    <?php else: ?>
        <a class="prev disabled"><i class="bi bi-arrow-left"></i></a>
    <?php endif ?>
    <ul>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li><a href="">6</a></li>
        <li><a href="">7</a></li>
        <li><a href="">8</a></li>
    </ul>
    <?php if($total_count > $offset + $limit): ?>
        <a href="#" class="prev active"><i class="bi bi-arrow-right"></i></a>
    <?php else: ?>
        <a class="prev disabled"><i class="bi bi-arrow-right"></i></a>
    <?php endif ?>
</div>
<?php
}

function in_range($number, $min, $max)
{
    if($number < $min) return $min;
    if($number > $max) return $max;
    return $number;
}