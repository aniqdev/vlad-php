<pre>
<?php
    // print_r($_GET);
    if(isset($_GET['open-modal'])){
        $show_modal = 'active';
    }else{
        $show_modal = '';
    }
?>
</pre>
<input type="checkbox" id="modal_login_checkbox">
<!-- <label for="modal_login_checkbox" class="label-dark-close"></label> -->
<div class="modal-login-wrapper js-open-modal <?= $show_modal ?>" id="modal_login" data-target="modal_login">
    <div class="modal-login">
        <div class="header">
            Вход
            <span class="close js-open-modal" data-target="modal_login">×</span>
            <a href="?" class="close" style="right: 74px;">×</a>
            <label for="modal_login_checkbox" class="label-close">×</label>
        </div>
        <div class="body">
            <form class="body-left" method="POST">
                <label for="modal_login_email" class="input-title">Email</label>
                <input name="email" class="input-email" type="text" id="modal_login_email">
                <!-- <input name="email" class="input-email wrong" type="email" id="modal_login_email"> -->
                <!-- <p class="input-wrong">Введен неверный адрес</p> -->
                <label for="modal_login_password" class="input-title">Password</label>
                <input name="password" class="input-password" type="password" id="modal_login_password">
                <div class="remember-wrapper">
                    <label>
                        <input class="remember-checkbox" type="checkbox">
                        <div class="my-checkbox"></div>
                        запомнить
                    </label>
                    <a href="#">Напомнить пароль</a>
                </div>
                <button type="submit" class="login-btn">Войти</button>
                <a href="#" class="register-link">Зарегистрироваться</a>
                <div class="or">или</div>
            </form>
            <div class="body-right">
                <div class="right-title">Войти как пользователь</div>
                <div class="enter-facebook">
                    <?php include 'svg/facebook.svg'; ?>
                    <a href="#">Facebook</a>
                </div>
                <div class="enter-google">
                    <?php include 'svg/google.svg'; ?>
                    <a href="#">Google</a>
                </div>
            </div>
        </div>
    </div>
</div>
