<?php
include("db.php");
session_start();

// Регистрация пользователей - роль Админ
if(isset($_POST['btn-reg-all'])){
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $patronymic = $_POST['patronymic'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $permission = $_POST['permission'];
  if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login'")) == 0) {
    $password = md5($password);
    $q = "INSERT INTO `users` (`name`, `surname`, `patronymic`, `login`, `password`, `email`, `phone`, `permission`) VALUES ('$name', '$surname', '$patronymic', '$login', '$password', '$email', '$phone', '$permission');";
    $result = mysqli_query($connection, $q);
    $_SESSION['success_btn-reg-all']= "Пользователь добавлен";
    header("Location: /admin-panel.php#btn-reg-all");
  } else {
    $_SESSION['error_btn-reg-all'] = "Такой логин уже зарегистрирован";
    header("Location: /admin-panel.php#btn-reg-all");
  }
}

// Авторизация пользователей
if(isset($_POST['login-block__btn'])){
  $login = $_POST['login'];
  $password = md5($_POST['password']);
  $ip = $_SERVER['SERVER_ADDR'];
  $q = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password'";
  $result = mysqli_query($connection, $q);
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user']['id'] = $user['id'];
    $_SESSION['user']['login'] = $user['login'];
    $_SESSION['user']['permission'] = $user['permission'];
    $_SESSION['user']['surname'] = $user['surname'];
    $_SESSION['user']['name'] = $user['name'];
    $_SESSION['user']['patronymic'] = $user['patronymic'];
    $_SESSION['user']['telephone'] = $user['telephone'];
    $_SESSION['user']['email'] = $user['email'];

    $id = $user['id'];
    $qIp = "UPDATE `users` SET `ip` = '$ip' WHERE `id` = $id";
    $result = mysqli_query($connection, $qIp);
    header("Location: /personal-account.php");
  } else {
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: /login.php");
  }
}

// Панель управления - роль Админ

// Новый проект
if(isset($_POST['btn-new-project'])){
  $title = $_POST['title'];
  $id_client = $_POST['id_client'];
  $date = date("d/m/Y H:i:s");
  $timestamp = strtotime($date);
  $date_formated = date('Y-m-d H:i:s', $timestamp);
  $date = $date_formated;
  $q = "INSERT INTO `projects` (`title`, `status`, `part`, `id_client`, `date`)  VALUES ('$title', 'Зарегистрирован', '0', '$id_client', '$date');";
  $result = mysqli_query($connection, $q);
  if ($result === true) {
    $_SESSION['success_btn-new-project'] = "Проект успешно создан. Продуктивной вам работы!";
  } else {
    $_SESSION['error_btn-new-project'] = "Возникла непредвиденная ошибка, обратитесь к администратору сайта.";
  }
  header("Location: /admin-panel.php#btn-new-project");
}

// Смена статуса проекта
if(isset($_POST['btn-status'])){
  $id = $_POST['id_project'];
  $step = $_POST['step'];
  $status = $_POST['status'];
  $q = "UPDATE `projects` SET `part` = '$step', `status` = '$status' WHERE `id` = $id";
  $result = mysqli_query($connection, $q);
  if ($result === true) {
    $_SESSION['success_btn-status'] = "Статус проекта был изменен";
  } else {
    $_SESSION['error_btn-status'] = "Возникла непредвиденная ошибка, обратитесь к администратору сайта.";
  }
  header("Location: /admin-panel.php#btn-status");
}

// Удаление проекта
if(isset($_POST['btn-del-project'])){
  $id = $_POST['id_project'];
  $q = "DELETE FROM `projects` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $q);
  if ($result === true) {
    $_SESSION['success_btn-status'] = "Проект был удален";
  } else {
    $_SESSION['error_btn-status'] = "Возникла непредвиденная ошибка, обратитесь к администратору сайта.";
  }
  header("Location: /admin-panel.php#btn-del-project");
}

// if(isset($_POST['new_task_btn'])){
//   $title = $_POST['title'];
//   $text = $_POST['text'];
//   $cat_id = $_POST['cat_id'];
//   $user_id = $_SESSION['user']['id'];
//   $q = "INSERT INTO `tasks` (`title`, `text`, `cat_id`, `user_id`) VALUES ('$title', '$text', $cat_id, $user_id)";
//   $result = mysqli_query($connect, $q);
//   header("Location: ../user.php");
// }

?>
