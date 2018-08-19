@extends('template')

@section('conteudo')
      <h1>{!! $fornecedor->forn_razao_social !!} | Detalhes</h1>
      <dl class='row'>
        <dt class='col-sm-3'>ID</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_id !!}</dd>
        <dt class='col-sm-3'>Razâo social</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_razao_social !!}</dd>
        <dt class='col-sm-3'>CNPJ</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_cnpj !!}</dd>
        <dt class='col-sm-3'>Telefone</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_telefone !!}</dd>
        <dt class='col-sm-3'>E-mail</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_email !!}</dd>
        <dt class='col-sm-3'>Nome de contato</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_nome_contato !!}</dd>
        <dt class='col-sm-3'>Endereço completo</dt>
        <dd class='col-sm-9'>{!! $fornecedor->forn_endereco !!}, {!! $fornecedor->forn_cidade!!} - {!! $fornecedor->forn_estado !!}</dd>
        <dt class='col-sm-3'>Data de cadastre</dt>
        <dd class='col-sm-9'>{!! date_format($fornecedor->created_at,"d/m/Y H:i:s") !!}</dd>
      </dl>
      <p><a href="{{ URL::to('fornecedor/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista dos fornecedores</a></p>
@endsection