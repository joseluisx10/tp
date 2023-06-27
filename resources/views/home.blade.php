@extends('layouts.app')

@section('content')
<div class=""> 
    <div class="d-flex justify-content-center bg-dark p-4">
        <div class="">
            <form class=""  role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('/storage/productos/pcgamer.webp') }}"  class="img-fluid" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://hips.hearstapps.com/hmg-prod/images/fotos-1533279584.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://hips.hearstapps.com/hmg-prod/images/fotos-1533279584.jpg"  class="img-fluid" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<section class="my-md-4 mx-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
         @if ($productos->count() > 0)
            @foreach ($productos as $prod)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('/storage/' . $prod->imagen) }}" class="card-img-top w-50" alt="...">
                        <div class="card-body">
                            <p class="card-title h5 fw-semibold text-md-start fs-5">{{ $prod->nombre }} </p>
                            <p class="card-text text-md-start fs-6">{{ $prod->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div>
                <p>No existen productos cargados. </p>
            </div>
                               
        @endif

        {{ $productos->links() }}
        
    </div>
</section>
@endsection
