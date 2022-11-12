<?php
include("db.php");
session_start();

// Добавить в корзину
if(isset($_GET['tovar'])) {
  if (isset($_SESSION['user'])) {
    $id_tovar = $_GET['tovar'];
    $id_user = $_SESSION['user']['id'];
    $q = "INSERT INTO `basket` (`id_user`, `id_product`) VALUES ('$id_user', '$id_tovar');";
    // echo $q;
    $result = mysqli_query($connection, $q);
    header("Location: /personal-account.php");
  } else {
    header("Location: /login.php");
  }
}

// Удалить из корзины
if(isset($_GET['delTovar'])) {
  if (isset($_SESSION['user'])) {
    $id_tovar = $_GET['delTovar'];
    $id_user = $_SESSION['user']['id'];
    $q = "DELETE FROM `basket` WHERE `id_user` =  '$id_user' AND `id_product` = '$id_tovar';";
    // echo $q;
    $result = mysqli_query($connection, $q);
    header("Location: /personal-account.php");
  } else {
    header("Location: /login.php");
  }
}

// Регистрация пользователей - роль Админ
if(isset($_POST['reg-block__btn'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login'")) == 0) {
    $q = "INSERT INTO `users` (`name`, `login`, `password`, `phone`) VALUES ('$name', '$login', '$password', '$phone');";
    $result = mysqli_query($connection, $q);
    header("Location: /login.php");
  } else {
    header("Location: /login.php");
  }
}

// Авторизация пользователей
if(isset($_POST['login-block__btn'])){
  $login = $_POST['login'];
  $password = $_POST['password'];
  $q = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password'";
  $result = mysqli_query($connection, $q);
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user']['id'] = $user['id'];
    $_SESSION['user']['name'] = $user['name'];
    $_SESSION['user']['phone'] = $user['phone'];
    $_SESSION['user']['login'] = $user['login'];
    $_SESSION['user']['surname'] = $user['surname'];

    header("Location: /personal-account.php");
  } else {
    header("Location: /login.php");
  }
}

?>
