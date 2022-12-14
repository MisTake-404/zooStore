<?php
// Проверка авторизации
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['permission'] == "client"){
  header("Location: /login.php");
}
?>
<?php include("block/header.php") ?>

<main class="project-company" id="project-company">

  <section class="title" id="title">
    <div class="container title">
      <h1 class="title-h1 title__h1">Проекты</h1>
    </div>
  </section>

  <section class="all-projects" id="all-projects">
    <div class="container all-projects__container">
      <div class="grid">
        <ul class="grid__wrapper all-projects__list">
          <li class="all-projects__item">
            <div class="main-status main-status__all-projects">
              <h2 class="title-h2 title__h2">Kavarna</h2>
              <p class="text main-status__text">№: 1002</p>
              <p class="text main-status__text">Статус: Не завершен</p>
              <p class="text main-status__text">Этап: 1/7</p>
              <p class="text main-status__text">04.11.2022</p>
              <a href="project-process.php" class="text-link btn blue-btn all-projects__btn">Просмотр</a>
              <a href="admin-panel.php" class="text-link btn blue-btn">Редактирование</a>
            </div>
          </li>
          <li class="all-projects__item">
            <div class="main-status main-status__all-projects">
              <h2 class="title-h2 title__h2">BrowserMoney</h2>
              <p class="text main-status__text">№: 1001</p>
              <p class="text main-status__text">Статус: Завершен</p>
              <p class="text main-status__text">Этап: 7/7</p>
              <p class="text main-status__text">01.10.2022</p>
              <a href="go_project-process.html" class="text-link btn blue-btn all-projects__btn">Просмотр</a>
              <a href="go_admin-panel.html" class="text-link btn blue-btn">Редактирование</a>
            </div>
          </li>
        </ul>
      </div>
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
