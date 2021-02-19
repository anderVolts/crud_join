<?php

namespace App\Http\Controllers;


class CategoriaController extends Controller
{

    public function index()
    {
        return view('/categoria/cadastro-categoria');
    }

    public function listar_categoria(){
        return view('/categoria/listar-categoria');
    }

}
