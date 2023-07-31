<hr>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">

        <div class="accordion accordion-flush mt-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Categorias
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($categorias as $categoria)
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">{{$categoria->nombre}} (<span class="badge bg-primary rounded-pill">14</span>)</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Sub Categorias
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Marcas
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckboxStretched">
                                <label class="form-check-label stretched-link" for="firstCheckboxStretched">First checkbox</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckboxStretched">
                                <label class="form-check-label stretched-link" for="secondCheckboxStretched">Second checkbox</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckboxStretched">
                                <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Third checkbox</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <div>
            <section class="mt-5 container-fluid">
                <div class="row row-cols-1 row-cols-md-3 g-1 lh-lg">
                    @if ($productos->count() > 0)
                    @foreach ($productos as $producto)
                    @include('includes.carProducto')
                    @endforeach
                </div>
                @else
                <div>
                    <p>No existen productos cargados. </p>
                </div>

                @endif
            </section>
            <div class="d-flex justify-content-end me-3 mt-3">
                <span> {{ $productos->links() }}</span>
            </div>
        </div>
    </div>
</div>