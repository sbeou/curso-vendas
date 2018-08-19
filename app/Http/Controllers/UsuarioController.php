<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarioModel;
use Illuminate\Support\Facades\View;

class UsuarioController extends Controller
{
    protected $model;

    public function __construct(UsuarioModel $usuarioModel)
    {
        $this->model = $usuarioModel;
    }

    public function index()
    {
        $usuario = $this->model->all();

        return View::make('usuario.index')
        ->with(
            [
                'usuario'=> $usuario,
                'title' => 'Lista dos usuários'
            ]
        );
    }

    public function create()
    {
        return View::make('usuario.create')->with('title','Adicionar novo usuário');   
    }
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = request()->all();

        $usuario = new UsuarioModel();
        $usuario->usua_nome = $input['nome'];
        $usuario->usua_login = $input['login'];
        $usuario->usua_senha = md5($input['senha']);

        $usuario->save();
        
        return redirect('usuario')->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $usuario = UsuarioModel::find($id);

        // show the view and pass the nerd to it
        return View::make('usuario.show')
            ->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $usuario = UsuarioModel::find($id);
        return view('usuario.edit')->with(
            [
                'usuario' => $usuario,
                'title' => 'Atulizar usuário'
            ]
            );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $usuario = UsuarioModel::find($id);
        $input = request()->all();

        $usuario->usau_nome = $input['nome'];
        $usuario->usau_login = $input['login'];

        $usuario->save();

        return redirect('usuario')->with('success', 'Usuário atualizado com sucesso!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $usuario = UsuarioModel::find($id);

        $usuario->delete();

        return redirect('usuario')->with('success', 'Usuário apagado com sucesso!');;
    }
}
