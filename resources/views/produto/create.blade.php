@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{{url('produto')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="form-group col-md-3">
            <label for='nome'>Nome:</label>
            <input type="text" class="form-control" name="nome_produto">
            @if($errors->has('nome_produto'))
                <span class="text-danger">{!! $errors->first('nome_produto') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-2">
            <label for='valor'>Valor:</label>
            <input type="text" class="form-control" name="valor">
            @if($errors->has('valor'))
                <span class="text-danger">{!! $errors->first('valor') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-2">
            <label for='data_validade'>Data de validade:</label>
            <input type='date' class="form-control" name="data_validade">
            @if($errors->has('data_validade'))
                <span class="text-danger">{!! $errors->first('data_validade') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-2">
            <label for="qualidade">Quantidade:</label>
            <input type='number' class="form-control" name="quantidade">
            @if($errors->has('quantidade'))
                <span class="text-danger">{!! $errors->first('quantidade') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-3">
            <label for='fornecedor'>Fornecedor:</label>
            <select name='fornecedor'  class="form-control">
              <option disabled selected value>Selecione um fornecedor</option>
              @foreach($fornecedor as $key => $value)
                <option value='{!! $value->forn_id !!}'>{!! $value->forn_razao_social !!}</option>
              @endforeach
            </select>
            @if($errors->has('fornecedor'))
                <span class="text-danger">{!! $errors->first('fornecedor') !!}</span>
            @endif
          </div>
        </div>
        <div class="form-group text-right">
          <a href="{!! url('produto') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">SALVAR</button>
        </div>
      </form>
      
@endsection