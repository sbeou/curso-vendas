@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{!! url('cliente/' . $cliente->clie_id) !!}">
        @csrf
        @method('PUT')

        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome" value='{!! $cliente->clie_nome!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>CPF:</label>
            <input type="text" class="form-control" name="cpf" value='{!! $cliente->clie_cpf!!}'>
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco" value='{!! $cliente->clie_endereco!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>Cidade:</label>
            <input type="text" class="form-control" name="cidade" value='{!! $cliente->clie_cidade!!}'>
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Estado:</label>
            <input type='text' class="form-control" name="estado" value='{!! $cliente->clie_estado!!}'>
          </div>
          <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type='tel' class="form-control" name="telefone" value='{!! $cliente->clie_telefone!!}'>
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{!! url('cliente') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
      </form>
      
@endsection