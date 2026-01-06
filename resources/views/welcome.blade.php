@extends("template")
@section("contenu")
<div class="container text-center section-principale">

    <h1>Bienvenue</h1>

    <div id="carouselAccueil" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/carousel_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/carousel_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/carousel_3.jpg" class="d-block w-100" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAccueil" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAccueil" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <a class="bouton btn btn-primary" href="{{ route("bateaux.index") }}">Accéder à la flotte</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="../js/carousel.js"></script>
@endsection