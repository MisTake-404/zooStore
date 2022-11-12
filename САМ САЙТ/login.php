<?php include("block/header.php") ?>

<main class="login" id="login">

  <section class="login-block" id="login-block">
    <div class="container login-block__container">

      <div class="login-block__content">
        <div class="title" id="title">
          <div class="container title">
            <h1 class="title-h1 title__h1 login-block__title">Авторизация</h1>
          </div>
        </div>
        <form action="include/forms.php" method="post" class="login-block__form">
          <input class="input text login-block__input login-block__input--login" type="text" name="login" value="" placeholder="Введите логин" required>
          <input class="input text login-block__input login-block__input--password" type="password" name="password" value="" placeholder="Введите пароль" required>
          <input class="input btn blue-btn login-block__btn" type="submit" name="login-block__btn" value="Войти">
        </form>
      </div>

    </div>
  </section>

  <section class="login-block" id="login-block">
    <div class="container login-block__container">

      <div class="login-block__content">
        <div class="title" id="title">
          <div class="container title">
            <h1 class="title-h1 title__h1 login-block__title">Регистрация</h1>
          </div>
        </div>
        <form action="include/forms.php" method="post" class="login-block__form">
          <input class="input text login-block__input login-block__input--login" type="text" name="name" value="" placeholder="Введите имя" required>
          <input class="input text login-block__input login-block__input--login" type="text" name="phone" value="" placeholder="Введите телефон" required>
          <input class="input text login-block__input login-block__input--login" type="text" name="login" value="" placeholder="Введите логин" required>
          <input class="input text login-block__input login-block__input--password" type="password" name="password" value="" placeholder="Введите пароль" required>
          <input class="input btn blue-btn login-block__btn" type="submit" name="reg-block__btn" value="Зарегистрироваться">
        </form>
      </div>

    </div>
  </section>

</main>

<?php include("block/footer.php") ?>
