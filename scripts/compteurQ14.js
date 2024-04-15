function getParams() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams;
};

function mettreAJourURL() {
    window.location.href = `../pages/question15.php?compteurBelle=${compteurBelle}&compteurBulle=${compteurBulle}&compteurRebelle=${compteurRebelle}&compteurOther=${compteurOther}`;
};

const params = getParams();
let compteurBelle = parseInt(params.get('compteurBelle')) || 0;
let compteurBulle = parseInt(params.get('compteurBulle')) || 0;
let compteurRebelle = parseInt(params.get('compteurRebelle')) || 0;
let compteurOther = parseInt(params.get('compteurOther')) || 0;

let clickCount = 0;
let clickTimeout = 0;

// addEventListener for the double click

belle.addEventListener("click", ()=> {

    clickCount++; 

    if(clickCount === 1) { 
        
        clickTimeout = setTimeout(function() { 
            clickCount = 0; 
        },   300);
    }else if(clickCount === 2) { 
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurBelle++;
        mettreAJourURL();
    };

});

bulle.addEventListener("click", ()=> {

    clickCount++;

    if(clickCount === 1) {

        clickTimeout = setTimeout(function() {
            clickCount = 0;
        },   300);
    }else if(clickCount === 2) {
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurBulle++;
       mettreAJourURL();
    };

});

rebelle.addEventListener("click", ()=> {

    clickCount++;

    if(clickCount === 1){

        clickTimeout = setTimeout(function() {
            clickCount = 0;
        },   300);   
    }else if(clickCount === 2) {
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurRebelle++;
        mettreAJourURL();
    };

});

other.addEventListener("click", ()=> {

    clickCount++;

    if(clickCount === 1) {

        clickTimeout = setTimeout(function() {
            clickCount = 0;
        },   300);
    }else if(clickCount === 2) {
        clearTimeout(clickTimeout);
        clickCount = 0;
        compteurOther++;
        mettreAJourURL();
    };

});