let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoweb = document.getElementById("app");
let fields = document.getElementsByClassName("field");
let open = document.getElementById("open");
let allparam = document.getElementById("containerparam");
let ixi = document.getElementById("ixi");
let appli = document.getElementById("theapplinego")
let exyt = document.getElementById("exyt");
let well = document.getElementById("well");
let priceini = document.getElementById("priceini");
let divini = document.getElementById("divini");
let validaction = document.getElementById("validaction");
let accept = document.getElementById("accept");
let refus = document.getElementById("refus");
let pricewant = document.getElementById("pricewant");
let visibbutton = document.getElementById("valprop");
let yesorno = document.getElementById("yesorno");
let stop = document.getElementById("stop");
let thenego = document.getElementById("thenego");
let theEND = document.getElementById("theEND");

//envoie de données//
let priceshow =document.getElementById("validationCustom01");//prix initial
let trapshow = document.getElementById("validationCustom02");//trappes
let rabshow = document.getElementById("validationCustom03");//rabais%
let tourshow = document.getElementById("validationCustom04");//nombre de tour
let priceminshow = document.getElementById("validationCustom05");//prix minimum de vente
let timeshow = document.getElementById("validationCustom06");//le temps
let actionshow = document.getElementById("validationCustom07");//

//reception affichage de données //
let showcount = document.getElementById("count");///le count du tableau
let showprice = document.getElementById("showprice");//prix initial
let showbuy = document.getElementById("showbuy");//acheteur
let showwant = document.getElementById("showwant");//prix proposé
let showtour = document.getElementById("showtour");//nombre de tour
let showrab = document.getElementById("showrab");// rabais
let showtime = document.getElementById("minutes");//timer

/////validation paramètres////
function checkAllValid()
{
    let allValid = true;
    for(let i=0; i<fields.length;i++)
    {
        if(fields[i].validity.valueMissing)
        {
            allValid = false;
        }
    }
    return allValid;
}

function forcard(event) {

    if(checkAllValid())
    {
        event.preventDefault();
        card.style.display = "initial";
    }else{
        alert("Veuillez remplir TOUS les champs du formulaire pour valider vos paramètres.")
    }
}
///retour///
function ret() {
    card.style.display = "none";
}
///ouvrir les paramètres///
function openParam() {
    allparam.style.display = "initial";

}
///confirmation des paramètres///
 function closeParam() {
    allparam.style.display = "none";
    card.style.display = "none";
    appli.style.display = "initial";
    open.style.display = "none";
    well.style.display = "none";
    divini.style.display = "initial";

    //envoie de données//

    priceini.textContent = priceshow.value;
    showcount.textContent = tourshow.value;
    showtime.textContent = timeshow.value;

 }


///fermeture de l'application///
function closeWindow() {
    allparam.style.display = "none";
    card.style.display = "none";
}

///quitter la négociation///
function closeNego() {
    window.location.reload();
}
/// incrémentation du chiffre / nombre de tour///
let count = 0;
let list = document.querySelector('tr');
list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'TD'){
        ev.target.classList.toggle('checked');
    }
 }, false);


function action() {

    /////////////ajout list////////////////
    var loader = document.getElementById("afficheLoader");
    var tableau = document.getElementById("theTABLE");
    var tr = document.createElement("TR");
    var actionshow = document.getElementById("validationCustom07").value;
    var pricetest = document.getElementById("validationCustom01").value;

    if (actionshow === ''){
        alert("Veuillez entrer une proposition !");

    } else {
        count++
        tableau.appendChild(tr);

        tableau.style.display="none";
        setTimeout(function(){
        tableau.style.display = "";
        }, 10000);

        loader.style.display="initial";
        setTimeout(function(){
        loader.style.display = "none";
        }, 10000);
    }

    document.getElementById("validationCustom07").value = "";
    document.getElementById("validationCustom01").value = "";

    ////////////////////////TD/////////////////////////

    var tdone = document.createElement("TD");
    var txt = document.createTextNode(count);
    var tdtwo = document.createElement("TD");
    var vend = document.createTextNode(pricetest);
    var tdthree = document.createElement("TD");
    var t = document.createTextNode(actionshow);
    var tdfour = document.createElement("TD");
    var want = document.createTextNode("25000");
    var tdfive = document.createElement("TD");
    var sold = document.createTextNode("20%");

    //////////////////////DIV in TD////////////////

    var divone = document.createElement("DIV");
    var divtwo = document.createElement("DIV");
    var divthree = document.createElement("DIV");
    var divfour = document.createElement("DIV");
    var divfive = document.createElement("DIV");

    //////////////////TD class///////////////////

    tr.className = "trTABLE";
    tdtwo.className = "blockall selfed";// vendeur
    tdtwo.id = "y";
    tdthree.className = "blockall buyed";//acheteur
    tdone.className = "blockall countered";//count
    tdfour.className = "blockall wanted";//prix proposé
    tdfour.id = "priceprop";
    tdfive.className = "blockall solded";//rabais %

    ///////////// DIV class////////////////////////

    divone.className ="cell countone";
    divtwo.className ="cell selfone";
    divtwo.id = "xval";
    divthree.className ="cell buythree";
    divfour.className ="cell wantfour";
    divfour.id = "xprop";
    divfive.className ="cell soldone";

    ////////////TD appendChild////////////////

    tr.appendChild(tdtwo);//vendeur
    tr.appendChild(t); // value
    tr.appendChild(tdthree);//count
    tr.appendChild(tdone);//ini
    tr.appendChild(tdfour);//prix proposé
    tr.appendChild(tdfive);//rabais %

    //////DIV appendChild//////////////

    divone.appendChild(txt);//ini
    tdone.appendChild(divone);
    divtwo.appendChild(vend);//vendeur
    tdtwo.appendChild(divtwo);
    divthree.appendChild(t);//count
    tdthree.appendChild(divthree);
    divfour.appendChild(want);//prixproposé
    tdfour.appendChild(divfour);
    divfive.appendChild(sold);//rabais %
    tdfive.appendChild(divfive);

    //////button invisible/////

    visibbutton.style.display = "none";
    yesorno.style.display = "flex";

    ///////decrementation//////

    showcount.textContent--;
    if(showcount.textContent < 1){

      stop.style.display= "flex";
      thenego.style.display = "none";

      } else if (showcount.textContent == 1) {

  stop.style.display= "none";
     }
}

////////conditions//////////////

function acceptNego() {
//alert("Êtes-vous sur de vouloir accepter l'offre de " + "[" + pricewant.value + "] euros");
//alert("prochainement");
}

function refusNego() {
    visibbutton.style.display ="flex";
    yesorno.style.display = "none";
}
///les boutons///

valid.addEventListener("click", forcard);
back.addEventListener("click", ret );
open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);
exyt.addEventListener("click", closeNego);
accept.addEventListener("click", acceptNego);
refus.addEventListener("click", refusNego);
theEND.addEventListener("click", closeNego);
validaction.addEventListener("click", action);



