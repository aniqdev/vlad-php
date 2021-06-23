<div class="left-menu-wrapper js-open-modal" data-target="left_menu" id="left_menu">
<div class="left-menu">
    <div class="left-menu-header">
        <img src="svg/logo_n.svg" alt="">
        <div class="left-menu-close js-open-modal" data-target="left_menu">×</div>
    </div>
    <div class="left-menu-profile">
        <a class="left-menu-avatar">
            <?php if($avatar_exists = false): ?>
                <img src="" alt="">
            <?php else: ?>
                <span>A</span>
            <?php endif ?>
        </a>
        <div class="left-menu-user">
            <h3>Андрей Новосад</h3>
            <p>nameaniq@gmail.com</p>
        </div>
    </div>
    <a class="left-menu-premium">
        <h3>premium</h3>
        <p>Бесплатная доставка весь год</p>
    </a>
    <ul class="left-menu-main-nav">
        <li><a href="#"><i class="bi bi-menu-button-fill"></i>Каталог товаров</a></li>
        <!-- <li><a href="#">Мои заказы</a></li> -->
        <li><a href="#"><i class="bi bi-cart3"></i>Корзина</a></li>
        <li><a href="#"><i class="bi bi-signpost-2"></i>Сравнение</a></li>
        <li><a href="#"><i class="bi bi-journal-text"></i>Справочный центр</a></li>
        <li><a href="tel:+38 044 537-02-22"><i class="bi bi-telephone-forward"></i>+38 044 537-02-22</a></li>
    </ul>
    <div class="left-menu-langs">
        <h3>Язык</h3>
        <div class="inputs">
            <input name="lang" type="radio" id="input-lang-ru" checked>
            <label for="input-lang-ru">RU</label>
            <input name="lang" type="radio" id="input-lang-ua">
            <label for="input-lang-ua">UA</label>
        </div>
    </div>
    <div class="left-menu-city">
        <h3>Город</h3>
        <select name="" id="">
            <option value="">Днепр</option>
            <option value="">Киев</option>
            <option value="">Харьков</option>
            <option value="">Львов</option>
            <option value="">Одесса</option>
        </select>
    </div>
    <div class="left-menu-sub-nav">

    </div>
    <div class="left-menu-sub-nav">
        <input class="left-menu-checkbox" type="checkbox" id="left-menu-checkbox1">
        <label for="left-menu-checkbox1"><?php include 'svg/left-menu-arrow.svg' ?></label>
        <h3>Сервисы</h3> 
        <ul class="left-menu-sub-nav-services">
            <li><a href="#"> Бонусный счёт </a></li>
            <li><a href="#"> Rozetka Premium </a></li>
            <li><a href="#"> Подарочные сертификаты </a></li>
            <li><a href="#"> Rozetka Обмен </a></li>
            <li><a href="#"> Туры и отдых </a></li>
        </ul>
    </div>
    <div class="left-menu-sub-nav">
        <input class="left-menu-checkbox" type="checkbox" id="left-menu-checkbox2">
        <label for="left-menu-checkbox2"><?php include 'svg/left-menu-arrow.svg' ?></label>
        <h3>Сервисы</h3> 
        <ul class="left-menu-sub-nav-services">
            <li><a href="#"> Бонусный счёт </a></li>
            <li><a href="#"> Rozetka Premium </a></li>
            <li><a href="#"> Подарочные сертификаты </a></li>
            <li><a href="#"> Rozetka Обмен </a></li>
            <li><a href="#"> Туры и отдых </a></li>
        </ul>
    </div>
    <div class="left-menu-apps">
        <h3>Скачивайте наши приложения</h3>
        <img src="svg/button-google-play-ru.svg" alt="">
        <img src="svg/button-appstore-ru.svg" alt="">
    </div>
    <div class="left-menu-socials">

    </div>
    <div class="left-menu-logout">

    </div>
</div>
</div>