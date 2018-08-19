@extends('template')

@section('conteudo')
    <div class="row list-home text-center align-items-center">
        <div class="col-md-2 col-6 usuario">
            <a href="{!! URL::to('usuario') !!}"><i class="fas fa-users"></i> Usurários</a>
        </div>
        <div class="col-md-2 col-6 fornecedor">
            <a href="{!! URL::to('fornecedor') !!}"><i class="fas fa-truck"></i> Fornecedores</a>
        </div>
        <div class="col-md-2 col-6 produto">
            <a href="{!! URL::to('produto') !!}"><i class="fas fa-boxes"></i> Produtos</a>
        </div>
        <div class="col-md-2 col-6 cliente">
            <a href="{!! URL::to('cliente') !!}"><i class="fas fa-users"></i> Clientes</a>
        </div>
        <div class="col-md-2 col-6 venda">
            <a href="{!! URL::to('venda') !!}"><i class="fas fa-shopping-cart"></i> Vendas</a>
        </div>
        <div class="col-md-2 col-6 compra">
            <a href="{!! URL::to('compra') !!}"><i class="fas fa-shopping-basket"></i> Compras</a>
        </div>
    <div>
@endsection