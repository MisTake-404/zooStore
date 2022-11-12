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
// $projects_q = mysqli_query($connection, "SELECT * FROM `projects` ORDER BY `id` DESC");
// $projects = array();
// while ($proj = mysqli_fetch_assoc($projects_q)) {
//   $projects[] = $proj;
// }

session_start();
?>
