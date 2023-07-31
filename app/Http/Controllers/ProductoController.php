<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{

    
    private $rules = [
        'nombre' => 'required|max:255',
        'descripcion' => 'required',
        'precio' => 'numeric|max:9999999',
        'categoria_id' => 'required',
        
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::where('is_visible', true)
        ->paginate(5);
        return view('producto.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto.create', ['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Agregamos la validación de imágenes.
         $this->rules['imagen'] = 'required|dimensions:max_width=400,max_height=400, min_width=200,min_height=200|mimes:jpg,bmp,png,gif';

         $validator = Validator::make($request->all(), $this->rules, [
             'nombre.required' => 'El nombre del producto es obligatorio.',
             'descripcion.required'=>'La descripcion del producto es obligatorio'
         ]);
 
         if($validator->fails())
         {
             return redirect()
                 ->route('productos.create')
                 ->withErrors($validator)
                 ->withInput();
         }
 
         //Guardamos el nombre del archivo, modificando el nombre original del cliente con time.
         $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
 
         //Subimos el archivo a una carpeta del proyecto y guardamos el nombre con el que subió el archivo.
         $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'categoria_id' => $request->categoria_id,    
            'imagen' => $imagen,
        ]);

        return redirect()
            ->route('productos.index')
            ->with('status', 'El producto se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('producto.show', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('producto.edit', [
            'categorias'=>$categorias,
            'producto'=>$producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
            if($request->file('imagen')){
                $this->rules['imagen'] = 'required|mimes:jpg,bmp,png,gif';
            }

            $validator = Validator::make($request->all(), $this->rules, [
                'nombre.required' => 'El nombre del producto es obligatorio.',
                'descripcion.required'=>'La descripcion del producto es obligatorio'
            ]);
    
            if($validator->fails())
            {
                return redirect()
                    ->route('productos.edit', $producto)
                    ->withErrors($validator)
                    ->withInput();
            }
    
     
            if($request->file('imagen')){
                
           
                $imagen_nombre = time() . $request->file('imagen')->getClientOriginalName();
                $imagen = $request->file('imagen')->storeAs('productos', $imagen_nombre, 'public');
    
            }else{
                $imagen = $producto->imagen;
            }        
    
            $producto->update([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'precio' => $request->precio,
                'categoria_id' => $request->categoria_id,
                'imagen' => $imagen,
            ]);
    
            return redirect()
                ->route('productos.index')
                ->with('status', 'El producto se modifico correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->update([
            'is_visible' => false,
        ]);

        return redirect()
            ->route('productos.index')
            ->with('status', 'El producto se ha eliminado correctamente');

    }
}
