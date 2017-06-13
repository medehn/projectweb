/**
 * Created by Anni on 13.06.17.
 */
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