<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
<?php

$sorting = $_GET['sorting'] ?? 'default';


$offset = $_GET['offset'] ?? 0;
$limit = $_GET['limit'] ?? 5;

$total_count = db_query("SELECT count(*) FROM products");
$total_count = $total_count ? $total_count[0]['count(*)'] : 0;

if (!empty($_GET['sorting']) && $_GET['sorting'] === 'title') {
    $products = db_query("SELECT * FROM products ORDER BY title LIMIT $limit OFFSET $offset ");
}
elseif (!empty($_GET['sorting']) && $_GET['sorting'] === 'price_asc') {
    $products = db_query("SELECT * FROM products ORDER BY price LIMIT $limit OFFSET $offset ");
}
elseif (!empty($_GET['sorting']) && $_GET['sorting'] === 'price_desc') {
    $products = db_query("SELECT * FROM products ORDER BY price DESC LIMIT $limit OFFSET $offset ");
}
elseif (!empty($_GET['sorting']) && $_GET['sorting'] === 'rating') {
    $products = db_query("SELECT * FROM products ORDER BY rating DESC LIMIT $limit OFFSET $offset ");
}
else{
    $products = db_query("SELECT * FROM products LIMIT $limit OFFSET $offset ");
}

function decode_fast_info_json($product)
{
    $product['fast_info'] = json_decode($product['fast_info'], true);
    return $product;
}
$products = array_map('decode_fast_info_json',$products);

?>
<div class="category">
    <ul class="breadcrumbs">
        <li class="breadcrumb-item home">
            <a href="#" class="breadcrumb-link">
                <?php include 'svg/home.svg' ?>
            </a>
        </li>
        <li class="breadcrumb-devider">
            <?php include 'svg/breadcrumb-arrow.svg' ?>
        </li>
        <li class="breadcrumb-item">
            <a href="#" class="breadcrumb-link">Категории</a>
        </li>
        <li class="breadcrumb-devider">
            <?php include 'svg/breadcrumb-arrow.svg' ?>
        </li>
        <li class="breadcrumb-item">
            <a href="#" class="breadcrumb-link">Ноутбуки</a>
        </li>
    </ul>
    <div></div>
    <h2 class="category-title text-center">Product category</h2>
    <?php my_pagination($offset, $limit, $total_count); ?>
    <div class="before-products">
        <div class="count">
            Показано <?= $limit ?> товар<?= sklonenie($limit, '', 'а', 'ов') ?>
        </div>
        <div class="category-settings">
            <span class="category-settings-text">Товаров на странице</span>
            <select oninput="location.href = this.value">
                <!-- <option>Товаров на странице</option> -->
                <option <?= if_selected($limit, '5') ?> value="<?= query_add(['offset' => 0, 'limit' => '5']) ?>">5</option>
                <option <?= if_selected($limit, '10') ?> value="<?= query_add(['offset' => 0, 'limit' => '10']) ?>">10</option>
                <option <?= if_selected($limit, '20') ?> value="<?= query_add(['offset' => 0, 'limit' => '20']) ?>">20</option>
                <option <?= if_selected($limit, '50') ?> value="<?= query_add(['offset' => 0, 'limit' => '50']) ?>">50</option>
                <option <?= if_selected($limit, '100') ?> value="<?= query_add(['offset' => 0, 'limit' => '100']) ?>">100</option>
                <!-- <option> Новинки </option> -->
                <!-- <option> Акционные </option> -->
            </select>
            <select oninput="location.href = this.value">
                <option <?= if_selected($sorting, 'default') ?> value="<?= query_add(['offset' => 0, 'sorting' => 'default']) ?>">Сортировать</option>
                <option <?= if_selected($sorting, 'price_asc') ?> value="<?= query_add(['offset' => 0, 'sorting' => 'price_asc']) ?>"> От дешевых к дорогим </option>
                <option <?= if_selected($sorting, 'price_desc') ?> value="<?= query_add(['offset' => 0, 'sorting' => 'price_desc']) ?>"> От дорогих к дешевым </option>
                <option <?= if_selected($sorting, 'rating') ?> value="<?= query_add(['offset' => 0, 'sorting' => 'rating']) ?>"> Популярные </option>
                <option <?= if_selected($sorting, 'title') ?> value="<?= query_add(['offset' => 0, 'sorting' => 'title']) ?>"> По названию </option>
                <!-- <option> Новинки </option> -->
                <!-- <option> Акционные </option> -->
            </select>
            <div class="view-type">
                <input id="view_type1" type="radio" name="view_type" checked onchange="change_view_type()">
                <label for="view_type1"><i class="bi bi-grid"></i></label>
                <input id="view_type2" type="radio" name="view_type" onchange="change_view_type()">
                <label for="view_type2"><i class="bi bi-list"></i></label>
            <script>
                    function change_view_type(input) {
                        document.all.category_product_list.classList.toggle('list')
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="products" id="category_product_list">
    <?php foreach($products as $product): ?>
        <a class="product" href="?action=product&tab=1&id=<?= $product['id'] ?>">
            <div class="category-list-item-left">
                <img src="<?= get_product_image_src($product) ?>" alt="">
            </div>
            <div class="category-list-item-right">
                <h2 class="title category-title"><?= $product['title'] ?>[<?= $product['id'] ?>]</h2>
                <?php if(isset($product['old_price'])): ?>
                    <div class="old-price"><?= $product['old_price'] ?> ₴</div>
                <?php else: ?>
                    <div class="old-price no-style">&nbsp;</div>
                <?php endif; ?>
                <div class="price"><?php echo $product['price'] ?> ₴</div>
                <?php if($product['ends']): ?>
                    <div class="is-over">заканчивается</div>
                <?php else: ?>
                    <div class="is-over">&nbsp;</div>
                <?php endif; ?>
                <div class="rating">rating: <?= !empty($product['rating']) ? $product['rating'] : 0 ?></div>
                
                <?php if(!empty($product['fast_info']) && is_array($product['fast_info'])):  ?>
                    <ul class="fast-info">
                        <?php foreach($product['fast_info'] as $spec => $value): ?>
                            <li><?= $spec ?>: <span><?= $value ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if(!empty($product['finger_print']) && $product['finger_print']): ?>
                <div class="finger-print"><img src="images/finger-info.png" alt=""></div>
                <?php endif; ?>
            </div>
        </a>
    <?php endforeach ?>
    </div>
</div>