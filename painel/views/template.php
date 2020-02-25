<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sniper</title>
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css"/>
    <script type="text/javascript" src="<?php echo BASE;?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE;?>assets/js/script.js"></script>
</head>
<body>
    <div class="topo">
       
        <a href="<?php echo BASE;?>login/logout">
            <div>
                Sair
            </div>
    </a>

    </div>
    <?php $this->loadViewInTemplate($viewName,$viewData); ?>
</body>
</html>