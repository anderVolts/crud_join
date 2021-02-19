<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_produto' => $this->id_produto,
            'id_categoria_produto' => $this->id_categoria_produto,
            'nome_produto'  => $this->nome_produto,
            'valor_produto' => $this->valor_produto
        ];
    }
}
