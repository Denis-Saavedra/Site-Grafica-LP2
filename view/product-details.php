<?php 
  include "../component/head.php";
  require_once("../controller/processar_produtos.php");
  require_once("../model/Produto.php");

  foreach ( $produtos as $element ) {
    if ( $_GET['id'] === $element->getId() ) {
      $produto_atual = $element;
    }
}
?>  
  <link rel="stylesheet" href="../assets/css/login.css">

  <title><?= $produto_atual->getNome() ?> - Lotus</title>
  <link href="../assets/img/favicon.png" rel="icon">
</head>

<body>
  <?php include "../component/header.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $produto_atual->getNome() ?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Detalhes</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../assets/img/products/<?= $produto_atual->getNome() ?>-1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/products/<?= $produto_atual->getNome() ?>-2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/products/<?= $produto_atual->getNome() ?>-3.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Categoria</strong>: <?= $produto_atual->getCategoria() ?></li>
                <li><strong>Price</strong>: R$ <?= $produto_atual->getPreco() ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Sobre <?= $produto_atual->getNome() ?></h2>
              <p><?= $produto_atual->getDescricao() ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include "../component/footer.php" ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>