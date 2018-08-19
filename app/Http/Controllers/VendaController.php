<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\ClienteModel;
use App\Http\Requests\VendaRequest;
use App\ProdutoModel;
use App\VendaModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    protected $model;

    protected $clienteModel;

    protected $produtoModel;

    public function __construct(VendaModel $vendaModel, ClienteModel $clienteModel, ProdutoModel $produtoModel)
    {
        $this->model = $vendaModel;
        $this->clienteModel = $clienteModel;
        $this->produtoModel = $produtoModel;
    }

    public function index()
    {
        $title = 'Venda de Produtos';

        $venda = $this->model->all();

        return view('venda.index', compact('venda', 'title'));
    }

    public function create()
    {
        $title = 'Nova Venda';

        $clientes = $this->clienteModel->all();

        $produtos = $this->produtoModel->all();

        return view('venda.create', compact('title', 'clientes', 'produtos'));
    }

    public function store(VendaRequest $vendaRequest)
    {
        $input = $vendaRequest->all();

        DB::transaction(function () use ($input) {

            $this->model->vend_data_venda = implode('-', array_reverse(explode('/', $input['dataVenda'])));
            $this->model->cod_cliente = $input['cliente'];
            $this->model->created_by = Auth::user()->usua_id;

            $valorTotal = 0;
            $produtoAux = [];

            foreach ($input['produto'] as $key => $produto) {
                $produtoModel = $this->produtoModel->find($produto);
                $valorTotal += ($produtoModel->prod_valor * $input['quantidade'][$key]);
                $quantidadeProduto=$produtoModel->prod_quantidade - $input['quantidade'][$key];
                $produtoModel->prod_quantidade = $quantidadeProduto;
                $produtoModel->save();
                $produtoAux[] = [
                    'cod_produto' => $produto,
                    'vend_pro_quantidade' => $input['quantidade'][$key],
                ];
            }
            $this->model->vend_valor_total = $valorTotal;
            $this->model->save();
            $this->model->produto()->attach($produtoAux);

            return true;
        });

        return redirect()->to('venda');
    }

    public function show($id)
    {
        $venda = $this->model->find($id);

        return view('venda.view', compact('venda'));
    }

    public function destroy($id)
    {
        $venda = $this->model->find($id);

        $venda->deleted_by = Auth::user()->usua_id;
        $venda->save();

        $venda->delete();

        return redirect()->to('venda');
    }
}
