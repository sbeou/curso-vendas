<?php

namespace App\Http\Controllers;

use App\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    protected $model;

    public function __construct(ClienteModel $clienteModel)
    {
        $this->model = $clienteModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista dos clientes';
        $cliente = $this->model->all();

        return View::make('cliente.index', compact('title', 'cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Adicionar cliente';

        return View::make('cliente.create', compact('title', 'cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $input = $request->all();

        $cliente = new ClienteModel();
        $cliente->clie_nome = $input['nome'];
        $cliente->clie_cpf = $input['cpf'];
        $cliente->clie_telefone = $input['telefone'];
        $cliente->clie_endereco = $input['endereco'];
        $cliente->clie_cidade = $input['cidade'];
        $cliente->clie_estado = $input['estado'];
        $cliente->created_by = Auth::user()->usa_id;

        $cliente->save();

        return redirect('cliente')->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClienteModel  $clienteModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = ClienteModel::find($id);

        return View::make('cliente.show')
        ->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClienteModel  $clienteModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = $this->model->find($id);

        $titulo = 'Editar Cliente';

        return view('cliente.edit', compact('cliente', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClienteModel  $clienteModel
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $cliente = ClienteModel::find($id);
        $input = request()->all();

        $cliente->clie_nome = $input['nome'];
        $cliente->clie_cpf = $input['cpf'];
        $cliente->clie_telefone = $input['telefone'];
        $cliente->clie_endereco = $input['endereco'];
        $cliente->clie_cidade = $input['cidade'];
        $cliente->clie_estado = $input['estado'];
        $cliente->updated_by = Auth::user()->usa_id;

        $cliente->save();

        return redirect('cliente')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClienteModel  $clienteModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = ClienteModel::find($id);

        $cliente->deleted_by =  Auth::user()->usa_id;

        $cliente->save();

        $cliente->delete();

        return redirect('cliente')->with('success', 'Cliente apagado com sucesso!');
    }
}
