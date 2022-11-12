<?php include("block/header.php") ?>

<div class="background-decor"></div>

<main class="tovar" id="tovar">

  <?php
    $tovar_q = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . $_GET['id']);
    $t = mysqli_fetch_assoc($tovar_q);
  ?>

  <section class="product" id="product">
    <div class="container">
      <h1 class="title-h2"><?php echo $t['title']; ?></h1>
      <div class="grid">
        <div class="grid__wrapper">
          <div class="product__photo">
            <img src="img/resourse/<?php echo $t['img']; ?>" alt="" class="img">
          </div>
          <div class="product__content">
            <p class="text product__text">Категория: <?php echo $t['category']; ?></p>
            <p class="text product__text"><?php echo $t['price']; ?>₽</p>
            <a href="include/forms.php?tovar=<?php echo $t['id']; ?>" class="text-link btn product__btn">В корзину</a>
            <h2 class="title-h2 product__title">Описание</h2>
            <p class="text product__text"><?php echo $t['description']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include("block/footer.php") ?>
