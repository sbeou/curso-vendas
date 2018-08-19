<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FornecedorModel;
use Illuminate\Support\Facades\View;
use App\Http\Requests\FornecedorRequest;
use Illuminate\Support\Facades\Auth;

class FornecedorController extends Controller
{
    protected $model;

    public function __construct(FornecedorModel $fornecedorModel)
    {
        $this->model = $fornecedorModel;
    }

    public function index()
    {
        $fornecedor = $this->model->all();

        return View::make('fornecedor.index')
        ->with(
            [
                'fornecedor'=> $fornecedor,
                'title' => 'Lista dos fornecedores'
            ]
        );
    }

    public function create()
    {
        return View::make('fornecedor.create')->with('title','Adicionar novo fornecedor');   
    }

    public function store(FornecedorRequest $request)
    {
        $input = $request->all();

        $fornecedor = new FornecedorModel();
        $fornecedor->forn_razao_social = $input['razao_social'];
        $fornecedor->forn_cnpj = $input['cnpj'];
        $fornecedor->forn_email = $input['email'];
        $fornecedor->forn_telefone = $input['telefone'];
        $fornecedor->forn_endereco = $input['endereco'];
        $fornecedor->forn_cidade = $input['cidade'];
        $fornecedor->forn_estado = $input['estado'];
        $fornecedor->forn_nome_contato = $input['nome_contato'];
        $fornecedor->created_by = Auth::user()->usa_id;

        $fornecedor->save();
        
        return redirect('fornecedor')->with('success', 'Fornecedor criado com sucesso!');
    }

    public function show($id)
    {
        $fornecedor = FornecedorModel::find($id);

        return View::make('fornecedor.show')
            ->with('fornecedor', $fornecedor);
    }

    public function edit($id)
    {
        $fornecedor = FornecedorModel::find($id);
        return view('fornecedor.edit')->with(
            [
                'fornecedor' => $fornecedor,
                'title' => 'Atulizar fornecedor'
            ]
            );
    }

    public function update($id)
    {
        $fornecedor = FornecedorModel::find($id);
        $input = request()->all();

        $fornecedor->forn_razao_social = $input['razao_social'];
        $fornecedor->forn_cnpj = $input['cnpj'];
        $fornecedor->forn_email = $input['email'];
        $fornecedor->forn_telefone = $input['telefone'];
        $fornecedor->forn_endereco = $input['endereco'];
        $fornecedor->forn_cidade = $input['cidade'];
        $fornecedor->forn_estado = $input['estado'];
        $fornecedor->forn_nome_contato = $input['nome_contato'];
        $fornecedor->updated_by = Auth::user()->usa_id;

        $fornecedor->save();

        return redirect('fornecedor')->with('success', 'Fornecedor atualizado com sucesso!');
    }
    public function destroy($id)
    {
        $fornecedor = FornecedorModel::find($id);

        $fornecedor->deleted_by =  Auth::user()->usa_id;

        $fornecedor->save();

        $fornecedor->delete();

        return redirect('fornecedor')->with('success', 'Fornecedor apagado com sucesso!');
    }

}
