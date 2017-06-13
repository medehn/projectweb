/**
 * Created by Anni on 13.06.17.
 */
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
