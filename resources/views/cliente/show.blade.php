@extends('template')

@section('conteudo')
      <h1>{!! $cliente->clie_nome !!} | Detalhes</h1>
      <dl class='row'>
        <dt class='col-sm-3'>ID</dt>
        <dd class='col-sm-9'>{!! $cliente->clie_id !!}</dd>
        <dt class='col-sm-3'>Nome</dt>
        <dd class='col-sm-9'>{!! $cliente->clie_nome !!}</dd>
        <dt class='col-sm-3'>CPF</dt>
        <dd class='col-sm-9'>{!! $cliente->clie_cpf !!}</dd>
        <dt class='col-sm-3'>Telefone</dt>
        <dd class='col-sm-9'>{!! $cliente->clie_telefone !!}</dd>
        <dt class='col-sm-3'>Endereço completo</dt>
        <dd class='col-sm-9'>{!! $cliente->clie_endereco !!}, {!! $cliente->clie_cidade!!} - {!! $cliente->clie_estado !!}</dd>
        <dt class='col-sm-3'>Data de cadastre</dt>
        <dd class='col-sm-9'>{!! date_format($cliente->created_at,"d/m/Y H:i:s") !!}</dd>
      </dl>
      <p><a href="{{ URL::to('cliente/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista dos clientes</a></p></div>
      </div>
@endsection