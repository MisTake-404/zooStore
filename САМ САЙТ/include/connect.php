<?php
include("db.php");

//Вывод ошибки при неудачном подключении
if($connection == false){
  echo "Не удалось подключиться к базе данных<br>";
  echo mysqli_connect_error();
  exit();
}

// Для вывода информации
// $users_q = mysqli_query($connection, "SELECT * FROM `users` WHERE `permission` = 'client' ORDER BY `id` DESC");
// $users_client = array();
// while ($user = mysqli_fetch_assoc($users_q)) {
//   $users_client[] = $user;
// }
//
$tovar_q = mysqli_query($connection, "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 3");
$tovars = array();
while ($t = mysqli_fetch_assoc($tovar_q)) {
  $tovars[] = $t;
}

$tovarAll_q = mysqli_query($connection, "SELECT * FROM `products` ORDER BY `id` DESC");
$tovarsAll = array();
while ($t = mysqli_fetch_assoc($tovarAll_q)) {
  $tovarsAll[] = $t;
}

session_start();
?>
