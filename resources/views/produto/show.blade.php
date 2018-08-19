@extends('template')

@section('conteudo')
      <h1>{!! $produto->prod_nome !!} | Detalhes</h1>
      <dl class='row'>
        <dt class='col-sm-3'>ID</dt>
        <dd class='col-sm-9'>{!! $produto->prod_id !!}</dd>
        <dt class='col-sm-3'>Nome</dt>
        <dd class='col-sm-9'>{!! $produto->prod_nome !!}</dd>
        <dt class='col-sm-3'>Valor</dt>
        <dd class='col-sm-9'>R${!! number_format($produto->prod_valor, 2, ',', ' ')  !!}</dd>
        <dt class="col-sm-3">Data de valide</dt>
        <dd class="col-sm-9">{!! date('d/m/Y', strtotime($produto->prod_data_validade)) !!}</dd>
        <dt class='col-sm-3'>Fornecedor</dt>
        <dd class='col-sm-9'>{!! $produto->fornecedor->forn_razao_social !!}</dd>
      </dl>
      <p><a href="{{ URL::to('produto/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista dos produtos</a></p>
@endsection