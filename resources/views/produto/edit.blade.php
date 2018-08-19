@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{!! url('produto/' . $produto->prod_id) !!}">
        @csrf
        @method('PUT')
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label for='nome'>Nome:</label>
            <input type="text" class="form-control" name="nome_produto" value='{!! $produto->prod_nome!!}'>
            @if($errors->has('nome_produto'))
                <span class="text-danger">{!! $errors->first('nome_produto') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label for='valor'>Valor:</label>
            <input type="text" class="form-control" name="valor" value='{!! $produto->prod_valor!!}'>
            @if($errors->has('valor'))
                <span class="text-danger">{!! $errors->first('valor') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label for='data_validade'>Data de validade:</label>
            <input type='date' class="form-control" name="data_validade" value='{!! $produto->prod_data_validade!!}'>
            @if($errors->has('data_validade'))
                <span class="text-danger">{!! $errors->first('data_validade') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label for="qualidade">Quantidade:</label>
            <input type='number' class="form-control" name="quantidade" value='{!! $produto->prod_quantidade!!}'>
            @if($errors->has('quantidade'))
                <span class="text-danger">{!! $errors->first('quantidade') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label for='fornecedor'>Fornecedor:</label>
            <select name='fornecedor'  class="form-control">
              <option disabled value>Selecione um fornecedor</option>
              @foreach($fornecedor as $key => $value)
                <option value='{!! $value->forn_id !!}'
                @if($value->forn_id == $produto->cod_fornecedor)
                 selected
                @endif >
                {!! $value->forn_razao_social !!}
                </option>
              @endforeach
            </select>
            @if($errors->has('fornecedor'))
                <span class="text-danger">{!! $errors->first('fornecedor') !!}</span>
            @endif
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{!! url('produto') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">SALVAR</button>
        </div>
      </form>
      
@endsection