@extends('layouts.app')

@section('content')
<div>
    <section>
        <div class="card bg-dark">
            <div class="container py-3">
                <div class="card-heard row g-0 p-4">
                    <div class="col-lg-5 col-md-5 col-sm-1 d-flex">
                        <div class="bg-light text-center border border-light rounded-2" style="max-width: 100%;">
                            <img src="{{ asset('/storage/' . $prod->imagen) }}" class="img-fluid" style="width: 400px;" alt="{{$prod->nombre}}">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-1 card-body text-secondary fw-bold">
                        <p class="card-title h5 fw-semibold text-md-start fs-1">{{ $prod->nombre }} </p>
                        <p class="card-text text-md-start fs-4">{{ $prod->descripcion }}</p>
                        <p class="card-text text-md-start fs-1">$ {{ $prod->precio }}</p>
                        <p class="card-text text-md-start fs-5"><span>Precio deposito/Transferencia </span><span class="text-danger">ARG {{ $prod->precio }}</span></p>

                        <div>
                            <img src="{{ asset('/storage/productos/mastercard.png')}}" width="40" alt="mastercard">
                            <img src="{{ asset('/storage/productos/paypal.png') }}" width="40" alt="paypal">
                            <img src="{{ asset('/storage/productos/visa.png') }}" width="40" alt="visa">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div>
        <section class="mt-5 container-fluid">
            <div class="row row-cols-1 row-cols-md-3 g-1">
                @if ($productos->count() > 0)
                @foreach ($productos as $producto)
                @include('includes.carProducto', ['producto'=>$producto])
                @endforeach
            </div>
            @else
            <div>
                <p>No existen productos cargados. </p>
            </div>

            @endif
        </section>
    </div>
</div>
@endsection