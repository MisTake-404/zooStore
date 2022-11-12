<?php
// Проверка авторизации
session_start();
if(!isset($_SESSION['user'])){
  header("Location: /login.php");
}
?>
<?php include("block/header.php") ?>

<main class="admin-panel" id="admin-panel">

  <section class="title" id="title">
    <div class="container title">
      <h1 class="title-h1 title__h1">Панель администратора</h1>
    </div>
  </section>

  <!--
      Админ
        btn-status
        btn-reg-all
        deactivate-client
        deactivate-staffer
        deactivate-manager

        Просмотр всего контента
        Изменение статуса проекта
        Регистрация пользователей (руководитель, сотрудник, клиент)
        Создание проекта
        Удаления пользователей
        Удаление проекта

      Руководитель
        btn-status
        btn-reg-manager
        deactivate-client
        deactivate-staffer

        Просмотр всего контента
        Изменение статуса проекта
        Регистрация пользователей (сотрудник, клиент)
        Создание проекта
        Удаления пользователей
        Удаление проекта

      Сотрудник
        btn-status
        btn-reg-staffer

        Просмотр всего контента
        Изменение статуса проекта
        Регистрация пользователей (клиент)
        Создание проекта

      Клиент
        Просмотр своего проекта
  -->

  <section class="ap-admin-panel" id="ap-admin-panelt">

    <!-- Админ -->
    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Статус проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <select class="input ap-admin-panel__select" name="id_project">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите проект</option>
            <option class="input text ap-admin-panel__input" value="id1">Kavarna</option>
            <option class="input text ap-admin-panel__input" value="id2">BrowserMoney</option>
          </select>
          <select class="input ap-admin-panel__select" name="step">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите этап</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 1</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 2</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 3</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 4</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 5</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 6</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 7</option>
          </select>
          <select class="input ap-admin-panel__select" name="id_project">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите статус</option>
            <option class="input text ap-admin-panel__input" value="1">Завершен</option>
            <option class="input text ap-admin-panel__input" value="0">В процессе</option>
          </select>
          <input class="input btn  ap-admin-panel__input" type="submit" name="btn-status" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container" id="btn-reg-all">
      <h2 class="title-h2 ap-admin-panel__title">Регистрация пользователей</h2>

      <div class="ap-admin-panel__content">
        <form method="post" action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <?php
          if(isset($_SESSION['error_btn-reg-all'])){
            echo '<p class="text text-error">' . $_SESSION['error_btn-reg-all'] . '</p>';
            unset($_SESSION['error_btn-reg-all']);
          }
          if(isset($_SESSION['success_btn-reg-all'])){
            echo '<p class="text text-success">' . $_SESSION['success_btn-reg-all'] . '</p>';
            unset($_SESSION['success_btn-reg-all']);
          }
          ?>
          <input class="input text application__input" type="text" name="name" value="" placeholder="Имя" required>
          <input class="input text application__input" type="text" name="surname" value="" placeholder="Фамилия" required>
          <input class="input text application__input" type="text" name="patronymic" value="" placeholder="Отчество">
          <input class="input text application__input" type="text" name="phone" value="" placeholder="Телефон" required>
          <input class="input text application__input" type="email" name="email" value="" placeholder="Почта" required>
          <input class="input text application__input" type="text" name="login" value="" placeholder="Логин" required>
          <input class="input text application__input" type="password" name="password" value="" placeholder="Пароль" required>
          <select class="input ap-admin-panel__select" name="permission">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите уровень прав</option>
            <option class="input text ap-admin-panel__input" value="client">Клиент</option>
            <option class="input text ap-admin-panel__input" value="staffer">Сотрудник</option>
            <option class="input text ap-admin-panel__input" value="manager">Руководитель</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-reg-all" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Создание проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <input class="input text application__input" type="text" name="title" value="" placeholder="Название проекта">
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Илья</option>
            <option class="input text ap-admin-panel__input" value="2">Илья</option>
            <option class="input text ap-admin-panel__input" value="3">Илья</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-new-project" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Удаление проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <select class="input ap-admin-panel__select" name="id_project">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите проект</option>
            <option class="input text ap-admin-panel__input" value="id1">Kavarna</option>
            <option class="input text ap-admin-panel__input" value="id2">BrowserMoney</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-new-project" value="Удалить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Деактивация учетных записей</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <p class="text ap-admin-panel__text">Клиенты</p>
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Илья</option>
            <option class="input text ap-admin-panel__input" value="2">Илья</option>
            <option class="input text ap-admin-panel__input" value="3">Илья</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="deactivate-client" value="Деактивировать">
        </form>

        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <p class="text ap-admin-panel__text">Сотрудники</p>
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Света</option>
            <option class="input text ap-admin-panel__input" value="2">Света</option>
            <option class="input text ap-admin-panel__input" value="3">Света</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="deactivate-staffer" value="Деактивировать">
        </form>

        <form action="include/forms.php" class="ap-admin-panel__form"  onsubmit="return confirm('Вы уверены что хотите выполнить это действие? Пути назад не будет..');">
          <p class="text ap-admin-panel__text">Руководители</p>
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Лера</option>
            <option class="input text ap-admin-panel__input" value="2">Лера</option>
            <option class="input text ap-admin-panel__input" value="3">Лера</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="deactivate-manager" value="Деактивировать">
        </form>
      </div>
    </div>

    <!-- Руководитель -->
    <!-- <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Статус проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <select class="input ap-admin-panel__select" name="id_project">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите проект</option>
            <option class="input text ap-admin-panel__input" value="id1">Kavarna</option>
            <option class="input text ap-admin-panel__input" value="id2">BrowserMoney</option>
          </select>
          <select class="input ap-admin-panel__select" name="step">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите этап</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 1</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 2</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 3</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 4</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 5</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 6</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 7</option>
          </select>
          <select class="input ap-admin-panel__select" name="id_status">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите статус</option>
            <option class="input text ap-admin-panel__input" value="1">Завершен</option>
            <option class="input text ap-admin-panel__input" value="0">В процессе</option>
          </select>
          <input class="input btn  ap-admin-panel__input" type="submit" name="btn-status" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Регистрация пользователей</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <input class="input text application__input" type="text" name="name" value="" placeholder="Имя">
          <input class="input text application__input" type="text" name="surname" value="" placeholder="Фамилия">
          <input class="input text application__input" type="text" name="patronymic" value="" placeholder="Отчество">
          <input class="input text application__input" type="text" name="phone" value="" placeholder="Телефон">
          <input class="input text application__input" type="email" name="email" value="" placeholder="Почта">
          <input class="input text application__input" type="text" name="login" value="" placeholder="Логин">
          <input class="input text application__input" type="text" name="password" value="" placeholder="Пароль">
          <select class="input ap-admin-panel__select" name="permission">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите уровень прав</option>
            <option class="input text ap-admin-panel__input" value="client">Клиент</option>
            <option class="input text ap-admin-panel__input" value="staffer">Сотрудник</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-reg-manager" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Создание проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <input class="input text application__input" type="text" name="title" value="" placeholder="Название проекта">
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Илья</option>
            <option class="input text ap-admin-panel__input" value="2">Илья</option>
            <option class="input text ap-admin-panel__input" value="3">Илья</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-new-project" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Удаление проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <select class="input ap-admin-panel__select" name="id_project">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите проект</option>
            <option class="input text ap-admin-panel__input" value="id1">Kavarna</option>
            <option class="input text ap-admin-panel__input" value="id2">BrowserMoney</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-new-project" value="Удалить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Деактивация учетных записей</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <p class="text ap-admin-panel__text">Клиенты</p>
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Илья</option>
            <option class="input text ap-admin-panel__input" value="2">Илья</option>
            <option class="input text ap-admin-panel__input" value="3">Илья</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="deactivate-client" value="Деактивировать">
        </form>

        <form action="include/forms.php" class="ap-admin-panel__form">
          <p class="text ap-admin-panel__text">Сотрудники</p>
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Света</option>
            <option class="input text ap-admin-panel__input" value="2">Света</option>
            <option class="input text ap-admin-panel__input" value="3">Света</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="deactivate-staffer" value="Деактивировать">
        </form>
      </div>
    </div> -->

    <!-- Сотрудник -->
    <!-- <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Статус проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите проект</option>
            <option class="input text ap-admin-panel__input" value="id1">Kavarna</option>
            <option class="input text ap-admin-panel__input" value="id2">BrowserMoney</option>
          </select>
          <select class="input ap-admin-panel__select" name="step">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите этап</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 1</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 2</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 3</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 4</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 5</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 6</option>
            <option class="input text ap-admin-panel__input" value="id1">Этап 7</option>
          </select>
          <select class="input ap-admin-panel__select" name="id_status">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите статус</option>
            <option class="input text ap-admin-panel__input" value="1">Завершен</option>
            <option class="input text ap-admin-panel__input" value="0">В процессе</option>
          </select>
          <input class="input btn  ap-admin-panel__input" type="submit" name="btn-status" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Регистрация пользователей</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <input class="input text application__input" type="text" name="name" value="" placeholder="Имя">
          <input class="input text application__input" type="text" name="surname" value="" placeholder="Фамилия">
          <input class="input text application__input" type="text" name="patronymic" value="" placeholder="Отчество">
          <input class="input text application__input" type="text" name="phone" value="" placeholder="Телефон">
          <input class="input text application__input" type="email" name="email" value="" placeholder="Почта">
          <input class="input text application__input" type="text" name="login" value="" placeholder="Логин">
          <input class="input text application__input" type="text" name="password" value="" placeholder="Пароль">
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-reg-staffer" value="Сохранить">
        </form>
      </div>
    </div>

    <div class="container ap-admin-panel__container">
      <h2 class="title-h2 ap-admin-panel__title">Создание проекта</h2>

      <div class="ap-admin-panel__content">
        <form action="include/forms.php" class="ap-admin-panel__form">
          <input class="input text application__input" type="text" name="title" value="" placeholder="Название проекта">
          <select class="input ap-admin-panel__select" name="id_user">
            <option class="input text ap-admin-panel__input" value="" disabled>Выберите пользователя</option>
            <option class="input text ap-admin-panel__input" value="1">Илья</option>
            <option class="input text ap-admin-panel__input" value="2">Илья</option>
            <option class="input text ap-admin-panel__input" value="3">Илья</option>
          </select>
          <input class="input btn ap-admin-panel__input" type="submit" name="btn-new-project" value="Сохранить">
        </form>
      </div>
    </div>
  -->

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
