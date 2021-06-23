<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
<pre>
<?php
$product_id = $_GET['id'];
$product = $similar_products[$product_id];
// print_r($_GET);
// print_r($similar_products);
// print_r($product);
?>
</pre>
<div class="product-page">
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
            <a href="#" class="breadcrumb-link">Компьютеры и ноутбуки</a>
        </li>
        <li class="breadcrumb-devider">
            <?php include 'svg/breadcrumb-arrow.svg' ?>
        </li>
        <li class="breadcrumb-item">
            <a href="#" class="breadcrumb-link">Ноутбуки</a>
        </li>
        <li class="breadcrumb-devider">
            <?php include 'svg/breadcrumb-arrow.svg' ?>
        </li>
        <li class="breadcrumb-item">
            <a href="#" class="breadcrumb-link">Ноутбуки HP</a>
        </li>
    </ul>

    <div class="product-title"><?= $product['title'] ?></div>

    <div class="under-title">
        <div class="rating">
            <div class="stars">
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <span class="star <?php echo $product['rating'] < $i ? 'empty' : '' ?>"></span>
                <?php endfor; ?>
            </div>
            <a href="#">28 отзывов</a>
        </div>
        <div class="sku">
            <small>Код:</small><?php echo $product['sku'] ?>
        </div>
    </div>

    <div class="product-tabs-wrapper">
        <ul class="product-tabs" id="product_tabs">
            <li class="product-tabs-item <?= is_tab_active(1) ?>">
                <a href="?action=product&id=1&tab=1"> Все о товаре </a>
                </li>
            <li class="product-tabs-item <?= is_tab_active(2) ?>">
                <a href="?action=product&id=1&tab=2"> Характеристики </a>
                </li>
            <?php if($product['reviews']): ?>
            <li class="product-tabs-item <?= is_tab_active(3) ?>">
                <a href="?action=product&id=1&tab=3"> Отзывы </a>
                <span class="tabs-reviews"><?= $product['reviews'] ?></span>
            </li>
            <?php else: ?>
            <li class="product-tabs-item <?= is_tab_active(3) ?>">
                <a href="?tab=3"> Оставить отзыв </a>
            </li>
            <?php endif; ?>
            <?php if(isset($product['questions']) && $product['questions']): ?>
            <li class="product-tabs-item <?= is_tab_active(4) ?>">
                <a href="?tab=4"> Вопросы </a>
                <span class="tabs-questions"><?= $product['questions'] ?></span>
            </li>
            <?php else: ?>
            <li class="product-tabs-item <?= is_tab_active(4) ?>">
                <a href="?tab=4"> Задать вопрос </a>
            </li>
            <?php endif; ?>
            <li class="product-tabs-item <?= is_tab_active(5) ?>">
                <a href="?tab=5"> Видеообзор </a>
            </li>
            <li class="product-tabs-item <?= is_tab_active(6) ?>"><a href="?tab=6"> Фото </a></li>
            <li class="product-tabs-item <?= is_tab_active(7) ?>"><a href="?tab=7"> Покупают вместе </a></li>
        </ul>
    </div>

    <div class="tabs-wrapper">
        <?php if(isset($_GET['tab']) && $_GET['tab'] == 1): ?>
            <?php include 'tabs/tab1.php' ?>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 2): ?>
            <div class="tab-content">Тут будет: Характеристики</div>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 3): ?>
            <div class="tab-content">Тут будет: Отзывы</div>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 4): ?>
            <div class="tab-content">Тут будет: Вопросы</div>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 5): ?>
            <div class="tab-content">Тут будет: Видеообзор</div>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 6): ?>
            <div class="tab-content">Тут будет: Фото</div>
        <?php elseif(isset($_GET['tab']) && $_GET['tab'] == 7): ?>
            <div class="tab-content">Тут будет: Покупают вместе</div>
        <?php endif ?>
    </div>


</div> 