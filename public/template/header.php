<?php
  $url = 'http://localhost:8000';
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel='stylesheet' href='<?php echo $url; ?>/css/style-curso-vendas.css' type='text/css'>
    <title><?php echo $title ?> | Curso Vendas</title>
  </head>
  <body>
    <img src='<?php echo $url; ?>/img/banner-mercado.jpg' alt='Mercado' class="img-fluid mx-auto d-block">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <span class="navbar-brand mb-0 h1">CURSO VENDAS</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav">
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users"></i> Usuário
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/usuario/"><i class="fas fa-users"></i> Lista dos usurários</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/usuario/create/"><i class="fas fa-user-plus"></i> Adicionar usuário</a>
              </div>
            </li>
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-truck"></i> Fornecedor
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/fornecedor/"><i class="fas fa-truck"></i> Lista dos fornecedores</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/fornecedor/create/"><i class="fas fa-plus"></i> Adicionar fornecedor</a>
              </div>
            </li>
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-boxes"></i> Produto
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/produto/"><i class="fas fa-boxes"></i> Lista dos produtos</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/produto/create/"><i class="fas fa-plus"></i> Adicionar produto</a>
              </div>
            </li>
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-friends"></i> Cliente
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/cliente/"><i class="fas fa-user-friends"></i> Lista dos clientes</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/cliente/create/"><i class="fas fa-plus"></i> Adicionar cliente</a>
              </div>
            </li>
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i> Venda
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/venda/"><i class="fas shopping-cart"></i> Lista das vendas</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/venda/create/"><i class="fas fa-cart-plus"></i> Adicionar venda</a>
              </div>
            </li>
            <li class='nav-item dropdown active'>
              <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-basket"></i> Compras
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $url; ?>/compra/"><i class="fas shopping-cart"></i> Lista das comprass</a>
                <a class="dropdown-item" href="<?php echo $url; ?>/compra/create/"><i class="fas fa-cart-plus"></i> Adicionar compra</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container pt-5 pb-5">