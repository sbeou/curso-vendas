@extends('template')

@section('conteudo')
<div class="list-item pb-5">
    <div class="row"><div class="col-sm-12"><h2 class='text-center'>Produtos comprados</h2></div></div>
    @foreach($compra->produto as $produto)
        <div class='row justify-content-center'>
            <div class="col-sm-4"><strong>{!! $produto->prod_nome !!}</strong></div>
            <div class="col-sm-4">Quantidade: {!! $produto->pivot->comp_pro_quantidade !!}</div>
            <div class="col-sm-4">Preço Unitário: R${!! number_format((float)$produto->prod_valor, 2, ',', '.') !!}</div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-sm-4">Fornecedor: {!! $compra->fornecedor->forn_razao_social !!}</div>
        <div class="col-sm-4">Data da Venda: {!! date('d/m/Y', strtotime($compra->comp_data_compra)) !!}</div>
        <div class="col-sm-4">Valor Total: R${!! number_format((float)$compra->comp_valor_total, 2, ',', '.') !!}</div>
    </div>
</div>

    <p><a href="{{ URL::to('compra/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista das compras</a></p>
@endsection