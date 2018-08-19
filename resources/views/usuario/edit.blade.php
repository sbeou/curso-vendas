@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      <form method="post" action="{!! url('usuarios/' . $usuario->usua_id) !!}">
        @csrf
        <div class="row  align-items-end">
          <div class="form-group col-md-5">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value='{!! $usuario->usua_nome !!}'>
          </div>
          <div class="form-group col-md-5">
            <label for="Nome">Login:</label>
            <input type="text" class="form-control" name="login" value='{!! $usuario->usua_login !!}'>
          </div>
          <div class="form-group col-md-2">
            <button type="submit" class="btn btn-success">ATUALIZAR</button>
          </div>
        </div>
      </form>
      
@endsection