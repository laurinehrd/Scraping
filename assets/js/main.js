var inputFirstname = document.getElementById('floatingFirstname');
var inputName = document.getElementById('floatingName');
var inputEmail = document.getElementById('floatingEmail');

var buttonValidate = document.getElementById('validate');
var buttonUpdate = document.getElementById('updateAccount');
var buttonDeleteAccount = document.getElementById('deleteAccount');


buttonUpdate.addEventListener("click", function(){

    // enlever l'attribut disabled
    inputFirstname.removeAttribute("disabled");
    inputName.removeAttribute("disabled");
    inputEmail.removeAttribute("disabled");

    // afficher bouton valider et enlever les autres
    buttonUpdate.style.display = "none";
    buttonDeleteAccount.style.display = "none";
    buttonValidate.style.display = "block";

})