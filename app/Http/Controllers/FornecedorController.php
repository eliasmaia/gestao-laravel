<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedores 1',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '86',
                'telefone' => '98888-5534'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '98888-5534'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '33',
                'telefone' => '98888-5534'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
