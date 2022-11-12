<?php
include("connect.php");

// if(isset($_POST['add_user_btn'])){
//   $FIO = $_POST['FIO'];
//   $login = $_POST['login'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   $password_2 = $_POST['password_2'];
//   if($password === $password_2){
//     if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'")) == 0) {
//       $password = md5($password);
//       $q = "INSERT INTO `users` (`FIO`, `login`, `password`, `email`) VALUES ('$FIO', '$login', '$password', '$email');";
//       $result = mysqli_query($connect, $q);
//       header("Location: ../reg.php");
//     }
//   }
// }

if(isset($_POST['login-block__btn'])){
  $login = $_POST['login'];
  $password = md5($_POST['password']);
  $q = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = '$password'";
  $result = mysqli_query($connection, $q);
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user']['id'] = $user['id'];
    $_SESSION['user']['login'] = $user['login'];
    $_SESSION['user']['name'] = $user['name'];
    $_SESSION['user']['surname'] = $user['surname'];
    $_SESSION['user']['patronymic'] = $user['patronymic'];
    $_SESSION['user']['telephone'] = $user['telephone'];
    $_SESSION['user']['email'] = $user['email'];
    header("Location: /go_personal-account.php");
  }
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
