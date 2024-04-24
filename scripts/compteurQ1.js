const belle = document.getElementById("belle");
const bulle = document.getElementById("bulle");
const rebelle = document.getElementById("rebelle");
const other = document.getElementById("other");

let compteurBelle = 0;
let compteurBulle = 0;
let compteurRebelle = 0;
let compteurOther = 0;



function mettreAJourURL() {
    window.location.href = `../pages/question2.php?compteurBelle=${compteurBelle}&compteurBulle=${compteurBulle}&compteurRebelle=${compteurRebelle}&compteurOther=${compteurOther}`;
};


// addEventListener for the double click
let clickCount = 0;

belle.addEventListener("click", () => {
    clickCount++; // + 1 a chaque click

    if (clickCount === 2) { // si deux clics consécutifs
        clickCount = 0; // réinitialise le compteur de clics
        compteurBelle++; // incrémente le compteur du bouton "belle"
        mettreAJourURL(); // met à jour l'URL avec les compteurs actualisés
    };
});

bulle.addEventListener("click", () => {
    clickCount++; 

    if (clickCount === 2) { 
        clickCount = 0; 
        compteurBulle++;
        mettreAJourURL(); 
    };
});

rebelle.addEventListener("click", () => {
    clickCount++; 

    if (clickCount === 2) { 
        clickCount = 0; 
        compteurRebelle++; 
        mettreAJourURL(); 
    };
});

other.addEventListener("click", () => {
    clickCount++; 

    if (clickCount === 2) { 
        clickCount = 0; 
        compteurOther++;
        mettreAJourURL(); 
    };
});



