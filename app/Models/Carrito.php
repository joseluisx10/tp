<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cantidad'
    ];

    public function producto()
    {
        return $this->hasOne( Producto::class, 'id', 'producto_id' );
    }

    public function user()
    {
        return $this->hasOne( User::class, 'id', 'usuario_id' );
    }
}
