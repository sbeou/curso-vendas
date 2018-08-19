@extends('template')

@section('conteudo')
      <h1 class='text-center'>{!! $title !!}</h1>
      <form method="post" action="{!! url('venda') !!}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-md-center">
            <div class="form-group col-md-4">
                <label for="cliente">Cliente:</label>
                <select name="cliente" id="" class="form-control">
                    <option  disabled selected value>Selecione o Cliente</option>
                    @foreach($clientes as $item)
                        <option value="{!! $item->clie_id !!}">{!! $item->clie_nome !!}</option>
                    @endforeach
                </select>
                @if($errors->has('cliente'))
                    <span class="text-danger">{!! $errors->first('cliente') !!}</span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="dataVenda">Data Venda:</label>
                <input type="date" class="form-control" name="dataVenda">
                @if($errors->has('dataVenda'))
                    <span class="text-danger">{!! $errors->first('dataVenda') !!}</span>
                @endif
            </div>
        </div>
        <div class="row align-items-end justify-content-md-center" id="produtos">
            <div class="form-group col-md-4">
                <label for="produto">Produto:</label>
                <select name="produto[]" id="" class="form-control">
                    <option  disabled selected value>Selecione o Produto</option>
                    @foreach($produtos as $item)
                        <option value="{!! $item->prod_id !!}">{!! $item->prod_nome !!}</option>
                    @endforeach
                </select>
                @if($errors->has('produto'))
                    <span class="text-danger">{!! $errors->first('produto') !!}</span>
                @endif
            </div>
            <div class="form-group col-md-1">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" name="quantidade[]">
                @if($errors->has('quantidade'))
                    <span class="text-danger">{!! $errors->first('quantidade') !!}</span>
                @endif
            </div>
            <div class="form-group col-md-2">
                <button id="adicionar" name="adicionar" class="btn btn-success"><i class="fas fa-cart-plus"></i> Adicionar</button>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="form-group col-md-4 text-center" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a href="{!! url('venda') !!}"class="btn btn-danger">Voltar</a>
            </div>
        </div>
      </form>
@endsection

@section('javascript')
    @parent
    <script type="text/javascript">

        var template = '<div class="row align-items-end justify-content-md-center" id="novos-produtos">\n' +
            '            <div class="form-group col-md-4">\n' +
            '                <label for="produto">Produto:</label>\n' +
            '                <select name="produto[]" id="" class="form-control">\n' +
            '                    <option  disabled selected value>Selecione o Produto</option>\n' +
            '                    @foreach($produtos as $item)\n' +
            '                        <option value="{!! $item->prod_id !!}">{!! $item->prod_nome !!}</option>\n' +
            '                    @endforeach\n' +
            '                </select>\n' +
            '            </div>\n' +
            '            <div class="form-group col-md-1">\n' +
            '                <label for="quantidade">Quantidade:</label>\n' +
            '                <input type="number" class="form-control" name="quantidade[]">\n' +
            '            </div>\n' +
            '            <div class="form-group col-md-2">\n' +
            '                <button id="remover" name="remover" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>\n' +
            '            </div>\n' +
            '        </div>';

            $('#adicionar').on('click', function (e) {
                 e.preventDefault();

                 produtos = $('#produtos');

                 produtos.after(template);

            });

            $(document).on('click', '#remover', function (e){

                e.preventDefault();

                $(this).parents('#novos-produtos').remove();
            });

    </script>
@endsection()