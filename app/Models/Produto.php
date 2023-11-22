<?php

// app/Models/Produto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'preco_unitario', 'estoque', 'data_vencimento'];

    // Add any other model-specific methods or relationships here...
}


