<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
<?php
$offset = $_GET['offset'] ?? 0;
$limit = $_GET['limit'] ?? 10;
$total_count = count($similar_products);
// [1,2,3,4,4,5,6,6,7,7,8]
$similar_products = array_slice($similar_products, $offset, $limit);
$product_count = count($similar_products);
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
            Показано <?= $product_count ?> товар<?= sklonenie($product_count, '', 'а', 'ов') ?>
        </div>
        <div class="sorting">

        </div>
    </div>
    <div class="products">
    <?php foreach($similar_products as $id => $product): ?>
        <a class="product" href="?action=product&tab=1&id=<?= $id ?>">
            <img src="<?= get_random_img_src() ?>" alt="">
            <h2 class="title category-title">Product title</h2>
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
        </a>
    <?php endforeach ?>
    </div>
</div>