<?php
include("db.php");

//Вывод ошибки при неудачном подключении
if($connection == false){
  echo "Не удалось подключиться к базе данных<br>";
  echo mysqli_connect_error();
  exit();
}

session_start();
?>
