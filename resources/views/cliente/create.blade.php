@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{{url('cliente')}}" enctype="multipart/form-data">
        @csrf
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Nome:</label>
            <input type="text" class="form-control" name="nome">
            @if($errors->has('nome'))
                <span class="text-danger">{!! $errors->first('nome') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>CPF:</label>
            <input type="text" class="form-control" name="cpf">
            @if($errors->has('cpf'))
                <span class="text-danger">{!! $errors->first('cpf') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
        <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type="tel" class="form-control" name="telefone">
            @if($errors->has('telefone'))
                <span class="text-danger">{!! $errors->first('telefone') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco">
            @if($errors->has('endereco'))
                <span class="text-danger">{!! $errors->first('endereco') !!}</span>
            @endif
          </div>
        </div>
        <div class="row  justify-content-md-center">
          <div class="form-group col-md-4">
            <label>Cidade:</label>
            <input type="text" class="form-control" name="cidade">
            @if($errors->has('cidade'))
                <span class="text-danger">{!! $errors->first('cidade') !!}</span>
            @endif
          </div>
          <div class="form-group col-md-4">
            <label>Estado:</label>
            <input type='text' class="form-control" name="estado">
            @if($errors->has('estado'))
                <span class="text-danger">{!! $errors->first('estado') !!}</span>
            @endif
          </div>
        </div>
        <div class="form-group text-center">
          <a href="{!! url('cliente') !!}" class="btn btn-danger">VOLTAR</a>
          <button type="submit" class="btn btn-success">SALVAR</button>
        </div>
      </form>
      
@endsection