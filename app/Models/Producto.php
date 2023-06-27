<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria_id',
        'is_visible',
        'imagen',
    ];

    public function precio_format()
    {
        return '$' . number_format( $this->precio, 2, ',', '.' );
    }

    public function categoria()
    {
        return $this->hasOne( Categoria::class, 'id', 'categoria_id' );
    }
}
