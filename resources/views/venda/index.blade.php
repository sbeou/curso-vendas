@extends('template')

@section('conteudo')
      <h1>{!! $title !!}</h1>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <div class='text-right mb-4'>
        <a href="{{ URL::to('venda/create') }}" class='btn btn-outline-success btn-lg'><i class="fas fa-plus"></i> Adicionar Venda</a>
      </div>
      <div class='list-item d-none d-lg-block d-xl-block align-middle'>
        <div class='row'>
          <div class='col-md-1 text-center'><strong>ID</strong></div>
          <div class='col-md-3 text-center'><strong>Cliente</strong></div>
          <div class='col-md-2 text-center'><strong>Data de venda</strong></div>
          <div class="col-md-3 text-center">Valor total</div>
          <div class='col-md-3 text-center'><strong>Ação</strong></div>
        </div>
      </div> 
      <div class='list-item'> 
        @foreach($venda as $key => $value)
          <div class='row '>
            <div class='col-md-1 text-center'><strong class='d-md-none'>ID:</strong> {!! $value->vend_id !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Cliente:</strong> {!! $value->cliente->clie_nome !!}</div>
            <div class='col-md-2 text-center'><strong class='d-md-none'>Data de venda:</strong> {!! date('d/m/Y', strtotime($value->vend_data_venda)) !!}</div>
            <div class='col-md-3 text-center'><strong class='d-md-none'>Valor total:</strong> {!! number_format((float)$value->vend_valor_total, 2, ',', '.') !!}</div>
            <div class='col-md-3 text-center'>
              <form action='{!! url('venda/' . $value->vend_id) !!}' method='post'>
              <a class="btn btn-outline-success btn-lg" href="{{ URL::to('venda/' . $value->vend_id) }}"><i class="far fa-eye"></i></a>
              @csrf
              @method('DELETE')
              <button type='submit' class="btn btn-outline-danger btn-lg"><i class="fas fa-times-circle"></i></button>
              </form>
            </div>
          </div>
        @endforeach
@endsection