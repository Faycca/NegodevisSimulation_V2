@extends('welcome')
@section('content')
<h1 class="text-center bg-primary font-weight-bold text-decoration-none display-3 col-10 mr-auto ml-auto mt-5">Les devis</h1>

<div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/facture.jpg" class="img_facture d-block w-100 m-auto" alt="devis01">
            <button class="btn btn-secondary col mt-3 font-weight-bold text-warning">Lancer la negociation pour le devis n°1</button>
          </div>
          <div class="carousel-item">
            <img src="img/facture.jpg" class="img_facture d-block w-100 m-auto" alt="devis02">
            <button class="btn btn-secondary col mt-3 font-weight-bold text-warning">Lancer la negociation pour le devis n°2</button>
          </div>
          <div class="carousel-item">
            <img src="img/facture.jpg" class="img_facture d-block w-100 m-auto" alt="devis03">
            <button class="btn btn-secondary col mt-3 font-weight-bold text-warning">Lancer la negociation pour le devis n°2</button>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

@endsection
