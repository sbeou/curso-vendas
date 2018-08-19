@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('cliente/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-user-plus"></i> Adicionar Cliente</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block align-middle'>
        <div class='row'>
          <div class='col-md-1 text-center'><h4>ID</h4></div>
          <div class='col-md-4 text-center'><h4>Nome</h4></div>
          <div class='col-md-2 text-center'><h4>CPF</h4></div>
          <div class='col-md-2 text-center'><h4>Telefone</h4></div>
          <div class='col-md-3 text-center'><h4>Ação</h4></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($cliente as $key => $value)
          <div class='row '>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->clie_id !!}</div>
            <div class='col-md-4 text-center'><strong class='d-md-none'>Nome:</strong> {!! $value->clie_nome !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>CPF:</strong> {!! $value->clie_cpf !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Telefone:</strong> {!! $value->clie_telefone !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('cliente/' . $value->clie_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('cliente/' . $value->clie_id) }}"><i class="far fa-eye"></i></a>
              <a class="btn btn-outline-info btn-lg" href="{{ URL::to('cliente/' . $value->clie_id . '/edit') }}"><i class="fas fa-edit"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection