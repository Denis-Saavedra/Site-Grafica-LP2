<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
<div class="container d-flex align-items-center justify-content-lg-between">

    <a href="index.php" class="logo me-auto me-lg-0"><img src="../assets/img/logo_transp.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto" href="index.php#hero">Início</a></li>
        <li><a class="nav-link scrollto" href="index.php#about">Sobre</a></li>
        <li><a class="nav-link scrollto " href="index.php#portfolio">Produtos</a></li>
        <li><a class="nav-link scrollto" href="index.php#team">Nós</a></li>
        <li><a class="nav-link scrollto" href="index.php#contact">Contato</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <?php
        require_once("../model/Usuario.php");

        if ($_SESSION['login']) {
            echo '
            <div class="dropdown dropdown-menu-right">
                <a type="button" data-toggle="dropdown">
                    <img id="user_photo" src="../assets/img/users/'.$_SESSION['id'].'.jpg" alt="Foto do Usuario">
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="perfil.php">Perfil</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="../controller/processar_sair.php">Sair</a></li>
                </ul>
            </div>
            ';
        } else {
            echo '<a href="login.php" class="get-started-btn scrollto">Login / Sign-in</a>';
        }
    ?>

</div>
</header><!-- End Header -->