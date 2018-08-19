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
    <link rel='stylesheet' href='{!! asset('css/style-curso-vendas.css') !!}' type='text/css'>
    <title>Curso Vendas</title>
</head>
<body>
<div class='banner'><a href="{!! URL::to('home') !!}"><img src="{!! asset('img/banner-mercado.jpg') !!}" alt='Mercado' class="img-fluid mx-auto d-block"></a></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="{!! URL::to('home') !!}" class="nav-link"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users"></i> Usuário
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('usuario') !!}"><i class="fas fa-users"></i> Lista dos usurários</a>
                        <a class="dropdown-item" href="{!! URL::to('usuario/create') !!}"><i class="fas fa-user-plus"></i> Adicionar usuário</a>
                    </div>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-truck"></i> Fornecedor
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('fornecedor') !!}"><i class="fas fa-truck"></i> Lista dos fornecedores</a>
                        <a class="dropdown-item" href="{!! URL::to('fornecedor/create') !!}"><i class="fas fa-plus"></i> Adicionar fornecedor</a>
                    </div>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-boxes"></i> Produto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('produto') !!}"><i class="fas fa-boxes"></i> Lista dos produtos</a>
                        <a class="dropdown-item" href="{!! URL::to('produto/create') !!}"><i class="fas fa-plus"></i> Adicionar produto</a>
                    </div>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-friends"></i> Cliente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('cliente') !!}"><i class="fas fa-user-friends"></i> Lista dos clientes</a>
                        <a class="dropdown-item" href="{!! URL::to('cliente/create') !!}"><i class="fas fa-plus"></i> Adicionar cliente</a>
                    </div>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i> Venda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('venda') !!}"><i class="fas shopping-cart"></i> Lista das vendas</a>
                        <a class="dropdown-item" href="{!! URL::to('venda/create') !!}"><i class="fas fa-cart-plus"></i> Adicionar venda</a>
                    </div>
                </li>
                <li class='nav-item dropdown'>
                    <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-basket"></i> Compras
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{!! URL::to('compra') !!}"><i class="fas shopping-cart"></i> Lista das comprass</a>
                        <a class="dropdown-item" href="{!! URL::to('compra/create') !!}"><i class="fas fa-cart-plus"></i> Adicionar compra</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{!! URL::to('logout') !!}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container pt-5 pb-5">
    @section('conteudo')
        <p>Testando</p>
        @show
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@yield('javascript')
</body>
</html>