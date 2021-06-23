<?php if(!defined('ROOT')) die('Direct request not allowed!'); ?>
<div class="main-container">
    <?php include 'blocks/sidebar.php' ?>
    <div class="main-content">
    <div class="slim-slider">
        <div class="slim-slide" data-thumb="images/pic1.jpg">
        <img src="images/pic1.jpg" />
        </div>
        <div class="slim-slide" data-thumb="images/pic2.jpg">
        <img src="images/pic2.jpg" />
        </div>
        <div class="slim-slide" data-thumb="images/pic3.jpg">
        <img src="images/pic3.jpg" />
        </div>
        <div class="slim-slide" data-thumb="images/pic4.jpg">
        <img src="images/pic4.jpg" />
        </div>
    </div>

    <script>
        let Slider = new SlimSlider({
        selector: ".slim-slider",
        childsClassName: ".slim-slide",
        threshold: 15,
        dir: "ltr",
        showPointers: true,
        showButtons: true,
        showThumbnails: true,
        infinite: true,
        itemsPerSlide: 1,
        });
    </script>
    <h2 class="block-title" id="viewed">Просмотренные товары</h2>
    <div class="products">
    <?php foreach($similar_products as $id => $product):
        
        
    if(!empty($_GET['query'])){
        $position = stripos($product['title'], $_GET['query']);
        // $position2 = stripos(@$product['sku'], $_GET['query']);
        if($position === false && @$product['sku'] !== $_GET['query']){
        continue;
        }
    }
        
        
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
            <a href="?<?= 'action=product&tab=1&id=' . $id ?>" class="product-title">
            <?= $product['title'] ?>
            </a>
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
        </div>
        </div>
    <?php endforeach; ?>

    </div><!-- /products -->
    <h2 class="block-title">Новые видео на канале <a href="#">ROZETKA</a>
    <span class="youtube">YouTube</span></h2>
    <?php if(0): ?>
    <div class="new-videos">

        <div class="video-item">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uvq2DSQY-CU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-title">ЦЬОГО ВАМ НЕ РОЗПОВІДАЛИ ПРО AIRPODS MAX!</div>
            <div class="video-date">26 апреля 2021 г.</div>
        </div>

        <div class="video-item">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/u-4KDmcASsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-title">iMac, iPad Pro та AirTag | ВЕЛИКІ НОВИНИ #95</div>
            <div class="video-date">23 апреля 2021 г.</div>
        </div>

        <div class="video-item">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uvq2DSQY-CU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-title">ЦЬОГО ВАМ НЕ РОЗПОВІДАЛИ ПРО AIRPODS MAX!</div>
            <div class="video-date">26 апреля 2021 г.</div>
        </div>

        <div class="video-item">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/u-4KDmcASsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-title">iMac, iPad Pro та AirTag | ВЕЛИКІ НОВИНИ #95</div>
            <div class="video-date">23 апреля 2021 г.</div>
        </div>

    </div><!-- new-videos -->
    <?php endif ?>
    </div>
</div>
