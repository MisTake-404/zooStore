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

  <title>WEBEX</title>

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
          <img src="img/logo.svg" alt="" class="img logo__img">
        </a>
      </div>

      <nav class="header__nav">
        <ul class="menu header__menu">
          <!-- Если не авторизован -->
          <?php if(!isset($_SESSION['user'])){
            ?>
            <li><a href="/" class="text-link menu__item menu__item--active">Главная</a></li>
            <li><a href="login.php" class="text-link menu__item">Личный кабинет</a></li>
            <?php
          } ?>

          <!-- Если клиент -->
          <?php if(isset($_SESSION['user']) && $_SESSION['user']['permission'] == "client") {
            ?>
            <li><a href="/" class="text-link menu__item menu__item--active">Главная</a></li>
            <li><a href="personal-account.php" class="text-link menu__item">Личный кабинет</a></li>
            <li><a href="project-process.php" class="text-link menu__item menu__item">Мой заказ</a></li>
            <li><a href="../include/logout.php" class="text-link menu__item">Выйти</a></li>
            <?php
          } ?>

          <!-- Если сотрудник -->
          <?php if(isset($_SESSION['user']) &&
          ($_SESSION['user']['permission'] == "staffer" ||
          $_SESSION['user']['permission'] == "manager" ||
          $_SESSION['user']['permission'] == "admin")) {
            ?>
            <li><a href="/" class="text-link menu__item menu__item--active">Главная</a></li>
            <li><a href="project-company.php" class="text-link menu__item menu__item">Проекты</a></li>
            <li><a href="../include/logout.php" class="text-link menu__item">Выйти</a></li>
            <?php
          } ?>
        </ul>
      </nav>
    </div>
  </header>
