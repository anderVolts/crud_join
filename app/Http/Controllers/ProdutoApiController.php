<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  DB::table('produtos')
            ->join('categorias', 'id_categoria_produto', '=', 'id_categoria_planejamento')
            ->select('produtos.*', 'categorias.nome_categoria as categoria')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return new ProdutoResource($produto);
        return response()->json(["message" => "Produto Adicionado com sucesso!"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  DB::table('produtos')
            ->join('categorias', 'id_categoria_produto', '=', 'id_categoria_planejamento')
            ->select('produtos.*', 'categorias.nome_categoria as categoria')
            ->where('produtos.id_produto', $id)
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrfail($id);
        $produto->update($request->all());
        return response()->json(["message" => "Atualizado com sucesso!"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrfail($id);
        $produto->delete();
        return response()->json(["message"=> "Deletado com sucesso!"],200);
    }
}
