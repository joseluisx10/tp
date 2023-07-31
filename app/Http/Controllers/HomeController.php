<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::where('is_visible', true)
        ->orderBy('id', 'desc')
        ->paginate(6);
        $categorias = Categoria::all();
        return view('home',[
            'productos'=>$productos,
            'categorias'=>$categorias
        ]);
     
    }

    public function detalle(Request $request)
    {
        $productos = Producto::where('is_visible', true)
        ->orderBy('id', 'desc')->get();

        $prod = Producto::find((int)$request->id);

        return view('detalle', [
            'prod'=>$prod,
            'productos'=>$productos
    ]);
    }
}
