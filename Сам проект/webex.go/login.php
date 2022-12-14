<?php include("block/header.php") ?>

<main class="login" id="login">

  <section class="login-block" id="login-block">
    <div class="container login-block__container">
      <div class="login-block__decor">

        <div class="login-block__shape"></div>
        <div class="login-block__shape2"></div>

        <div class="login-block__content">
          <div class="title" id="title">
            <div class="container title">
              <h1 class="title-h1 title__h1 login-block__title">Авторизация</h1>
              <?php
              if(isset($_SESSION['error'])){
                echo '<p class="text text-error">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
              }
              ?>
            </div>
          </div>
          <form action="include/forms.php" method="post" class="login-block__form">
            <input class="input text login-block__input login-block__input--login" type="text" name="login" value="" placeholder="Введите логин" required>
            <input class="input text login-block__input login-block__input--password" type="password" name="password" value="" placeholder="Введите пароль" required>
            <input class="input btn blue-btn login-block__btn" type="submit" name="login-block__btn" value="Войти">
          </form>
        </div>

      </div>
    </div>
  </section>

  <!--
    sin0n - ksilin000i - manager
    sveta - sveta - staffer
    rat - zxc - client
   -->

</main>

<footer class="footer" id="footer">
  <div class="grid">
    <div class="grid__wrapper footer__contact">
      <div class="footer__block footer__block--left">
        <div class="logo footer__logo">
          <a href="/" class="text-link logo__link">
            <img src="img/logo.svg" alt="" class="img logo__img">
          </a>
        </div>
      </div>
      <div class="footer__block footer__block--center">
        <h2 class="title-h2 footer__title">Остались вопросы?</h2>
          <p class="text footer__text">Телефон</p>
          <a href="" class="text footer__text footer__text--link">+7 999 222 33 44</a>
          <p class="text footer__text">Почта</p>
          <a href="" class="text footer__text footer__text--link">info@webex.ru</a>
      </div>
      <div class="footer__block footer__block--right">
        <a href="" class="text footer__text footer__text--link">Telegram</a>
        <a href="" class="text footer__text footer__text--link">WhatsApp</a>
      </div>
    </div>
  </div>
  <div class="grid">
    <div class="grid__wrapper privacy-policy">
      <div class="privacy-policy__block">
        <a href="" class="text footer__text footer__text--link privacy-policy__text">политика конфиденциальности</a>
      </div>
      <div class="privacy-policy__block privacy-policy__block--right">
        <a href="" class="text footer__text footer__text--link privacy-policy__text">Copyright © 2022 Webex</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>
