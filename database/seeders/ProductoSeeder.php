<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto; 

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre'=>'MICRO AMD RYZEN 3',
            'descripcion'=>'MICRO AMD RYZEN 3 4100 4.0 GHZ AM4 BOX',
            'precio'=>60876,
            'categoria_id'=>1,
            'is_visible'=>true,
            'imagen'=>'',
        ]);
        Producto::create([
            'nombre'=>'MOTHERBOARD GIGABYTE A320M-H',
            'descripcion'=>'MOTHERBOARD GIGABYTE A320M-H AM4',
            'precio'=>43829,
            'categoria_id'=>2,
            'is_visible'=>true,
            'imagen'=>'',
        ]);
        Producto::create([
            'nombre'=>'MEMORIMA RAM CORSAIR RGB PRO 8GB 3200 MHZ DDR4',
            'descripcion'=>'MEMORIMA RAM CORSAIR VENGEANCE RGB PRO 8GB 3200 MHZ DDR4',
            'precio'=>22574,
            'categoria_id'=>3,
            'is_visible'=>true,
            'imagen'=>'',
        ]);
    }
}
