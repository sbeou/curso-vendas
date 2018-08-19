<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\UsuarioModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $model;

    public function __construct(UsuarioModel $usuarioModel)
    {
        $this->model = $usuarioModel;
    }

    public function create()
    {
        return view('login');
    }

    public function autenticar(LoginRequest $request)
    {
        $input = $request->all();

        $usuario = $this->model->where('usua_login', '=', $input['login'])->first();

        if (!$usuario) {
            Session::flash('error', 'Usuário e senha inválidos, usuário não encontrado.');
            return redirect()->back();
        }

        $senha = md5($input['senha']);

        if ($usuario->usua_senha != $senha) {
            Session::flash('error', 'Usuário e senha inválidos, senha inválida.');
            return redirect()->back();
        }

        Auth::login($usuario);

        return redirect()->to('/home');
    }
    
    public function logout()
    {
        Auth::logout();

        return redirect()->to('login');
    }
}
