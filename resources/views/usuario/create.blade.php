@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      <form method="post" action="{{url('usuario')}}" enctype="multipart/form-data">
        @csrf
        <div class="row align-items-end">
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" requered>
          </div>
          <div class="form-group col-md-3">
            <label for="Nome">Login:</label>
            <input type="text" class="form-control" name="login">
          </div>
          <div class="form-group col-md-3">
            <label for="Nome">Senha:</label>
            <input type='password' class="form-control" name="senha">
          </div>
          <div class="form-group col-md-2 text-right">
            <button type="submit" class="btn btn-success">SALVAR</button>
          </div>
        </div>
      </form>
      
@endsection