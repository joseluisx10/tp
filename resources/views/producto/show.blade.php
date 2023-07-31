@extends('layouts.app-admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->nombre }}</div>
                <div class="card-body">

                    <img style="max-width: 100px;" src="{{ asset('/storage/' . $producto->imagen) }}" alt="">

                    <div class="row border-bottom mb-3">
                        <div class="col">{{ $producto->descripcion }}</div>
                        <div class="col">
                             <a href="{{ route('productos.edit', $producto) }}" class="btn btn-success"> Editar producto </a>
                             <form id="form_delete" action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                             <button id="submit_delete" type="submit" href="{{ route('productos.destroy', $producto) }}" class="btn btn-danger"> Eliminar producto </button>
                            </form>
                        </div>
                    </div>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary"> Volver a productos </a>
                

                </div>
            </div>
        </div>
    </div>
</div>

@vite(['resources/js/productos/show.js'])

@endsection