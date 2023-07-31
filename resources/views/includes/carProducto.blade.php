<a class="text-decoration-none" href="{{route('detalle', ['id'=>$producto->id])}}">
<div class="col d-flex justify-content-center">
    <div class="card border-light bg-white p-2" style="width: 20rem;">
        <div class="d-flex justify-content-center h-75">
            <img src="{{ asset('/storage/' . $producto->imagen) }}" class="img-fluid" alt="...">
        </div>
        <div class="card-body">
            <p class="card-title h5 fw-semibold text-md-start fs-5">{{ $producto->nombre }} </p>
            <p class="card-text text-md-start fs-6">{{ $producto->descripcion }}</p>
            <p class="card-text text-md-start fs-6">$ {{ $producto->precio }}</p>
        </div>
    </div>
</div>
</a>