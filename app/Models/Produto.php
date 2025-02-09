<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
  use HasFactory;
  protected $fillable = [
    'nome',
    'descricao',
    'quantidade',
    'preco',
    'imagem',
    'categoria_id'
  ];
  public function categoria()
  {
    return $this->belongsTo(Categoria::class, 'categoria_id');
  }
}
