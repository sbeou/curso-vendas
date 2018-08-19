@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('compra/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-plus"></i> Adicionar Compra</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block align-middle'>
        <div class='row'>
          <div class='col-md-1 text-center'><strong>ID</strong></div>
          <div class='col-md-3 text-center'><strong>Fornecedor</strong></div>
          <div class='col-md-2 text-center'><strong>Data de compra</strong></div>
          <div class="col-md-3 text-center">Valor total</div>
          <div class='col-md-3 text-center'><strong>Ação</strong></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($compra as $key => $value)
          <div class='row '>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->comp_id !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Fornecedor:</strong> {!! $value->fornecedor->forn_razao_social !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Data de compra:</strong> {!! date('d/m/Y', strtotime($value->comp_data_compra)) !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Valor total:</strong> {!! number_format((float)$value->comp_valor_total, 2, ',', '.') !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('compra/' . $value->comp_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('compra/' . $value->comp_id) }}"><i class="far fa-eye"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection