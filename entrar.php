<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="utf-8">
    <title>AU-Q-MIA - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>AU-Q-MIA</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active nav-contact bg-primary text-white px-5 ms-lg-5">Página Inicialﾠ<i class="bi bi-arrow-left"></i></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase">Identifique-se</h6>
                <h1 class="display-5 text-uppercase mb-0">Entre na sua conta ou registre-se caso seja sua primeira vez por aqui</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <form action="./php/register.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Seu Nome" style="height: 55px;" name="regname" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Seu Email" style="height: 55px;" name="regemail" required>
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control bg-light border-0 px-4" placeholder="Senha" style="height: 55px;" name="regpw" required>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Registrar</button>
                            </div>
                            <?php
                                if(isset($_SESSION['exists'])) {
                                    echo "<div class=\"border-start border-5 border-primary ps-5 mb-5\"><p>O e-mail informado já foi cadastrado.</p></div>";
                                };
                                unset($_SESSION['exists']);
                                if(isset($_SESSION['sucess'])) {
                                    echo "<div class=\"border-start border-5 border-primary ps-5 mb-5\"><p>Cadastro realizado com sucesso!</p></div>";
                                };
                                unset($_SESSION['sucess']);
                            ?>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <form action="./php/login.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <input name="email" type="email" class="form-control bg-light border-0 px-4" placeholder="Email" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input name="pw" type="password" class="form-control bg-light border-0 px-4" placeholder="Senha" style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Entrar</button>
                            </div>
                                <?php
                                    if(isset($_SESSION['invalido'])) {
                                        echo "<div class=\"border-start border-5 border-primary ps-5 mb-5\"><p>Credenciais inválidas.</p></div>";
                                    };
                                    unset($_SESSION['invalido']);
                                ?>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-4">
                    <div class="bg-light mb-5 p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">email</h6>
                                <span>contato@email.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Telefone</h6>
                                <span>4002-8922</span>
                            </div>
                        </div>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d937.2218149255215!2d-45.971343290437765!3d-20.013245898353354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1669200834004!5m2!1spt-BR!2sbr"
                             width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">AU-Q-MIA</a>. Todos direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>