<?php if(!defined('ROOT'))  die('Direct request not allowed!'); ?>
<div class="tab-content">
    <div class="product-info">
        <div class="product-images">
            <div class="badges">
                <div class="top-sale">Топ продаж</div>
                <div class="sale">sale</div>
            </div>

            <div class="right-badges">
                <div class="delivery">
                    <?php include 'svg/freedelivery.svg' ?>
                    <div class="delivery-text">Бесплатная <br> доставка </br> от 200 ₴ </div>
                </div>
                <div class="delivery">
                    <?php include 'svg/freedelivery.svg' ?>
                    <div class="delivery-text">Бесплатная <br> доставка </br> от 200 ₴ </div>
                </div>
            </div>

            <div class="img-prev img-prev1">
                <a href="https://content1.rozetka.com.ua/goods/images/big/66920866.jpg" data-fancybox="gallery">
                    <img src="https://content1.rozetka.com.ua/goods/images/preview/66920866.jpg" alt="">
                </a>
            </div>
            <div class="img-prev img-prev2">
                <a href="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" data-fancybox="gallery">
                    <img src="https://content.rozetka.com.ua/goods/images/preview/66920870.jpg" alt="">
                </a>
            </div>
            <div class="img-prev img-prev3">
                <a href="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" data-fancybox="gallery">
                    <img src="https://content.rozetka.com.ua/goods/images/preview/66920870.jpg" alt="">
                </a>
            </div>
            <div class="img-prev img-prev4">
                <a href="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" data-fancybox="gallery">
                    <img src="https://content.rozetka.com.ua/goods/images/preview/66920870.jpg" alt="">
                </a>
            </div>
            <div class="img-prev img-prev5">
                <a href="https://content1.rozetka.com.ua/goods/images/big/66920887.jpg" data-fancybox="gallery">
                    <img src="https://content1.rozetka.com.ua/goods/images/preview/66920887.jpg" alt="">
                </a>
            </div>
            <div class="main-image">
                <img class="img1" src="https://content1.rozetka.com.ua/goods/images/big/66920866.jpg" alt="">
                <img class="img2" src="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" alt="">
                <img class="img3" src="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" alt="">
                <img class="img4" src="https://content.rozetka.com.ua/goods/images/big/66920870.jpg" alt="">
                <img class="img5" src="https://content1.rozetka.com.ua/goods/images/big/66920887.jpg" alt="">
            </div>
        </div>
        <div class="product-options">
            <div class="stock-status">
                <div class="instock">
                    <?php include 'svg/ok.svg' ?>
                    В наличии
                </div>
                <!-- <div class="sprite"></div> -->
                <div class="product-about">
                    <div class="trade">
                        <div class="price">
                            <?php if(empty($product['old_price'])): ?>
                                <?= $product['price'] ?> ₴
                            <?php else: ?>
                                <span class="reg-price"><?= $product['price'] ?> ₴</span>
                                <span class="old-price"><?= $product['old_price'] ?> ₴</span>
                            <?php endif; ?>
                        </div>
                        <div class="add-to-cart">
                            <?php include 'svg/cart.svg' ?>    
                            Купить
                        </div>
                        <div class="buy-credit">Купить в кредит</div>
                        <div class="compare">
                            <?php include 'svg/icon-compare.svg' ?>
                        </div>
                        <div class="favorite">
                            <?php include 'svg/heart-empty.svg' ?>
                        </div>
                    </div>
                    <div class="bonuses">
                        <?php include 'svg/icon-bonus-premium.svg' ?>
                        <b>+ 14 бонусных ₴ </b>&nbsp; при покупке этого товара &nbsp;<a href="#"> для владельцев Premium</a>
                    </div>
                </div>
                <div class="specs">
                    <h2>Характеристики</h2>
                    <ul class="fast-info">
                    <?php foreach($product['fast_info'] as $spec => $value): ?>
                        <li>
                            <span class="spec-name"><s><?= $spec ?>:</s></span>
                            <span class="spec-value"><?= $value ?></span>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <div class="product-bottom">
        <div class="description">
            <h2>Описание</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ab, asperiores consequatur ea reprehenderit. Officia qui aliquid, quo, consectetur tenetur aperiam, asperiores quos deserunt repellat quod a sed harum?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione saepe cumque aliquam autem est cupiditate. Eos, in. Consequuntur modi, repellendus odit quae commodi nesciunt molestiae minus, itaque quibusdam magni numquam?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aliquam vero repudiandae obcaecati perspiciatis porro doloribus quae ipsa nihil. Adipisci, natus molestiae quis neque nisi fugit culpa excepturi dicta tempore.</p>
        </div>
        <div class="reviews">
            <h2>Отзывы покупателей</h2>
            <div class="review-block">
                <div class="review-head">Жанна Аркадьевна <span class="date"><i class="bi bi-clock"></i> 19 сентября 2019</span></div>
                <div class="review-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae id consequatur inventore expedita esse incidunt corrupti maxime aliquam labore libero, nam excepturi officia harum non, nemo laudantium veritatis perspiciatis quasi.
                </div>
            </div>
            <div class="review-block">
                <div class="review-head">Жанна Аркадьевна <span class="date"><i class="bi bi-clock"></i> 19 сентября 2019</span></div>
                <div class="review-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae id consequatur inventore expedita esse incidunt corrupti maxime aliquam labore libero, nam excepturi officia harum non, nemo laudantium veritatis perspiciatis quasi.
                </div>
            </div>
            <div class="review-block">
                <div class="review-head">Жанна Аркадьевна <span class="date"><i class="bi bi-clock"></i> 19 сентября 2019</span></div>
                <div class="review-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae id consequatur inventore expedita esse incidunt corrupti maxime aliquam labore libero, nam excepturi officia harum non, nemo laudantium veritatis perspiciatis quasi.
                </div>
            </div>
        </div>
    </div>

</div>