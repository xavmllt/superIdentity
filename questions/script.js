let choix = document.querySelectorAll(".choix");
let selectedAnswer = null;
    
choix.forEach(element => {
    element.addEventListener("click", () => {
        choix.forEach(item => {
            item.style.background = "";
        });
        element.style.background = "linear-gradient(to right, rgba(133,224,133,1), rgba(255,77,77,1), rgba(0,212,255,1)) border-box";
        selectedAnswer = element.innerText; // Enregistre la réponse sélectionnée
    });
});









