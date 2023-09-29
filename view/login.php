<?php include "../component/head.php" ?>  
  
  <link rel="stylesheet" href="../assets/css/login.css">

  <link href="../assets/img/logo.ico" rel="icon">
  <title>Login - Lotus</title>
</head>

<body>
  <?php include "../component/header.php" ?> 

  <main id="main">

  <!-- Hero -->
  <section class="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <?php
        if ($_GET["register"]) {
          echo '<h2>Cadastro realizado com sucesso!</h2>
          <br><br>';
        } 
        if ($_GET["erro"] == "incorreto") {
          echo '<h2>Email ou Senha incorretos</h2>
          <br><br>';
        }
      ?>

    <form class="login-form w-50 position-relative mx-auto" action="../controller/processar_login.php" method="POST">
      <h2 class="w-100 text-center">Login</h2>

      <div class="form-group mt-2">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="seuemail@gmail.com">
      </div>
      <div class="form-group mt-2">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" laceholder="Sua Senha">
      </div>

      <small id="emailHelp">Não tem uma conta? <a href="register.php">Registre-se</a></small> <br>

      <button type="submit" class="mt-3 btn btn-primary">Submit</button>
    </form>

  </section><!-- End Hero -->

  </main><!-- End #main -->

  <?php include "../component/footer.php"?>

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