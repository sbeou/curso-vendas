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
<div class='banner'><img src="{!! asset('img/banner-mercado.jpg') !!}" alt='Mercado' class="img-fluid mx-auto d-block"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand mb-0 h1">CURSO VENDAS</span>
        
        </div>
    </div>
</nav>
<div class="container pt-5 pb-5">
    <h1 class='text-center'>Login | Curso vendas</h1>
    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('error') }}</p>
        </div><br />
    @endif
    <form method="post" action="{!! url('login') !!}">
        @csrf
        <div class="row  justify-content-md-center  align-items-end">
            <div class="form-group col-md-4">
                <label for="login">Login:</label>
                <input type="text" class="form-control" name="login">
                @if($errors->has('login'))
                    <span class="text-danger">{!! $errors->first('login') !!}</span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" name="senha">
                @if($errors->has('senha'))
                    <span class="text-danger">{!! $errors->first('senha') !!}</span>
                @endif
            </div>
            <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> ENTRAR</button>
        </div>
        </div>
    </form>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>