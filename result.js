const bouton = document.getElementById("bouton");

// Fonction pour récupérer les paramètres de l'URL
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

console.log(compteurBelle);
console.log(compteurBulle);
console.log(compteurRebelle);
console.log(compteurOther);

bouton.addEventListener("click", ()=>{
    if(compteurBelle > compteurBulle && compteurBelle > compteurRebelle && compteurBelle > compteurOther){
        window.location.href = "supernana/belle.html";
    }else if(compteurBulle > compteurBelle && compteurBulle > compteurRebelle && compteurBulle > compteurOther){
        window.location.href = "supernana/bulle.html";
    }else if(compteurRebelle > compteurBelle && compteurRebelle > compteurBulle && compteurRebelle > compteurOther){
        window.location.href = "supernana/rebelle.html";
    }else{
        alert("A suivre");
    };
});

