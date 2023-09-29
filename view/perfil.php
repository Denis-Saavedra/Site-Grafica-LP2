<?php 
  require_once("../component/head.php");
  require_once("../model/Usuario.php");

  if (!$_SESSION['login']) {
      // Redirecione para a página de login se o usuário não estiver logado
      header("Location: login.php");
      exit;
  }
?>
  
  <link rel="stylesheet" href="../assets/css/login.css">

  <link href="../assets/img/logo.ico" rel="icon">
  <title>Perfil - Lotus</title>
</head>

<body>
  <?php include "../component/header.php" ?> 

  <main id="main">

  <section class="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="login-form w-50 position-relative mx-auto">
        <img class="user_photo" src="../assets/img/users/<?=$_SESSION["id"]?>.jpg" alt="Imagem User" width="200">
        <h2 class="w-100 text-center"><b>Nome:</b> <?=$_SESSION["nome"]?></h2>
        <h2 class="w-100 text-center"><b>Email:</b> <?=$_SESSION["email"]?></h2>
      </div>
    </div>
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