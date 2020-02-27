<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
            src="https://kit.fontawesome.com/3942d4ec1a.js"
            crossorigin="anonymous"
    ></script>
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap"
            rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/styles.css"/>
    <script type="text/javascript" src="<?php echo BASE;?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE;?>assets/js/script.js"></script>
    <title>SniperTrading | EaD</title>
</head>
<body>
<!-- Sidebar -->
<nav
        class=" navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
        style="background-color: #0a254f;"
>
    <div class="container">
        <a class="navbar-brand mr-auto" href="<?php echo BASE; ?>home">SniperTrading</a>

        <button class="navbar-toggler d-block" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?php echo BASE; ?>home" class="active">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a>
                        <i class="fas fa-user-circle" style="color: #fff;"></i>
                        <p style="color: #fff;"><?php echo $viewData['info']->getNome();?></p>
                    </a>
                </li>
                <div class="btn-group">
                    <a href="<?php echo BASE;?>login/logout"
                            type="button"
                            class="btn btn-danger"
                    >
                        Sair
                    </a>
                </div>
            </ul>
        </div>
    </div>
</nav>
<!-- /Sidebar -->
    <?php $this->loadViewInTemplate($viewName,$viewData); ?>
</body>
<script src="<?php echo BASE;?>assets/js/script.js"></script>
</html>