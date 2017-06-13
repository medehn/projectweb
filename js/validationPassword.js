/**
 * Created by Anni on 13.06.17.
 */
function Checker (wrapperId, passwordInputFieldId, passwordSubmitButtonId){


    //erfolgreiche Passwortvergabe, bzw Error wenn nicht passend
    this.successClass = "success";
    this.errorClass = "error";

    //mindestlänge Passwort
    this.minLength = 6;

    //wegen Konstruktor
    this.wrapperField = document.getElementById(wrapperId);
    this.passwordField = document.getElementById(passwordInputFieldId);
    this.passwordSubmitButton = document.getElementById(passwordSubmitButtonId);


    var that = this;

    //Funktion zur Überprüfung des Passworts
    this.check = function () {

        if(this.wrapperField && this.passwordField && this.passwordSubmitButton) {

            var longEnough = this.checkForLength();

            if(longEnough){

                this.wrapperField.className = this.successClass;
                this.passwordSubmitButton.disabled = false;


            } else {

                this.wrapperField.className = this.errorClass;
                this.passwordSubmitButton.disabled = true;
            }

        } else {
            console.error("Eine ID für den Checker existiert nicht")

        }
    };

    //Überprüfen, dass das Passwort von der Länge her passt --> größer oder gleich als this.minLength
    this.checkForLength = function () {
        return (this.minLength <= this.passwordField.value.length);
    };


    ducument.addEventListener("DOMContentLoaded", function(){
        var passwordChecker = new Checker("passwordWrapper", "password", "submitPassword");
    });



}