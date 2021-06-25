<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
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
    <div class="pagination">
        <a href="#" class="prev"></a>
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
        <a href="#" class="next"></a>
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