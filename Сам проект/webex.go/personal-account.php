<?php
// Проверка авторизации
session_start();
if(!isset($_SESSION['user'])){
  header("Location: /login.php");
}
?>

<?php include("block/header.php") ?>

<main class="personal-account" id="personal-account">

  <section class="title" id="title">
    <div class="container title">
      <h2 class="title-h2 title__h2">С возвращением, <?php echo $_SESSION['user']['name']; ?>!</h2>
      <a href="project-process.php" class="text-link btn blue-btn">Перейти к проекту</a>
    </div>
  </section>

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
