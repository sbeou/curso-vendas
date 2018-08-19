<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\FornecedorModel;
use App\Http\Requests\CompraRequest;
use App\ProdutoModel;
use App\CompraModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    protected $model;

    protected $fornecedorModel;

    protected $produtoModel;

    public function __construct(CompraModel $compraModel, FornecedorModel $fornecedorModel, ProdutoModel $produtoModel)
    {
        $this->model = $compraModel;
        $this->fornecedorModel = $fornecedorModel;
        $this->produtoModel = $produtoModel;
    }

    public function index()
    {
        $title = 'Compra de Produtos';

        $compra = $this->model->all();

        return view('compra.index', compact('compra', 'title'));
    }

    public function create()
    {
        $title = 'Nova Compra';

        $fornecedores = $this->fornecedorModel->all();

        $produtos = $this->produtoModel->all();

        return view('compra.create', compact('title', 'fornecedores', 'produtos'));
    }

    public function store(CompraRequest $compraRequest)
    {
        $input = $compraRequest->all();

        DB::transaction(function () use ($input) {

            $this->model->comp_data_compra = implode('-', array_reverse(explode('/', $input['dataCompra'])));
            $this->model->cod_fornecedor = $input['fornecedor'];
            $this->model->created_by = Auth::user()->usua_id;

            $valorTotal = 0;
            $produtoAux = [];

            foreach ($input['produto'] as $key => $produto) {
                $produtoModel = $this->produtoModel->find($produto);
                $valorTotal += ($produtoModel->prod_valor * $input['quantidade'][$key]);
                $quantidadeProduto=$produtoModel->prod_quantidade + $input['quantidade'][$key];
                $produtoModel->prod_quantidade = $quantidadeProduto;
                $produtoModel->save();
                $produtoAux[] = [
                    'cod_produto' => $produto,
                    'comp_pro_quantidade' => $input['quantidade'][$key],
                ];
            }

            $this->model->comp_valor_total = $valorTotal;
            $this->model->save();

            $this->model->produto()->attach($produtoAux);

            return true;
        });

        return redirect()->to('compra');
    }

    public function show($id)
    {
        $compra = $this->model->find($id);

        return view('compra.view', compact('compra'));
    }

    public function destroy($id)
    {
        $compra = $this->model->find($id);

        $compra->deleted_by = Auth::user()->usua_id;
        $compra->save();

        $compra->delete();

        return redirect()->to('compra');
    }
}
