@extends('welcome')
@section('content')

  <!--//////////////WELCOME/////////////////////-->
<div id="well">
  <h1 class="titbvn text-white">Bienvenue dans les paramètres </h1>
    <p id="bvn" class="text-white">Ici, Vous allez configurer vos paramètres pour entrer en négociation</p>
</div>

<div id="paratime">
  <button type="button" class="btn-lg btn btn-block col-8 m-auto text-white font-weight-bold" id="open">Configurer vos paramètres</button>
</div>

<!--//////////////////NEGODEVIS/////////////////////-->
    <div id="theapplinego"><!--div start-->
<!--//////////////////nb tour and exit/////////////////////-->

    <div id="stop"> !! La négociation est terminé !! <br>
  Veuillez "accepter" ou "refuser" la dernière proposition.
       <div id="btnend">
     <button type="submit" class="btn btn-success accept">Acceptez l'offre</button>
    <button type="submit" class="btn btn-danger refus" id="theEND">Refuser l'offre</button>
       </div>
    </div>

    <div id="allheaderelements">

<!--////////////////PRICE START///////////////////--->

    <div id="divini">
      <span id="divini-text">Prix initial du vendeur :</span>
       <span id="priceini"></span>
        <span id="price-currency">€</span>
    </div>

<!---////////TIMER/////////-->

<div id="pomodoro-app">
    <div id="container">
      <div id="timer">
          <div id="time">
              <span id="minutes"></span>
              <span id="colon">:</span>
              <span id="seconds">00</span>
          </div>
          <!--<div id="filler"></div>-->
         <!-- <div id="buttons">
              <button id="work">Work</button>
              <button id="stop">Stop</button>
          </div>-->
      </div>
  </div>
</div>

  <div id="exitandtour">
    <button type="submit" class="btn btn-danger" id="exyt">Quitter la negociation</button>
    <span id="tourcontent">Nombre de tours :<div>
        <span id="count"></span>
    </div></span>
  </div>

</div>

<!--//////////tableau appli////////////////////-->
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="titletable self"><div class="cell seller-price-cell">
        Prix Vendeur
      </div></th>
      <th scope="col" class="titletable buy"><div class="cell buyer-price-cell">Prix Acheteur</div></th>
      <th scope="col" class="titletable counter"><div class="cell counter-cell ">0</div></th>
      <th scope="col" class="titletable want"><div class="cell wanted-price-cell">Prix proposé</div></th>
      <th scope="col" class="titletable sold"><div class="cell sold-cell">Rabais %</div></th>
    </tr>
  </thead>
  <tbody id="theTABLE">

  </tbody>
</table>

<!------///////////validation//////////-------------->
<div id="bcfull">
  <p id="warning-message">
    !! Attention il ne vous reste plus qu'une minutes de négociation !!
  </p>
</div>
<div id="thenego" class="mt-5">
      <div id="valprop" class="d-flex mr-auto ml-auto justify-content-around">
      <input class="col-4 ml-5" type="number" id="validationCustom07" placeholder="Entrez une proposition" required>
      <button class="btn btn-warning font-weight-bold ml-5 col-4" type="submit" id="validaction">Valider votre proposition</button>
    </div>



<div id="yesorno">
    <button type="submit" class="btn btn-success accept" id="accept">Acceptez l'offre</button>
    <button type="submit" class="btn btn-danger refus" id="refus">Refuser l'offre</button>
</div>
</div>
</div><!--div end-->

<!--//PARAMETERS WINDOW//-->

    <div id="containerparam" class="col-9 rounded text-center" >
     <form method="post" action="" class="needs-validation" novalidate>
<fieldset>
    <button id="ixi" class="btn col-12 text-right">&#10060;</button>
       <h2 id="parameters-title" class="font-weight-bold text-center">Modifier vos Paramètres</h2>

       <hr class="my-4 border-dark col-8">

    <div class="row">
      <div class="col-4 cardinput">
       <label class="control-label titi font-weight-bold" for="validationCustom01">Prix du devis : </label>
          <div class="form-group">
             <div class="input-group mb-3">
              <input type="text" class="form-control" id="validationCustom01 " placeholder="Entrez le prix du devis" value="" required>
        <div class="input-group-append">
         <span class="input-group-text">€</span>
        </div>
          </div>
            </div>
               <div class="valid-feedback">Validé !</div>
    </div>

    <div class="cardinput col-4">
      <label for="validationCustom02" class="titi font-weight-bold">Nombre de trappes :</label>
         <input type="number" class="form-control nbt" id="validationCustom02" placeholder="Entrez votre nombre d'essais" value="" required>
     <div class="valid-feedback">
            Validé !
     </div>
    </div>

    <div class="col-4 cardinput">
        <label class="control-label titi font-weight-bold" for="validationCustom03">Taux de la trappe : </label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="validationCustom03 " placeholder="Entrez le taux de trappe" value="" required>
              <div class="input-group-append">
               <span class="input-group-text">%</span>
              </div>
           </div>
        <div class="valid-feedback">
        Validé !
        </div>
    </div>

    <hr class="col-8">

    <div class="cardinput col-4">
      <label for="validationCustom04" class=" control-label titi font-weight-bold">Nombre de tours : </label>
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="validationCustom04" placeholder="Entrez votre nombre de tours" value="" required>
        </div>
        <div class="valid-feedback">
            Validé !
        </div>
    </div>

    <div class="cardinput col-4">
        <label for="validationCustom05" class="titi font-weight-bold">Prix minimum de vente : </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control field rounded-left" id="validationCustom05 " placeholder="Entrez votre prix minimum" value="" required>
                <div class="input-group-append">
                 <span class="input-group-text rounded-right">€</span>
                </div>
            </div>
                <div class="valid-feedback">Validé !</div>
    </div>

    <div class="cardinput col-4">
        <label for="validationCustom06" class="titi font-weight-bold">Temps de négociation (en min) : </label>
            <input type="number" class="form-control" id="validationCustom06" placeholder="Entrez la durée de négociation" value="" required>
        <div class="valid-feedback">Validé !</div>
    </div>


<!--/////////////////////CARD CONFIRM////////////////////////////////-->

<div class="card text-white bg-secondary" id="confirm" style="width: 25rem;height:10rem;">
    <div class="card-body">
        <h3 class="card-title font-weight-bold">Validation</h3>
        <p class="card-text font-weight-bold">Voulez-vous confirmer ces paramètres ?</p>
        <a href="#" class="btn btn-success btn-lg" id="conf">Je confirme</a>
        <a href="#" class="btn btn-warning btn-lg" id="back">Retour</a>
    </div>
</div>
  <button class="btn btn-success text-white font-weight-bold p-3 rounded-pill mr-auto ml-auto mt-5 mb-5" type="submit" id="valid">Valider vos paramètres</button>
</fieldset>
    </form>
</div>


  <!--///////////////////////////script////////////////////////////////////////////////////-->
  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
@endsection
