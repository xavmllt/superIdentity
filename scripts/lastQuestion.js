function getParams() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams;
}

function mettreAJourURL() {
    window.location.href = `../pages/result.php?compteurBelle=${compteurBelle}&compteurBulle=${compteurBulle}&compteurRebelle=${compteurRebelle}&compteurOther=${compteurOther}`;
};

const params = getParams();
let compteurBelle = parseInt(params.get('compteurBelle')) || 0;
let compteurBulle = parseInt(params.get('compteurBulle')) || 0;
let compteurRebelle = parseInt(params.get('compteurRebelle')) || 0;
let compteurOther = parseInt(params.get('compteurOther')) || 0;


// addEventListener for the double click
let clickCount = 0;

belle.addEventListener("click", () => {
    clickCount++; 

    if (clickCount === 2) { 
        clickCount = 0; 
        compteurBelle++; 
        mettreAJourURL(); 
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