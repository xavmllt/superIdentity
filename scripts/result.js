const bouton = document.getElementById("bouton");

function getParams() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams;
};

const params = getParams();
let compteurBelle = parseInt(params.get('compteurBelle')) || 0;
let compteurBulle = parseInt(params.get('compteurBulle')) || 0;
let compteurRebelle = parseInt(params.get('compteurRebelle')) || 0;
let compteurOther = parseInt(params.get('compteurOther')) || 0;

bouton.addEventListener("click", ()=> {
    if(compteurBelle > compteurBulle && compteurBelle > compteurRebelle && compteurBelle > compteurOther) {
        window.location.href = "../pages/belle.php";
    }else if(compteurBulle > compteurBelle && compteurBulle > compteurRebelle && compteurBulle > compteurOther) {
        window.location.href = "../pages/bulle.php";
    }else if(compteurRebelle > compteurBelle && compteurRebelle > compteurBulle && compteurRebelle > compteurOther) {
        window.location.href = "../pages/rebelle.php";
    }else {
        window.location.href = "../pages/selfIdentity.php";
    };
});

