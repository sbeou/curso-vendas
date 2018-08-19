<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;
use Illuminate\Support\Facades\View;
use App\FornecedorModel;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    protected $model;

    protected $fornecedorModel;

    public function __construct(ProdutoModel $produtoModel, FornecedorModel $fornecedorModel)
    {
        $this->model = $produtoModel;
        $this->fornecedorModel = $fornecedorModel;
    }

    public function index()
    {
       $produto = $this->model->all(); 
       $title = 'Lista dos produtos';

       return View::make('produto.index', compact('title' , 'produto'));
    }
    
    public function create()
    {
        $title = 'Adicionar novo produto';
        
        $fornecedor = $this->fornecedorModel->all();

        return View::make('produto.create', compact('title','fornecedor')); 
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();

        $produto = new ProdutoModel();
        $produto->prod_nome = $input['nome_produto'];
        $produto->prod_valor = str_replace(',','.', str_replace('.', '', $input['valor']));
        $produto->prod_data_validade = $input['data_validade'];
        $produto->prod_quantidade = $input['quantidade'];
        $produto->cod_fornecedor = $input['fornecedor'];
        $produto->created_by = Auth::user()->usa_id;

        $produto->save();

        return redirect('produto')->with('success', 'Produto foi criado com sucesso!');
    }

    public function show($id)
    {
        $produto = ProdutoModel::find($id);

        return View::make('produto.show')->with('produto' , $produto);
    }

    public function edit($id)
    {
        $title = 'Atualizar produto';

        $fornecedor = $this->fornecedorModel->all();
        
        $produto = ProdutoModel::find($id);
        
        return view('produto.edit', compact('title','produto','fornecedor'));
    }

    public function update($id)
    {
        $produto = ProdutoModel::find($id);
        
        $input =  request()->all();

        $produto->prod_nome = $input['nome_produto'];
        $produto->prod_valor = str_replace(',','.', str_replace('.', '', $input['valor']));
        $produto->prod_data_validade = $input['data_validade'];
        $produto->prod_quantidade = $input['quantidade'];
        $produto->cod_fornecedor = $input['fornecedor'];
        $produto->updated_by = Auth::user()->usa_id;

        $produto->save();

        return redirect('produto')->with('success', 'Produto foi atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = ProdutoModel::find($id);

        $produto->deleted_by = Auth::user()->usa_id;

        $produto->save();

        $produto->delete();

        return redirect('produto')->with('success', 'Produto apagado com sucesso!');
    }
}