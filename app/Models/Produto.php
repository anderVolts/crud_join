<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $primaryKey = 'id_produto';

    protected $fillable = [
        'id_produto',
        'id_categoria_produto',
        'nome_produto',
        'valor_produto'
    ];

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categoria_planejamento');
    }
}
