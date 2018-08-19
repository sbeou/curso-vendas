@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{!! url('fornecedor/' . $fornecedor->forn_id) !!}">
        @csrf
        @method('PUT')

        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Razão social:</label>
            <input type="text" class="form-control" name="razao_social" value='{!! $fornecedor->forn_razao_social!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>CNPJ:</label>
            <input type="text" class="form-control" name="cnpj" value='{!! $fornecedor->forn_cnpj!!}'>
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Nome de contato:</label>
            <input type='text' class="form-control" name="nome_contato" value='{!! $fornecedor->forn_nome_contato!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>E-mail:</label>
            <input type='email' class="form-control" name="email" value='{!! $fornecedor->forn_email!!}'>
          </div>
          </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco" value='{!! $fornecedor->forn_endereco!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>Cidade:</label>
            <input type="text" class="form-control" name="cidade" value='{!! $fornecedor->forn_cidade!!}'>
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Estado:</label>
            <input type='text' class="form-control" name="estado" value='{!! $fornecedor->forn_estado!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type='tel' class="form-control" name="telefone" value='{!! $fornecedor->forn_telefone!!}'>
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{!! url('fornecedor') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
      </form>
      
@endsection