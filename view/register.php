<?php include "../component/head.php" ?>  
  
  <link rel="stylesheet" href="../assets/css/login.css">

  <link href="../assets/img/logo.ico" rel="icon">
  <title>Register - Lotus</title>
</head>

<body>
  <?php include "../component/header.php" ?> 

  <main id="main">

  <!-- Hero -->
  <section class="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

    <form class="login-form w-75 position-relative mx-auto" action="../controller/processar_cadastro.php" method="POST" enctype="multipart/form-data">
      <h2 class="w-100 text-center">Registrar</h2>

      <div class="form-group row mt-2">
        <div class="col">
          <label for="nome">Nome:</label>
          <input required type="text" class="form-control" id="nome" name="nome" aria-describedby="nameHelp" placeholder="Primeiro Nome" value="<?php echo $_GET['nome']; ?>">
        </div>
        <div class="col">
          <label for="sobrenome">Sobrenome:</label>
          <input required type="text" class="form-control" id="sobrenome" name="sobrenome" aria-describedby="nameHelp" placeholder="Segundo Nome" value="<?php echo $_GET['sobrenome']; ?>">
        </div>
      </div>

      <div class="form-group mt-2">
        <label for="email">Email:</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="seuemail@gmail.com" value="<?php echo $_GET['email']; ?>">
        <?php
          if ($_GET["erro"] == "email") {
            echo '<small id="emailHelp">Email já cadastrado!</small>';
          }
        ?>
      </div>
      <div class="form-group mt-2">
        <label for="senha">Senha:</label>
        <input required type="password" class="form-control" id="senha" name="senha" placeholder="Sua Senha">
      </div>

      <div class="form-group mt-2">
        <label for="perfil-img">Foto de Perfil</label>
        <input required type="file" class="form-control-file" id="perfil-img" name="img" accept=".jpg, .jpeg, .png">
      </div>

      <small id="emailHelp">Já tem uma conta? <a href="login.php">Entre</a></small> <br>

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