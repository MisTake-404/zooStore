<?php include("block/header.php") ?>

<div class="background-decor"></div>

<main class="index" id="index">

  <section class="our-product" id="our-product">
    <div class="container our-product">
      <h2 class="title-h2">Корм</h2>

      <div class="grid our-product__block">
        <div class="grid__wrapper">

          <?php
          foreach ($tovarsAll as $t){
            ?>
            <a href="tovar.php?id=<?php echo $t['id'] ?>" class="our-product__card">
              <div class="our-product__image">
                <img src="img/resourse/<?php echo $t['img'] ?>" alt="" class="img">
                <!-- <img src="../img/index/project.jpg" alt="" class="img"> -->
              </div>
              <div class="our-product__info">

                <div class="our-product__grid">
                  <p class="text our-product__item our-product__item--name"><?php echo $t['title'] ?></p>
                  <p class="text our-product__item our-product__item--price"><?php echo $t['price'] ?>₽</p>
                </div>

              </div>
            </a>
            <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- <section class="our_project" id="our_project">
    <div class="container our_project">
      <h2 class="title-h2"></h2>
      <p class="text"></p>
    </div>
  </section> -->
</main>

<?php include("block/footer.php") ?>
