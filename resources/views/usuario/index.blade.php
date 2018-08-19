@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('usuario/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-user-plus"></i> Adicionar usuário</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block'>
        <div class='row'>
          <div class='col-md-1 text-center'><h3>ID</h3></div>
          <div class='col-md-3 text-center'><h3>Nome</h3></div>
          <div class='col-md-3 text-center'><h3>Login</h3></div>
          <div class='col-md-2 text-center'><h3>1º acesso</h3></div>
          <div class='col-md-3 text-center'><h3>Ação</h3></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($usuario as $key => $value)
          <div class='row'>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->usua_id !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Nome:</strong> {!! $value->usua_nome !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Login:</strong> {!! $value->usua_login !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Primeiro acesso:</strong> {!! ($value->usua_primeiro_acesso)? 'Sim' : 'Não' !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('usuario/' . $value->usua_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('usuario/' . $value->usua_id) }}"><i class="far fa-eye"></i></a>
              <a class="btn btn-outline-info btn-lg" href="{{ URL::to('usuario/' . $value->usua_id . '/edit') }}"><i class="fas fa-edit"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection