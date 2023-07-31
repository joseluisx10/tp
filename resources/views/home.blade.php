@extends('layouts.app')

@section('content')
<div class="">
    <div class="d-flex justify-content-center bg-dark p-4">
        <div class="">
            <div class="">
                <div class="xp-searchbar d-flex" role="search">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn" type="submit" id="button-addon2">Go
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/storage/productos/pcgamer.webp') }}" class="img-fluid" class="" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod/images/fotos-1533279584.jpg" class="" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod/images/fotos-1533279584.jpg" class="img-fluid" class="" alt="...">
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
    <div class="d-flex justify-content-center bg-whiter p-4">
        <div class="links-categoria d-flex " style="max-width: 1024px;">
            <div class="me-3">
                <a class="me-3 img-fluid" href=""><img class="text-white" src="{{ asset('/storage/productos/almacenamiento.png') }}" width="85" alt=""></a>
                <p class="mt-2 text-center">Almacenamiento</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/fuentes.png') }}" width="85" alt=""></a>
                <p class="me-2">Fuente</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/gabinete.svg') }}" width="85" alt=""></a>
                <p class="mt-2">Gabinete</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/memoriasRam.png') }}" width="85" alt=""></a>
                <p class="mt-2">Memoria Ram</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/motherboards.png') }}" width="85" alt=""></a>
                <p class="mt-2">Motherboard</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/procesadores.png') }}" width="85" alt=""></a>
                <p class="mt-2">Procesadores</p>
            </div>
            <div class="me-3">
                <a class="me-3" href=""><img src="{{ asset('/storage/productos/monitores.png') }}" width="85" alt=""></a>
                <p class="mt-2">Monitores</p>
            </div>

        </div>

    </div>
</div>
<section>
    <div class="container">
        @if ($productos->count() > 0)

        @include('includes.menu-home')

    </div>
    @else
    <div>
        <p>No existen productos cargados. </p>
    </div>

    @endif
</section>

@endsection