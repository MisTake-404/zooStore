<?php require "include/connect.php"; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="telephone=no" name="format-detection">
  <meta name="HandheldFriendly" content="true">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
  <meta name="google" value="notranslate">
	<meta name="robots" content="index,follow" />

	<meta name="description" content="Описание страницы">
	<meta name="keywords" content="ключевое слово 1, ключевое слово 2, ключевое слово 3…" />
	<meta name="author" content="Author site">
	<meta name="copyright" content="Copyright site">

  <title>ZOO</title>

  <link rel="icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/main.min.css" />
</head>
<body>

<header class="header" id="header">
  <div class="container header__container">
    <div class="menu-burger__header">
      <span></span>
    </div>

    <div class="logo header__logo">
      <a href="/" class="text-link logo__link">
        <img src="img/logo.png" alt="" class="img logo__img">
      </a>
    </div>

    <nav class="header__nav">
      <ul class="menu header__menu">
        <li><a href="index.php" class="text-link menu__item">Главная</a></li>
        <li><a href="products.php" class="text-link menu__item">Каталог</a></li>
        <!-- <li><a href="login.php" class="text-link menu__item">Авторизация</a></li> -->

          <?php if(isset($_SESSION['user'])){
            ?>
            <li><a href="personal-account.php" class="text-link menu__item">Личный кабинет</a></li>
            <li><a href="../include/logout.php" class="text-link menu__item">Выйти</a></li>
            <?php
          } else {
            ?>
            <li><a href="login.php" class="text-link menu__item">Личный кабинет</a></li>
            <?php
          }
          ?>
      </ul>
    </nav>
  </div>
</header>
