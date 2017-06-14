/**
 * Created by Anni on 13.06.17.
 */



function formValidation() {

    var passid = document.registration.passid;
    var username = document.registration.username;
    var useradd = document.registration.address;
    var uemail = document.registration.email;


        if (password_validation(passid,6)) {
            if (userName_validation(username)) {
                if (addressnotempty(useradd)) {
                    if (validation_email(uemail)) {

                    }
                }
            }
        }

    return false;
}


    function password_validation (passid, min){
    var passid_length = passid.value.length;

    if(passid_length >=6){
        return true;
    } else {
        alert("Das Passwort muss mindestens 6 Zeichen lang sein");
        passid.focus();
        return false;
    }

    }

    function userName_validation (username){

    var letters = /^[A-Za-z]+$/;
    if (username != 0 && username.value.match(letters)){

        return true;

    } else {

        alert('Username darf nur Buchstaben haben');
        username.focus();
        return false;
    }

}

function addressnotempty (useradd){
    var letters = /^[0-9a-zA-Z]+$/;
    if (useradd.value.match(letters) && useradd != null){
        return true;
    } else {
        alert("Dieses Feld muss richtig ausgefüllt werden");
        useradd.focus();
        return false;
    }

}




function validation_email(uemail){

    var formatformail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

    if(uemail.value.match(formatformail)){
        return true;
    } else {
        alert("Bitte eine gültige e-mail Adresse eingeben");
        uemail.focus();
        return false;
    }
}