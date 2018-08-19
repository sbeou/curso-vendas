@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{{url('fornecedor')}}" enctype="multipart/form-data">
        @csrf
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Razão social:</label>
            <input type="text" class="form-control" name="razao_social">
            @if($errors->has('razao_social'))
                <span class="text-danger">{!! $errors->first('razao_social') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>CNPJ:</label>
            <input type="text" class="form-control" name="cnpj">
            @if($errors->has('cnpj'))
                <span class="text-danger">{!! $errors->first('cnpj') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Nome de contato:</label>
            <input type='text' class="form-control" name="nome_contato">
            @if($errors->has('nome_contato'))
                <span class="text-danger">{!! $errors->first('nome_contato') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>E-mail:</label>
            <input type='email' class="form-control" name="email">
            @if($errors->has('email'))
                <span class="text-danger">{!! $errors->first('email') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco">
            @if($errors->has('endereco'))
                <span class="text-danger">{!! $errors->first('endereco') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>Cidade:</label>
            <input type="text" class="form-control" name="cidade">
            @if($errors->has('cidade'))
                <span class="text-danger">{!! $errors->first('cidade') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Estado:</label>
            <input type='text' class="form-control" name="estado">
            @if($errors->has('estado'))
                <span class="text-danger">{!! $errors->first('estado') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type='tel' class="form-control" name="telefone">
            @if($errors->has('telefone'))
                <span class="text-danger">{!! $errors->first('telefone') !!}</span>
            @endif
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{!! url('fornecedor') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">SALVAR</button>
        </div>
      </form>
      
@endsection