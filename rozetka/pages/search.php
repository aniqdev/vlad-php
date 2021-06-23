<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
<?php
    $result_arr = array_filter($similar_products, function($product)
    {
        $position = stripos($product['title'], $_GET['query']);
        // $position2 = stripos(@$product['sku'], $_GET['query']);
        if($position === false && @$product['sku'] !== $_GET['query']){
            return false;
        }else{
            return true;
        }
    });
    $count = count($result_arr);
  ?>

    <div class="main-container">
        <?php include 'blocks/sidebar.php' ?>
        <div class="main-content">
            <h2 class="block-title">Вы искали "<?= $_GET['query'] ?>"</h2>
            <h4><?= tovarov($count) ?></h4>
            <div class="products">
            <?php foreach($result_arr as $id => $product):
            
            ?>
            <div class="product-wrapper">
                <div class="product">
                <?php if($product['fav']): ?>
                    <div class="heart"></div>
                <?php else: ?>
                    <div class="heart heart-empty"></div>
                <?php endif; ?>
                <img
                    src="https://content1.rozetka.com.ua/goods/images/preview/66920866.jpg"
                    alt=""
                />
                <a href="?action=product&tab=1&id=<?= $id ?>" class="product-title">
                    <?= $product['title'] ?>
                </a>
                <?php if(isset($product['old_price'])): ?>
                    <div class="old-price"><?= $product['old_price'] ?></div>
                <?php else: ?>
                    <div class="old-price no-style">&nbsp;</div>
                <?php endif; ?>
                <div class="price"><?php echo $product['price'] ?></div>
                <?php if($product['ends']): ?>
                    <div class="is-over">заканчивается</div>
                <?php else: ?>
                    <div class="is-over">&nbsp;</div>
                <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

            </div><!-- /products -->
        </div>
    </div>