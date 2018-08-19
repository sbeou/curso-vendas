@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('produto/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-plus"></i> Adicionar Produto</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block align-middle'>
        <div class='row'>
          <div class='col-md-1 text-center'><strong>ID</strong></div>
          <div class='col-md-3 text-center'><strong>Nome</strong></div>
          <div class='col-md-1 text-center'><strong>Valor</strong></div>
          <div class='col-md-2 text-center'><strong>Data de validade</strong></div>
          <div class='col-md-2 text-center'><strong>Quantidade</strong></div>
          <div class='col-md-3 text-center'><strong>Ação</strong></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($produto as $key => $value)
          <div class='row '>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->prod_id !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Nome:</strong> {!! $value->prod_nome !!}</div>
            <div class='col-md-1 text-center'><strong class='d-md-none'>Valor:</strong> R${!! number_format($value->prod_valor, 2, ',', '.')  !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Data de validade:</strong> {!! date('d/m/Y', strtotime($value->prod_data_validade)) !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Quantidade:</strong> {!! $value->prod_quantidade !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('produto/' . $value->prod_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('produto/' . $value->prod_id) }}"><i class="far fa-eye"></i></a>
              <a class="btn btn-outline-info btn-lg" href="{{ URL::to('produto/' . $value->prod_id . '/edit') }}"><i class="fas fa-edit"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection