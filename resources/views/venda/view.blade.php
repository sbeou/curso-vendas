@extends('template')

@section('conteudo')
<div class="list-item pb-5">
<div class="row"><div class="col-sm-12"><h2 class='text-center'>Produtos comprados</h2></div></div>
    @foreach($venda->produto as $produtos)
        <div class='row justify-content-center'>
            <div class="col-sm-4"><strong>{!! $produtos->prod_nome !!}</strong></div>
            <div class="col-sm-4">Quantidade: {!! $produtos->pivot->vend_pro_quantidade !!}</div>
            <div class="col-sm-4">Preço Unitário: R${!! number_format((float)$produtos->prod_valor, 2, ',', '.') !!}</div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-sm-4">Venda: {!! $venda->cliente->clie_nome !!}</div>
        <div class="col-sm-4">Data da Venda: {!! date('d/m/Y', strtotime($venda->vend_data_venda)) !!}</div>
        <div class="col-sm-4">Valor Total: R${!! number_format((float)$venda->vend_valor_total, 2, ',', '.') !!}</div>
    </div>        
</div>
<p><a href="{{ URL::to('venda/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista das vendas</a></p>
@endsection