let belle = document.getElementById("belle");
let bulle = document.getElementById("bulle");
let rebelle = document.getElementById("rebelle");
let other = document.getElementById("other");
let compteurBelle = 0;
let compteurBulle = 0;
let compteurRebelle = 0;
let compteurOther = 0;
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
        window.location.href = "question2.html?compteurBelle=" + compteurBelle;
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
        window.location.href = "question2.html?compteurBulle=" + compteurBulle;
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
        window.location.href = "question2.html?compteurRebelle=" + compteurRebelle;
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
        window.location.href = "question2.html?compteurOther=" + compteurOther;
    };
});



