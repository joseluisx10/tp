<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria; 

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre'=>'Microprocesador',
        ]);
        Categoria::create([
            'nombre'=>'Motherboard',
        ]);
        Categoria::create([
            'nombre'=>'Memoria Ram',
        ]);
        Categoria::create([
            'nombre'=>'Placa de Video',
        ]);
        Categoria::create([
            'nombre'=>'Almacenamiento',
        ]);
        Categoria::create([
            'nombre'=>'Fuente',
        ]);
        Categoria::create([
            'nombre'=>'Gabinete',
        ]);
        Categoria::create([
            'nombre'=>'Monitor',
        ]);
    }
}
