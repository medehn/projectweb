/**
 * Created by Anni on 13.06.17.
 */

function formValidation(userpassword, username, adress, email) {

    var userpassword = document.registration.userpassword;
    var username = document.registration.username;
    var adress = document.registration.adress;
    var email = document.registration.email;


    if (password_validation(userpassword, 6)) {
        if (userName_validation(username)) {
            if (addressnotempty(adress)) {
                if (validation_email(email)) {

                }
            }
        }
    }

    return false;
}

    // Vorraussetzungen für das Passwort, mindestens Länge von 6
    function password_validation(userpassword, min) {
        var userpassword_length = userpassword.value.length;
        min = 6;
        if (userpassword_length >= min) {
            return true;
        } else {
            alert("Das Passwort muss mindestens 6 Zeichen lang sein");
            userpassword.focus();
            return false;
        }

    }

    // Vorraussetzungen Username, soll Buchstaben enthalten etc.
    function userName_validation(username) {

        var letters = /^[A-Za-z]+$/;
        if (username != 0 && username.value.match(letters)) {

            return true;

        } else {

            alert('Username darf nur Buchstaben haben');
            username.focus();
            return false;
        }

    }

//Vorraussetzungen für Adresse, muss gültig sein, für Straße, Hausnummer, Ort & PLZ
    function addressnotempty(adress) {
        var letters = /^[0-9a-zA-Z]+$/;
        if (adress.value.match(letters) && adress != null) {
            return true;
        } else {
            alert("Dieses Feld muss richtig ausgefüllt werden");
            adress.focus();
            return false;
        }

    }

//Vorraussetzungen für die E-mail Adresse, muss vor dem @ was haben, und danach ...
    function validation_email(email) {

        var formatformail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

        if (email.value.match(formatformail)) {
            return true;
        } else {
            alert("Bitte eine gültige e-mail Adresse eingeben");
            email.focus();
            return false;
        }

}