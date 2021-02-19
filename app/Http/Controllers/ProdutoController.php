<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{

    public function index()
    {
        return view('/produtos/cadastro-produto');
    }

    public function listar_produto(){

        return view ('/produtos/listar-produto');
    }

}
