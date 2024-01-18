// TEST FORMULAIRE EMAIL
const form = document.getElementById('form');
form.addEventListener('submit', function(event){

    // Récupérer les valeurs de l'email 
    let emailVal = document.getElementById('email').value;
    // NON VALUE FOR THE RESTE IF ITS WRONG
    let email = document.getElementById("email");

    // Expression régulière pour vérifier le format d'un email
    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Vérifier l'email
    if(!regexEmail.test(emailVal)){
        alert("L'email entrée n'est pas valide. Veuillez saisir une adresse email correcte.");
        email.value = "";
        event.preventDefault();
        return; // Arrêter l'exécution du script si l'email n'est pas valide
    };
});