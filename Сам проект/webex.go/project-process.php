<?php
// Проверка авторизации
session_start();
if(!isset($_SESSION['user'])){
  header("Location: /login.php");
}
?>
<?php include("block/header.php") ?>

<main class="project-process" id="project-process">

  <section class="title" id="title">
    <div class="container title">
      <h1 class="title-h1 title__h1">Проект Kavarna</h1>
    </div>
  </section>

  <section class="main-status" id="main-status">
    <div class="container">
      <p class="text main-status__text">№: 1001</p>
      <p class="text main-status__text">Статус: Не завершен</p>
      <p class="text main-status__text">Этап: 1/7</p>
    </div>
  </section>

  <section class="process" id="process">
    <div class="container process__container">
      <div class="timeline">
        <ul class="timeline__list">
          <li class="timeline__item timeline__item--action">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 1: Проектирование</h3>
              <p class="text timeline__text">Проработка структуры сайта в виде схемы, состоящей из основных разделов, подразделов и примерного количества страниц; составление ТЗ.</p>
            </div>
            <p class="text timeline__text timeline__status">Завершено</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 2: Дизайн</h3>
              <p class="text timeline__text">Создание дизайн-макетов всех страниц сайта и их согласование.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 3: Вёрстка</h3>
              <p class="text timeline__text">Создание структуры гипертекстового документа при использовании таблиц стилей и клиентских сценариев для полного соответствия макету.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 4: Прогрммирование</h3>
              <p class="text timeline__text">Перенос сайта в CMS с внедрением всех необходимых плагинов или написание рукописного кода.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 5: Наполнение сайта</h3>
              <p class="text timeline__text">Заполнение сайта информацией и картинками.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 6: Заруск сайта в Интернете</h3>
              <p class="text timeline__text">Перенос проекта на хостинг, установка метрики и аналитики.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
          </li>
          <li class="timeline__item">
            <div class="timeline__content">
              <h3 class="title-h3 process__title">Этап 7: Тестирование сайта</h3>
              <p class="text timeline__text">Проверка работы сайта с различных устройств, исправление недочетов.</p>
            </div>
            <p class="text timeline__text timeline__status">В процессе</p>
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
