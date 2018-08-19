@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('fornecedor/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-plus"></i> Adicionar Fornecedor</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block align-middle'>
        <div class='row'>
          <div class='col-md-1 text-center'><h4>ID</h4></div>
          <div class='col-md-2 text-center'><h4>Razão social</h4></div>
          <div class='col-md-2 text-center'><h4>CNPJ</h4></div>
          <div class='col-md-2 text-center'><h4>e-mail</h4></div>
          <div class='col-md-2 text-center'><h4>Telefone</h4></div>
          <div class='col-md-3 text-center'><h4>Ação</h4></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($fornecedor as $key => $value)
          <div class='row '>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->forn_id !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Razaõ social:</strong> {!! $value->forn_razao_social !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>CNPJ:</strong> {!! $value->forn_cnpj !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>E-mail:</strong> {!! $value->forn_email !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Telefone:</strong> {!! $value->forn_telefone !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('fornecedor/' . $value->forn_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('fornecedor/' . $value->forn_id) }}"><i class="far fa-eye"></i></a>
              <a class="btn btn-outline-info btn-lg" href="{{ URL::to('fornecedor/' . $value->forn_id . '/edit') }}"><i class="fas fa-edit"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection