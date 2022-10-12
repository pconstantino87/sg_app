<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    //
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '00.000.000/0000-40', 
                'ddd' => '11', 
                'telefone' => '1111-5151',],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'N',
                'cnpj' => '00.000.000/0000-40', 
                'ddd' => '13', 
                'telefone' => '1111-5151',
            ],
            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'N',
                'cnpj' => '00.000.000/0000-40', 
                'ddd' => '14', 
                'telefone' => '1111-5151',
            ],
            3 => [
                'nome' => 'Fornecedor 4', 
                'status' => 'S',
                'cnpj' => '00.000.000/0000-40', 
                'ddd' => '15', 
                'telefone' => '1111-5151',
        ],
            4 => [
                'nome' => 'Fornecedor 5', 
                'status' => 'S',
                'cnpj' => '00.000.000/0000-40', 
                'ddd' => '16', 
                'telefone' => '1111-5151',
            ],
        ];

        
        return view('app.fornecedores.index', compact('fornecedores'));
        //return view('app.fornecedores.index');
    }
}
