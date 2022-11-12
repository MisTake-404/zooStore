<?php
// Проверка авторизации
session_start();
if(!isset($_SESSION['user'])){
  header("Location: /login.php");
}
?>

<?php include("block/header.php") ?>

<main class="personal-account" id="personal-account">

  <section class="about-user" id="about-user">
    <div class="container about-user__container">
      <h2 class="title-h2">С возвращением, <?php echo $_SESSION['user']['name']; ?>!</h2>
        <div class="about-user__info">
          <h3 class="title-h2">О вас</h3>
          <p class="text about-user__text">ФИО: <?php echo $_SESSION['user']['name']; ?></p>
          <p class="text about-user__text">Логин: <?php echo $_SESSION['user']['login']; ?></p>
          <p class="text about-user__text">Телефон: <?php echo $_SESSION['user']['phone']; ?></p>
          <p class="text about-user__text">Пароль: *************</p>
        </div>
    </div>
  </section>

  <section class="my-basket" id="my-basket">
    <div class="container my-basket__container">
      <h2 class="title-h2">Корзина</h2>
      <ul class="my-basket__list">

        <?php
        $basket_q = mysqli_query($connection, "SELECT * FROM `basket` WHERE `id_user` = " . $_SESSION['user']['id']);
        $baskets = array();
        while ($b = mysqli_fetch_assoc($basket_q)) {
          $baskets[] = $b;
        }
        ?>

        <?php
        foreach ($baskets as $b){
          foreach ($tovarsAll as $t){
            $id_b = $b['id_product'];
            $id_t = $t['id'];
            if ($id_b === $id_t) {
              ?>
              <li class="my-basket__item">
                <div class="my-basket__left">
                  <h3 class="title-h3 my-basket__tovar"><?php echo $t['title']; ?></h3>
                </div>
                <div class="my-basket__right">
                  <p class="text my-basket__price"><?php echo $t['price']; ?>₽</p>
                  <a href="include/forms.php?delTovar=<?php echo $t['id']; ?>" class="btn my-basket__del">Удалить</a>
                  <a href="tovar.php?id=<?php echo $t['id']; ?>" class="btn my-basket__look">Посмотреть</a>
                </div>
              </li>
              <?php
            }
          }
        }
        ?>

      </ul>
    </div>
  </section>

</main>

<?php include("block/footer.php") ?>
