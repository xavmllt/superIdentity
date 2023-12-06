// Fonction pour récupérer les paramètres de l'URL
function getParams() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams;
}

function mettreAJourURL() {
    window.location.href = `question6.html?compteurBelle=${compteurBelle}&compteurBulle=${compteurBulle}&compteurRebelle=${compteurRebelle}&compteurOther=${compteurOther}`;
};

// Récupérer la valeur du compteur depuis les paramètres de l'URL
const params = getParams();
let compteurBelle = parseInt(params.get('compteurBelle')) || 0;
let compteurBulle = parseInt(params.get('compteurBulle')) || 0;
let compteurRebelle = parseInt(params.get('compteurRebelle')) || 0;
let compteurOther = parseInt(params.get('compteurOther')) || 0;
onsole.log(compteurBelle);
console.log(compteurBulle);
console.log(compteurRebelle);


let clickCount = 0;
let clickTimeout = 0;

belle.addEventListener("click", ()=>{
    clickCount++;
    if(clickCount === 1){
        clickTimeout = setTimeout(function(){
            clickCount = 0;
        },   300);
    }else if(clickCount === 2){
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurBelle++;
        mettreAJourURL();
    };
});

bulle.addEventListener("click", ()=>{
    clickCount++;
    if(clickCount === 1){
        clickTimeout = setTimeout(function(){
            clickCount = 0;
        },   300);
    }else if(clickCount === 2){
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurBulle++;
        mettreAJourURL();
    };
});

rebelle.addEventListener("click", ()=>{
    clickCount++;
    if(clickCount === 1){
        clickTimeout = setTimeout(function(){
            clickCount = 0;
        },   300);
    }else if(clickCount === 2){
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurRebelle++;
        mettreAJourURL();
    };
});

other.addEventListener("click", ()=>{
    clickCount++;
    if(clickCount === 1){
        clickTimeout = setTimeout(function(){
            clickCount = 0;
        },   300);
    }else if(clickCount === 2){
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurOther++;
        mettreAJourURL();
    };
});