@extends('template')

@section('conteudo')
      <h1>{!! $usuario->usua_nome !!} | Detalhes da conta</h1>
      <dl class='row'>
        <dt class='col-sm-3'>ID</dt>
        <dd class='col-sm-9'>{!! $usuario->usua_id !!}</dd>
        <dt class='col-sm-3'>Nome</dt>
        <dd class='col-sm-9'>{!! $usuario->usua_nome !!}</dd>
        <dt class='col-sm-3'>Login</dt>
        <dd class='col-sm-9'>{!! $usuario->usua_login !!}</dd>
        <dt class='col-sm-3'>Data de cadastre</dt>
        <dd class='col-sm-9'>{!! $usuario->created_at->format('d/m/Y H:i:s') !!}</dd>
      </dl>
      <p><a href="{{ URL::to('usuario/') }}" class='btn btn-outline-info btn-lg'><i class="fas fa-backspace"></i> Voltar na lista dos usuários</a></p>
@endsection