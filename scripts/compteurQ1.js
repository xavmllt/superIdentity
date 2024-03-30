const belle = document.getElementById("belle");
const bulle = document.getElementById("bulle");
const rebelle = document.getElementById("rebelle");
const other = document.getElementById("other");
let compteurBelle = 0;
let compteurBulle = 0;
let compteurRebelle = 0;
let compteurOther = 0;
let clickCount = 0;
let clickTimeout = 0;

function mettreAJourURL() {
    window.location.href = `../pages/question2.php?compteurBelle=${compteurBelle}&compteurBulle=${compteurBulle}&compteurRebelle=${compteurRebelle}&compteurOther=${compteurOther}`;
};

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



